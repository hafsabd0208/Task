<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyClassesTable extends Migration
{
    
    public function up()
    {
        Schema::create('my_classes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->unsignedInteger('class_type_id')->nullable();
            $table->timestamps();
        });

        Schema::table('my_classes', function (Blueprint $table) {
            $table->unique(['class_type_id', 'name']);
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('my_classes');
    }
}
