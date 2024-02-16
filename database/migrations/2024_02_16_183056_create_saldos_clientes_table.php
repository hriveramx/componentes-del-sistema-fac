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
        Schema::create('saldos_clientes', function (Blueprint $table) {
            $table->id();
            $table->string('cliente');
            $table->string('ticket');
            $table->integer('numeroDeposito');
            $table->string('concepto');
            $table->float('monto',9);
            $table->date('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saldos_clientes');
    }
};
