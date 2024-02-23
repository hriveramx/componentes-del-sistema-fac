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
        Schema::create('saldos_ctas', function (Blueprint $table) {
            $table->id();
            $table->string('id_grupo');
            $table->string('id_ticket');
            $table->string('cliente_cc_ticket');
            $table->string('concepto');
            $table->string('banco');
            $table->string('cuenta');
            $table->string('clave_rastreo')->nullable();
            $table->float('total',10);
            $table->float('comision_gmex',10);
            $table->date('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saldos_ctas');
    }
};
