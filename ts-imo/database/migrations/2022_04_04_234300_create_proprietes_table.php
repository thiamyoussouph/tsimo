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
        Schema::create('proprietes', function (Blueprint $table) {
            $table->id();
            $table->string('libelet');
            $table->string('description');
            $table->string('nombreEtage');
            $table->string('nombredepiece');
            $table->string('adressse');
            $table->foreignId('proprietaite_id')->constrained();
            $table->foreignId('typese_propriete_id')->constrained();
            $table->foreignId('quartier_id')->constrained();
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
        Schema::dropIfExists('proprietes');
    }
};
