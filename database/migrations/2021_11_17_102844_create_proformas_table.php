<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProformasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proformas', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable() ;
            $table->string('main_machine_name')->nullable() ;
            $table->string('sub_machine_name')->nullable() ;
            $table->string('total_price')->nullable() ;
            $table->string('upload_invoice')->nullable() ;
            $table->enum('invoice_status', ['approve', 'deny'])->nullable();
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
        Schema::dropIfExists('proformas');
    }
}
