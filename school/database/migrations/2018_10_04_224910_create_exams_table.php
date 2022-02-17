<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsTable extends Migration
{
    
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->tinyInteger('term');
            $table->string('year', 40);
            $table->timestamps();
        });

        Schema::table('exams', function (Blueprint $table) {
            $table->unique(['term', 'year']);
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('exams');
    }
}
