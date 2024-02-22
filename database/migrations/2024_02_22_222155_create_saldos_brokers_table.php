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
        Schema::create('saldos_brokers', function (Blueprint $table) {
            $table->id();
            $table->string('id_broker');
            $table->string('id_ticket');
            $table->string('cliente');
            $table->float('comision',5);
            $table->float('monto',10);
            $table->date('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saldos_brokers');
    }
};
