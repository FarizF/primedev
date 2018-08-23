<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hashname');
            $table->integer('priority')->nullable();
            $table->integer('project_id')->unsigned()->nullable();
            $table->integer('employer_id')->unsigned()->nullable();
            $table->integer('client_id')->unsigned()->nullable();
            $table->foreign('project_id')->references('id')->on('projects')->nullable();
            $table->foreign('employer_id')->references('id')->on('employers')->nullable();
            $table->foreign('client_id')->references('id')->on('clients')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
