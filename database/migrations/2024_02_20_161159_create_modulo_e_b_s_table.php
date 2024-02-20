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
        Schema::create('modulo_e_b_s', function (Blueprint $table) {
            $table->id();
            $table->string('id_cliente');
            $table->string('empresa_emisora');
            $table->string('id_empresa_emisora');
            $table->string('id_grupo');
            $table->date('fecha_solicitud');
            $table->float('total',10);
            $table->string('comentarios');
            $table->string('comprobante_pdf');
            $table->string('validacion_pdf');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modulo_e_b_s');
    }
};
