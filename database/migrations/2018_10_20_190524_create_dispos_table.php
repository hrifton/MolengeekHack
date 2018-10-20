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
            $table->date_time_set('date_debut');
            $table->date_time_set('date_fin')
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
