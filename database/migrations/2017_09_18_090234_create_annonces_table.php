<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnoncesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('annonces', function (Blueprint $table) {
            $table->increments('id_annonce');
            $table->string('titre');
            $table->string('description_courte');
            $table->text('description_longue');
            $table->integer('prix');
            $table->string('photo');
            $table->string('pays');
            $table->string('ville');
            $table->string('adresse');
            $table->integer('cp');
            $table->integer('membre_id');
            $table->integer('photo_id');
            $table->integer('categorie_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('annonces');
    }

}
