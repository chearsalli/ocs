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
        Schema::create('service_processors', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_request_id');
        $table->unsignedBigInteger('ocs_service_id');
        $table->timestamps();
        
       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_processors');
    }
};
