<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('butacas', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->enum('estado', ['disponible', 'ocupada'])->default('disponible');
            $table->decimal('precio', 8, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('butacas');
    }
};
