<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->longText('desctiption')->nullable();
            $table->string('content')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
