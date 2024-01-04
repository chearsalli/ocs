<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ocs_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ocs_service_id');
            $table->string('service_type');
            $table->string('processing_time');
            $table->integer('processing_fee');
            $table->integer('unit_id');
            $table->integer('fund_code_id');
            $table->string('service_name');
            $table->string('unit_permission_req');
            $table->timestamps();

            


            //$table->foreign('fund_code')->references('id')->on('fund_code_id');
         

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ocs_services');
    }
};
