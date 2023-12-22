#include <WiFi.h>
#include <HTTPClient.h>
#include <Arduino_JSON.h>
#include "DHT.h"
#include <OneWire.h>
#include <DallasTemperature.h>

//========================================

//======================================== DHT sensor settings (DHT11).
#define DHTPIN 14 //--> Defines the Digital Pin connected to the DHT11 sensor.
#define DHTTYPE DHT22 //--> Defines the type of DHT sensor used. Here used is the DHT11 sensor.
//========================================

// Defines the Digital Pin of the "On Board LED".
#define ON_Board_LED 2

// Defines GPIO 13 as LED_1.

#define ph 39
#define trigPin 13
#define echoPin 1
#define ldr 36
#define AOUT_PIN 34

  #define water_motor 15
  #define nutrition_pump_1 2
  #define nutrition_pump_2 4
  #define fan 17
  #define growing_light 5
  #define normal_light 18
  #define ph_control_motor  21


//======================================== SSID and Password of your WiFi router.
const char* ssid = "0662221839";
const char* password = "Lahiru1994";
//========================================

//======================================== Variables for HTTP POST request data.
String postData = ""; //--> Variables sent for HTTP POST request data.
String payload = "";  //--> Variable for receiving response from HTTP POST.
//========================================

//======================================== Variables for DHT11 sensor data.

//========================================
const int oneWireBus = 25;
int lightval2;
float calibration_value = 20.24-0.7; //21.34 - 0.7
int phval = 0;
unsigned long int avgval;
int buffer_arr[10],temp;
float temperatureC =0;
float ph_act;
long duration; // variable for the duration of sound wave travel
int distance;
int volume=0;
float h=0;
float t=0;
int ec1=0;
 int lightval=0;

DHT dht(DHTPIN, DHTTYPE);
// Setup a oneWire instance to communicate with any OneWire devices
OneWire oneWire(oneWireBus);
// Pass our oneWire reference to Dallas Temperature sensor
DallasTemperature sensors(&oneWire);
//____________________________ Subroutine to control LEDs after successfully fetching data from database.


//____________________________ VOID SETUP()
void setup() {
  // put your setup code here, to run once:

  Serial.begin(115200); //--> Initialize serial communications with the PC.

  pinMode(ON_Board_LED,OUTPUT); //--> On Board LED port Direction output.

  digitalWrite(ON_Board_LED, HIGH); //--> Turn on Led On Board.

  delay(2000);

  digitalWrite(ON_Board_LED, LOW); //--> Turn off Led On Board.

  //---------------------------------------- Make WiFi on ESP32 in "STA/Station" mode and start connecting to WiFi Router/Hotspot.
  WiFi.mode(WIFI_STA);
  WiFi.begin(ssid, password);
  //----------------------------------------

  Serial.println();
  Serial.println("-------------");
  Serial.print("Connecting");

  //---------------------------------------- The process of connecting the WiFi on the ESP32 to the WiFi Router/Hotspot.
  // The process timeout of connecting ESP32 with WiFi Hotspot / WiFi Router is 20 seconds.
  // If within 20 seconds the ESP32 has not been successfully connected to WiFi, the ESP32 will restart.
  // I made this condition because on my ESP32, there are times when it seems like it can't connect to WiFi, so it needs to be restarted to be able to connect to WiFi.

  int connecting_process_timed_out = 20; //--> 20 = 20 seconds.
  connecting_process_timed_out = connecting_process_timed_out * 2;
  while (WiFi.status() != WL_CONNECTED) {
    Serial.print(".");
    //........................................ Make the On Board Flashing LED on the process of connecting to the wifi router.
    digitalWrite(ON_Board_LED, HIGH);
    delay(250);
    digitalWrite(ON_Board_LED, LOW);
    delay(250);
    //........................................

    //........................................ Countdown "connecting_process_timed_out".
    if(connecting_process_timed_out > 0) connecting_process_timed_out--;
    if(connecting_process_timed_out == 0) {
      delay(1000);
      ESP.restart();
    }
    //........................................
  }
  //----------------------------------------

  digitalWrite(ON_Board_LED, LOW); //--> Turn off the On Board LED when it is connected to the wifi router.

  //---------------------------------------- If successfully connected to the wifi router, the IP Address that will be visited is displayed in the serial monitor
  Serial.println();
  Serial.print("Successfully connected to : ");
  Serial.println(ssid);
  //Serial.print("IP address: ");
  //Serial.println(WiFi.localIP());
  Serial.println("-------------");
  //----------------------------------------

  // Setting up the DHT sensor (DHT11).
  dht.begin();
  sensors.begin();

  delay(2000);
}
//____________________________

//____________________________ VOID LOOP()
void loop() {
  // put your main code here, to run repeatedly

  //---------------------------------------- Check WiFi connection status.
  if(WiFi.status()== WL_CONNECTED) {
    HTTPClient http;  //--> Declare object of class HTTPClient.
    int httpCode;     //--> Variables for HTTP return code.

    //........................................ Process to get LEDs data from database to control LEDs.
    postData = "id=esp32_01";
    payload = "";

    digitalWrite(ON_Board_LED, HIGH);
    Serial.println();
    Serial.println("---------------getdata.php");
    // In this project I use local server or localhost with XAMPP application.
    // So make sure all PHP files are "placed" or "saved" or "run" in the "htdocs" folder.
    // I suggest that you create a new folder for this project in the "htdocs" folder.
    // The "htdocs" folder is in the "xampp" installation folder.
    // The order of the folders I recommend:
    // xampp\htdocs\your_project_folder_name\phpfile.php
    //
    // ESP32 accesses the data bases at this line of code:
    // http.begin("http://REPLACE_WITH_YOUR_COMPUTER_IP_ADDRESS/REPLACE_WITH_PROJECT_FOLDER_NAME_IN_htdocs_FOLDER/getdata.php");
    // REPLACE_WITH_YOUR_COMPUTER_IP_ADDRESS = there are many ways to see the IP address, you can google it.
    //                                         But make sure that the IP address used is "IPv4 address".
    // Example : http.begin("http://192.168.0.0/ESP32_MySQL_Database/Final/getdata.php");
    http.begin("http://192.168.1.2/ESP32_with_MySQL_Database/getdata.php");
    // http.begin("http://192.168.1.2/ESP32_with_MySQL_Database/getdata.php"); //--> Specify request destination
    http.addHeader("Content-Type", "application/x-www-form-urlencoded");        //--> Specify content-type header

    httpCode = http.POST(postData); //--> Send the request
    payload = http.getString();     //--> Get the response payload

    Serial.print("httpCode : ");
    Serial.println(httpCode); //--> Print HTTP return code
    Serial.print("payload  : ");
    Serial.println(payload);  //--> Print request response payload

    http.end();  //--> Close connection
    Serial.println("---------------");
    digitalWrite(ON_Board_LED, LOW);
    //........................................

    // Calls the control_LEDs() subroutine.
    control_outputs();
     delay(500);
    water_temp();
     delay(500);
    lightk();
     delay(500);
    hum_temp();
     delay(500);
    ph1();
     delay(500);
    ultra();
     delay(500);
    ec();
     delay(500);

    // Calls the get_DHT11_sensor_data() subroutine.

    //........................................ The process of sending the DHT11 sensor data and the state of the LEDs to the database.
    String water_motor_s = "";
    String nutrition_pump_1_s = "";
    String nutrition_pump_2_s = "";
    String fan_s = "";
    String growing_light_s = "";
    String normal_light_s = "";
    String ph_control_motor_s = "";

    if (digitalRead(water_motor) == 1) water_motor_s = "ON";
    if (digitalRead(water_motor) == 0) water_motor_s= "OFF";
    if (digitalRead(nutrition_pump_1) == 1) nutrition_pump_1_s = "ON";
    if (digitalRead(nutrition_pump_1) == 0) nutrition_pump_1_s = "OFF";
    if (digitalRead(nutrition_pump_2) == 1) nutrition_pump_2_s = "ON";
    if (digitalRead(nutrition_pump_2) == 0) nutrition_pump_2_s = "OFF";
    if (digitalRead(fan) == 1) fan_s = "ON";
    if (digitalRead(fan) == 0) fan_s = "OFF";
    if (digitalRead(growing_light) == 1) growing_light_s = "ON";
    if (digitalRead(growing_light) == 0) growing_light_s = "OFF";
    if (digitalRead(normal_light) == 1) normal_light_s = "ON";
    if (digitalRead(normal_light) == 0) normal_light_s = "OFF";
    if (digitalRead(ph_control_motor) == 1) ph_control_motor_s = "ON";
    if (digitalRead(ph_control_motor) == 0) ph_control_motor_s = "OFF";



    postData = "id=esp32_01";
    postData += "&water_capacity=" + String(volume);
    postData += "&ambient_temperature=" + String(t);
    postData += "&ambient_humidity=" + String(h);
    postData += "&water_temperature=" + String(temperatureC);
    postData += "&ph=" + String(ph_act);
    postData += "&ec=" + String(ec1);
    postData += "&ambient_light=" + String(lightval2);
    postData += "&water_motor=" + water_motor_s;
    postData += "&nutrition_pump_1=" + nutrition_pump_1_s;
    postData += "&nutrition_pump_2=" + nutrition_pump_2_s;
    postData += "&fan=" + fan_s;
    postData += "&growing_light=" + growing_light_s;
    postData += "&normal_light=" + normal_light_s;
    postData += "&ph_control_motor=" + ph_control_motor_s;
    payload = "";

    digitalWrite(ON_Board_LED, HIGH);
    Serial.println();
    Serial.println("---------------updateDHT11data_and_recordtable.php");
    Example : http.begin("http://192.168.0.0/ESP32_MySQL_Database/Final/updateDHT11data_and_recordtable.php");
   // http.begin("http://192.168.1.2/SE555/app/Http/Controllers/SensorController.php");  //--> Specify request destination
    http.addHeader("Content-Type", "application/x-www-form-urlencoded");  //--> Specify content-type header

    httpCode = http.POST(postData); //--> Send the request
    payload = http.getString();  //--> Get the response payload

    Serial.print("httpCode : ");
    Serial.println(httpCode); //--> Print HTTP return code
    Serial.print("payload  : ");
    Serial.println(payload);  //--> Print request response payload

    http.end();  //Close connection
    Serial.println("---------------");
    digitalWrite(ON_Board_LED, LOW);
    //........................................

    delay(4000);
  }
  //----------------------------------------
}

void water_temp(){
  sensors.requestTemperatures();
  temperatureC = sensors.getTempCByIndex(0);
  Serial.print("w_temp");
 Serial.println(temperatureC );
}
void lightk(){
    lightval = analogRead(ldr);
    lightval2=lightval/10;
    Serial.print("light");
 Serial.println(lightval2);
}
void hum_temp(){
    h = dht.readHumidity();
  // Read temperature as Celsius (the default)
   t = dht.readTemperature();
   Serial.print("humidity: ");
 Serial.println(h);
 Serial.print("a_temp: ");
 Serial.println(t);
}
void ph1(){
  for(int i=0;i<10;i++)
 {
 buffer_arr[i]=analogRead(ph);
 delay(100);
 }
 for(int i=0;i<9;i++)
 {
 for(int j=i+1;j<10;j++)
 {
 if(buffer_arr[i]>buffer_arr[j])
 {
 temp=buffer_arr[i];
 buffer_arr[i]=buffer_arr[j];
 buffer_arr[j]=temp;
 }
 }
 }
 avgval=0;
 for(int i=2;i<8;i++)
 avgval+=buffer_arr[i];
 float volt=(float)avgval*3.3/4096.0/6;
 //Serial.print("Voltage: ");
 //Serial.println(volt);
 ph_act = -5.70 * volt + calibration_value;
 Serial.print("pH Val: ");
 Serial.println(ph_act);
}
void ultra(){
  digitalWrite(trigPin, LOW);
  delayMicroseconds(2);
  // Sets the trigPin HIGH (ACTIVE) for 10 microseconds
  digitalWrite(trigPin, HIGH);
  delayMicroseconds(10);
  digitalWrite(trigPin, LOW);
  // Reads the echoPin, returns the sound wave travel time in microseconds
  duration = pulseIn(echoPin, HIGH);
  // Calculating the distance
  distance = duration * 0.034 / 2; // Speed of sound wave divided by 2 (go and back)
  // Displays the distance on the Serial Monitor
  //Serial.print("Distance: ");
  //Serial.print(distance);
  int distance3=distance/10;
  volume=(3000)-(1.6*distance*10);
  Serial.print("W_capacity: ");
  Serial.print(volume);

}
void ec(){

  ec1 = analogRead(AOUT_PIN); // read the analog value from sensor
  Serial.print("Moisture value: ");
  Serial.println(ec1);
}
//____________________________

void control_outputs() {
  Serial.println();
  Serial.println("---------------control_outputs()");
  JSONVar myObject = JSON.parse(payload);

  // JSON.typeof(jsonVar) can be used to get the type of the var
  if (JSON.typeof(myObject) == "undefined") {
    Serial.println("Parsing input failed!");
    Serial.println("---------------");
    return;
  }
   if (myObject.hasOwnProperty("water_motor")) {
    Serial.print("myObject[\"water_motor\"] = ");
    Serial.println(myObject["water_motor"]);
  }

  if (myObject.hasOwnProperty("nutrition_pump_1")) {
    Serial.print("myObject[\"nutrition_pump_1\"] = ");
    Serial.println(myObject["nutrition_pump_1"]);
  }
if (myObject.hasOwnProperty("nutrition_pump_2")) {
    Serial.print("myObject[\"nutrition_pump_2\"] = ");
    Serial.println(myObject["nutrition_pump_2"]);
  }

  if (myObject.hasOwnProperty("fan")) {
    Serial.print("myObject[\"fan\"] = ");
    Serial.println(myObject["fan"]);
  }
if (myObject.hasOwnProperty("growing_light")) {
    Serial.print("myObject[\"growing_light\"] = ");
    Serial.println(myObject["growing_light"]);
  }

  if (myObject.hasOwnProperty("normal_light")) {
    Serial.print("myObject[\"normal_light\"] = ");
    Serial.println(myObject["normal_light"]);
  }
 if (myObject.hasOwnProperty("ph_control_motor")) {
    Serial.print("myObject[\"ph_control_motor\"] = ");
    Serial.println(myObject["ph_control_motor"]);
  }

  if(strcmp(myObject["water_motor"], "ON") == 0)   {digitalWrite(water_motor, HIGH);  Serial.println("water_motor ON"); }
  if(strcmp(myObject["water_motor"], "OFF") == 0)  {digitalWrite(water_motor, LOW);   Serial.println("water_motor OFF");}
  if(strcmp(myObject["nutrition_pump_1"], "ON") == 0)   {digitalWrite(nutrition_pump_1, HIGH);  Serial.println("nutrition_pump_1 ON"); }
  if(strcmp(myObject["nutrition_pump_1"], "OFF") == 0)  {digitalWrite(nutrition_pump_1, LOW);   Serial.println("nutrition_pump_1 OFF");}
  if(strcmp(myObject["nutrition_pump_2"], "ON") == 0)   {digitalWrite(nutrition_pump_2, HIGH);  Serial.println("nutrition_pump_2 ON"); }
  if(strcmp(myObject["nutrition_pump_2"], "OFF") == 0)  {digitalWrite(nutrition_pump_2, LOW);   Serial.println("nutrition_pump_2 OFF");}
  if(strcmp(myObject["fan"], "ON") == 0)   {digitalWrite(fan, HIGH);  Serial.println("fan ON"); }
  if(strcmp(myObject["fan"], "OFF") == 0)  {digitalWrite(fan, LOW);   Serial.println("fan OFF");}
  if(strcmp(myObject["growing_light"], "ON") == 0)   {digitalWrite(growing_light, HIGH);  Serial.println("growing_light ON"); }
  if(strcmp(myObject["growing_light"], "OFF") == 0)  {digitalWrite(growing_light, LOW);   Serial.println("growing_light OFF");}
  if(strcmp(myObject["normal_light"], "ON") == 0)   {digitalWrite(normal_light, HIGH);  Serial.println("normal_light ON"); }
  if(strcmp(myObject["normal_light"], "OFF") == 0)  {digitalWrite(normal_light, LOW);   Serial.println("normal_light OFF");}
  if(strcmp(myObject["ph_control_motor"], "ON") == 0)   {digitalWrite(ph_control_motor, HIGH);  Serial.println("ph_control_motor ON"); }
  if(strcmp(myObject["ph_control_motor"], "OFF") == 0)  {digitalWrite(ph_control_motor, LOW);   Serial.println("ph_control_motor OFF");}

  Serial.println("---------------");
}
