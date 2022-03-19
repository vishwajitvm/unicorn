<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('username') ;
            $table->string('main_machine_name')->nullable() ;
            $table->string('sub_machine_name')->nullable() ;
            $table->string('total_price')->nullable() ;
            // $table->string('serial_number')->nullable() ;
            // $table->string('warranty_days_from')->nullable() ;
            // $table->string('warranty_days_to')->nullable() ;
            $table->string('upload_invoice')->nullable() ;
            $table->enum('invoice_status', ['active', 'inactive']);
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
        Schema::dropIfExists('invoices');
    }
}
