<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_help_topic');
            $table->foreign('id_help_topic')->references('id')->on('help_topic');
            $table->unsignedInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->string('estado');
            $table->text('asunto');
            $table->index('estado');
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
        Schema::dropIfExists('ticket');
    }
}
