<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToServiceProcessor extends Migration
{
    public function up()
    {
        Schema::table('service_processors', function (Blueprint $table) {
          

            
            $table->foreign('user_request_id')->references('id')->on('user_requests'); 
            $table->foreign('ocs_service_id')->references('id')->on('ocs_services'); 
        });
    }

    public function down()
    {
        Schema::table('service_processors', function (Blueprint $table) {
            

           
            $table->dropColumn('user_request_id');
            $table->dropColumn('ocs_service_id');
        });
    }
}
