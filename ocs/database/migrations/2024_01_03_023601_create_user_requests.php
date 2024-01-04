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
        Schema::create('user_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_request_id');
            $table->unsignedBigInteger('ocs_service_id');
            $table->integer('transaction_no');
            $table->integer('copies_req');
            $table->dateTime('date_created');
            $table->string('status');
            $table->string('req_type');
            $table->unsignedBigInteger('transaction_id');
            $table->string('or_number');
            $table->timestamps();

        
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::table('user_requests', function (Blueprint $table) {
        $table->dropForeign(['ocs_service_id']);
    });

    Schema::dropIfExists('user_requests');
}
};
