<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReadingRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reading_records', function (Blueprint $table) {
            $table->id();
            $table->float('water_capacity');
            $table->float('ambient_temperature');
            $table->float('ambient_humidity');
            $table->float('water_temperature');
            $table->float('ph');
            $table->float('ec');
            $table->float('ambient_light');
            $table->string('water_motor')->nullable();
            $table->string('nutrition_pump_1')->nullable();
            $table->string('nutrition_pump_2')->nullable();
            $table->string('fan')->nullable();
            $table->string('growing_light')->nullable();
            $table->string('normal_light')->nullable();
            $table->string('ph_control_motor')->nullable();
            $table->time('time')->default(now()->toTimeString());
            $table->date('date')->default(now()->toDateString());
            $table->timestamps();
        });
    }

    // php artisan schedule:work

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reading_records');
    }
}
