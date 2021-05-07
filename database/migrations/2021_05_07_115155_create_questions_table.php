<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->jsonb('data')->default('{"title" : ""}');//Можно и тригерами,но так легче
            $table->text('title')->storedAs('json_extract_path(data::json,\'title\')');//Если честно,то я не совсем понял
            //зачем переносить логику в СУБД, когда можно мутатором это всё реализовать и не париться с триггерами и генерациями полей?
            $table->timestampTz('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
