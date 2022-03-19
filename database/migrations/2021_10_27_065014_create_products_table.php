<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('Product_username')->nullable() ;
            $table->string('Product_email')->nullable() ;
            $table->bigInteger('user_phone_number')->nullable() ;
            $table->string('product_main_machine')->nullable() ;
            $table->string('product_sub_machine')->nullable() ;
            $table->string('product_quantity')->nullable() ;
            $table->string('phone_number')->nullable() ;
            $table->text('product_message')->nullable() ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
