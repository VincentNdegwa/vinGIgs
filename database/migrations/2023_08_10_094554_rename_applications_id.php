<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::table('applications', function (Blueprint $table) {
            $table->renameColumn('id', 'application_id');
        });
    }

   
    public function down()
    {
        Schema::table('applications', function (Blueprint $table) {
            $table->renameColumn('application_id', 'id');
        });
    }
};
