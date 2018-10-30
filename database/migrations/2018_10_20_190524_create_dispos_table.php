<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispos', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('date_debut');
            $table->datetime('date_fin');
            $table->timestamps();
            $table->unique(['id', 'date_debut','date_fin']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dispos');
    }
}
