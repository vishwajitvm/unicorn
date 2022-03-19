<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmachinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submachines', function (Blueprint $table) {
            $table->id();
            $table->string('main_machine_name') ;
            $table->string('sub_machine_name') ;
            $table->string('sub_machine_price') ;
            $table->text('sub_machine_description')->nullable() ;
            $table->string('sub_machine_image')->nullable() ;
            $table->string('sub_machine_video')->nullable() ;
            $table->string('sub_machine_brochure')->nullable() ;
            $table->enum('sub_machine_status', ['active', 'inactive'])->nullable(); 
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
        Schema::dropIfExists('submachines');
    }
}
