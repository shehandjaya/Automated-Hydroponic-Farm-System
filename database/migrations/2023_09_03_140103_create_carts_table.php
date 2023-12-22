<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) { 
            $table->id("cart_id"); 
            $table->integer("order_id");
            $table->string("user_id", 4)->nullable();
            $table->string("item_id", 4)->nullable();
            $table->float("quantity", 6, 2); 
            $table->float("amount", 6, 2);
            $table->text("feedback")->nullable();
            $table->integer('status');
            $table->timestamps();
        });

        DB::statement('ALTER TABLE carts AUTO_INCREMENT = 10000000;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
