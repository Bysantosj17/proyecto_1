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
        Schema::create('citas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            // $table->unsignedBigInteger('users_id');
            // $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade);
            $table->string("name");
            $table->string("descripcion");
            $table->string("tel");
            $table->string('email');
            $table->string('tatoos');
            $table->date('inicio');
            $table->date('final');
            $table->time('hora_reserva');
            $table->string('color');

            // $table->unsignedBigInteger('users_id');
            // $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')
            //     ->onUpdate('cascade');



            $table->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
