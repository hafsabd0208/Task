<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionsTable extends Migration
{
   
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->unsignedInteger('my_class_id');
            $table->unsignedInteger('teacher_id')->nullable();
            $table->tinyInteger('active')->default(0);
            $table->timestamps();
        });

        Schema::table('sections', function (Blueprint $table) {
            $table->unique(['name', 'my_class_id']);
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('sections');
    }
}
