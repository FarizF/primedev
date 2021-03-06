<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('description')->nullable();
            $table->date('startdate')->nullable();
            $table->string('duration')->nullable();
            $table->integer('employer_id')->unsigned()->nullable();
            $table->integer('client_id')->unsigned()->nullable();
            $table->foreign('employer_id')->references('id')->on('employers')->nullable();
            $table->foreign('client_id')->references('id')->on('clients')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
