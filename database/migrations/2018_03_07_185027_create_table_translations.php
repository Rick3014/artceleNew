<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTranslations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('translations')){
            Schema::create('translations', function (Blueprint $table) {
                $table->increments('id');
                $table->text('text');
                $table->integer('table');
                $table->integer('column');
                $table->integer('language_id')->unsigned();
                $table->foreign('language_id')->references('id')->on('languages');
                $table->index(array('table','column','language_id'));
                $table->rememberToken();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('translations');
    }
}
