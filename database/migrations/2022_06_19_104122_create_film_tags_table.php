<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film_tags', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('film_id');
            $table->unsignedBigInteger('tag_id');

            $table->index('film_id', 'film_tag_film_idx');
            $table->index('tag_id', 'film_tag_tag_idx');

            $table->foreign('film_id', 'film_tag_film_fk')->on('films')->references('id');
            $table->foreign('tag_id', 'film_tag_tag_fk')->on('tags')->references('id');

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
        Schema::dropIfExists('film_tags');
    }
};
