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
        Schema::create('autenticaciones', function (Blueprint $table) {
            $table->id();
            $table->string('usuario')->unique();
            $table->string('nombre')->ucfirst();
            $table->string('apellido')->ucfirst();
            $table->string('email')->unique();
            $table->string('contrasena');
            
            
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
        Schema::dropIfExists('autenticaciones');
    }
};
