<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dealers', function (Blueprint $table) {
            $table->id();
            $table->string('dealercompany_name')->nullable() ;
            $table->string('dealermobile')->nullable() ;
            $table->string('dealerphone')->nullable() ;
            $table->string('dealercomapany_address')->nullable() ;
            $table->string('dealerstate')->nullable() ;
            $table->string('dealerpincode')->nullable() ;
            $table->string('empty1')->nullable() ;
            $table->string('empty2')->nullable() ;
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
        Schema::dropIfExists('dealers');
    }
}
