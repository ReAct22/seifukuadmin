<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('alternatif-title');
            $table->string('slug')->unique();
            $table->string('sinopsis');
            $table->string('studio');
            $table->string('durasi');
            $table->string('type');
            $table->string('penayangan');
            $table->string('tglrilis');
            $table->string('genre');
            $table->string('score');
            $table->string('ranting');
            $table->string('totalepisode');
            $table->string('cover');
            $table->softDeletes();
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
        Schema::dropIfExists('animes');
    }
}
