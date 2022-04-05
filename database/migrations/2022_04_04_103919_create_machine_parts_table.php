<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMachinePartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('machine_parts', function (Blueprint $table) {
            $table->id();
            $table->string('parts_mainmachine')->nullable() ;
            $table->string('parts_submachine')->nullable() ;
            $table->string('parts_name')->nullable() ;
            $table->text('parts_description')->nullable() ;
            $table->string('parts_images')->nullable() ;
            $table->string('parts_videos')->nullable() ;
            $table->enum('parts_status', ['active', 'inactive'])->nullable()->default('active');
            $table->string('parts_empty1')->nullable() ;
            $table->string('parts_empty2')->nullable() ;
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
        Schema::dropIfExists('machine_parts');
    }
}
