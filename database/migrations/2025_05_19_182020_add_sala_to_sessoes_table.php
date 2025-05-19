<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 public function up()
{
    Schema::table('sessoes', function (Blueprint $table) {
        $table->string('sala')->nullable();
    });
}

public function down()
{
    Schema::table('sessoes', function (Blueprint $table) {
        $table->dropColumn('sala');
    });
}

};
