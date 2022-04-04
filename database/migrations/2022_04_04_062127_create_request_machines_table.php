<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestMachinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_machines', function (Blueprint $table) {
            $table->id();
            $table->string('request_username')->nullable() ;
            $table->string('request_useremail')->nullable() ;
            $table->string('request_userphone_number')->nullable() ;
            $table->string('request_machine')->nullable() ;
            $table->string('request_submachine')->nullable() ;
            $table->string('request_quantity')->nullable() ;
            $table->text('request_message')->nullable() ;
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
        Schema::dropIfExists('request_machines');
    }
}
