<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       schema::create('cursos', function (blueprint $table){
        $table->id();
        $table->string('nombre curso');
        $table->string('categoria');
        $table->integer('creditos');
        $table->string('profesor');
        $table->string('universidad');
        $table->timestamps();
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};

