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
          $table->increments('id')->unique();
          $table->string('title');
          $table->mediumText('es_description')->nullable();
          $table->mediumText('en_description')->nullable();
          $table->mediumText('cat_description')->nullable();
          $table->integer('year')->nullable();
          $table->string('client')->nullable();
          $table->string('primary_img')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
