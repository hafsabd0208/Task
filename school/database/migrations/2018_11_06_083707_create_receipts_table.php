<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceiptsTable extends Migration
{
   
    public function up()
    {
        Schema::create('receipts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pr_id');
            $table->Integer('amt_paid');
            $table->Integer('balance');
            $table->string('year');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('receipts');
    }
}
