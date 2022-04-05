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
        Schema::create('typese_proprietes', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('typese_proprietes');
    }
};
