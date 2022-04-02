<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_requests', function (Blueprint $table) {
            $table->id();
            $table->string('service_username')->nullable() ;
            $table->string('service_useremail')->nullable() ;
            $table->string('service_phonenumber')->nullable() ;
            $table->string('service_address')->nullable() ;
            $table->string('service_photos')->nullable() ;
            $table->string('service_videos')->nullable() ;
            $table->string('service_invoice')->nullable() ;
            $table->string('service_checkbox_policy')->nullable() ;
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
        Schema::dropIfExists('service_requests');
    }
}
