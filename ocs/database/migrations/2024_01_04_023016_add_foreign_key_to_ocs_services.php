<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToOcsServices extends Migration
{
    public function up()
    {
        Schema::table('ocs_services', function (Blueprint $table) {
            // Add the foreign key constraint
            $table->foreign('fund_code_id')->references('id')->on('fund_codes');
        });
    }

    public function down()
    {
        Schema::table('ocs_services', function (Blueprint $table) {
            // Drop the foreign key constraint if needed
            $table->dropForeign(['fund_code_id']);
        });
    }
}

