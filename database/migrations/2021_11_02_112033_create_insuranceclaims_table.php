<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsuranceclaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insuranceclaims', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable() ;
            $table->string('useremail')->nullable() ;
            $table->bigInteger('userphonenumber1')->nullable() ;
            $table->string('useraddress')->nullable() ;
            $table->string('mainmachine')->nullable() ;
            $table->string('submachine')->nullable() ;
            $table->string('serialnumber')->nullable() ;
            $table->string('warranty_from')->nullable() ;
            $table->string('warranty_to')->nullable() ;
            $table->string('message')->nullable() ;
            $table->bigInteger('userphonenumber2')->nullable() ;
            $table->string('claimimages')->nullable() ;
            $table->string('claimvideos')->nullable() ;
            $table->enum('request_status', ['approved', 'deny'])->nullable()->default(null);
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
        Schema::dropIfExists('insuranceclaims');
    }
}
