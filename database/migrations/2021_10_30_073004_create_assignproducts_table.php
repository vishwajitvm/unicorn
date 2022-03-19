<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignproducts', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable() ;
            $table->string('assign_mainmachin_name')->nullable() ;
            $table->string('assign_sub_machin_name')->nullable() ;
            $table->string('assign_machin_quantitys')->nullable() ;
            // $table->string('totalprice')->nullable() ;
            // $table->string('invoicepdf')->nullable() ;
            $table->string('serial_number')->nullable() ;
            $table->string('warranty_from')->nullable() ;
            $table->string('warranty_to')->nullable() ;
            $table->string('logisticpartner')->nullable() ;
            $table->string('logisticpartner_link')->nullable() ;
            $table->string('trackingnumber')->nullable() ;
            // $table->enum('invoice_status', ['active', 'inactive'])->default('active');
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
        Schema::dropIfExists('assignproducts');
    }
}
