<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainmachinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mainmachines', function (Blueprint $table) {
            $table->id();
            $table->string('machine_name') ;
            $table->string('machine_price')->nullable() ;
            $table->text('machine_description'); 
            $table->string('machine_image') ;
            $table->enum('machine_status', ['active', 'inactive']);
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
        Schema::dropIfExists('mainmachines');
    }
}
