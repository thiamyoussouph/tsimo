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
        Schema::create('type_proprietes', function (Blueprint $table) {
            $table->id();
            $table->string('emmeuble');
            $table->string('villa');
            $table->string('appartement');
            $table->string('mangasin');
            $table->string('bureaux');
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
        Schema::dropIfExists('type_proprietes');
    }
};
