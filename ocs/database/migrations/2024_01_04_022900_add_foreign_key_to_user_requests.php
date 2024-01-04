<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToUserRequests extends Migration
{
    public function up()
    {
        Schema::table('user_requests', function (Blueprint $table) {
            // Add the foreign key constraint
            $table->foreign('ocs_service_id')->references('id')->on('ocs_services');
        });
    }

    public function down()
    {
        Schema::table('user_requests', function (Blueprint $table) {
            // Drop the foreign key constraint if needed
            $table->dropForeign(['ocs_service_id']);
        });
    }
}
