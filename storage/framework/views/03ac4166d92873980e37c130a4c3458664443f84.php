<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Warning</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #e44d26;
        }

        p {
            color: #333;
            margin-bottom: 15px;
        }

        .warning {
            color: #e44d26;
            font-weight: bold;
        }

        .turn-off {
            color: #e44d26;
            font-weight: bold;
        }

        .equipment-list {
            margin-top: 10px;
        }

        .emergency-contact {
            background-color: #ffe6e6;
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
        }

        .safety-instructions {
            margin-top: 20px;
        }

        .checklist {
            margin-top: 20px;
        }

        .footer {
            margin-top: 20px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Temperature Warning</h1>

        <p class="warning">
            Attention! The ambient temperature in the environment is greater than 35°C.
        </p>

        <p>
            For the safety of your equipment and personnel, please follow these instructions:
        </p>

        <div class="safety-instructions">
            <h2>Safety Instructions:</h2>
            <ul>
                <li>Evacuate personnel from the affected area.</li>
                <li>Isolate critical equipment and data centers if possible.</li>
                <li>Use cooling measures such as fans or air conditioning systems.</li>
            </ul>
        </div>

        <div class="turn-off">
            <h2>Turning off Equipment:</h2>
            <p>
                It is crucial to turn off the following equipment to prevent damage due to high temperatures:
            </p>
            <ul class="equipment-list">
                <li>Water Motor</li>
                <li>Nutrition Pump 1</li>
                <li>Nutrition Pump 2</li>
                <li>Fan</li>
                <li>Growing Light</li>
                <li>Normal Light</li>
                <li>pH Control Motor</li>
            </ul>
        </div>

        <div class="checklist">
            <h2>Checklist:</h2>
            <p>Ensure you have completed the following:</p>
            <ul>
                <li>Evacuated personnel from the affected area.</li>
                <li>Isolated critical equipment and data centers if possible.</li>
                <li>Turned off the specified equipment.</li>
                <li>Implemented cooling measures.</li>
            </ul>
        </div>

        <div class="emergency-contact">
            <h2>Emergency Contact:</h2>
            <p>
                In case of emergency, please contact our support team at:
            </p>

            <p>
                Support Email: support@example.com<br>
                Support Phone: +1 (123) 456-7890
            </p>
        </div>

        <p class="footer">
            This is an automated message. Please do not reply to this email.
        </p>
    </div>
</body>
</html>
<?php /**PATH D:\New folder\Final_Hydroponic_Farm\resources\views/mail/ambientTemperatureMail.blade.php ENDPATH**/ ?>