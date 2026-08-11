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
        Schema::create('persetujuan_digital', function (Blueprint $table) {
            $table->integer('id_persetujuan', true);
            $table->integer('id_helpdesk')->index();
            $table->integer('id_penyetuju')->index();
            $table->timestamp('waktu_persetujuan')->nullable();
            $table->string('token_validasi')->unique('token_validasi');
            $table->enum('status_dokumen', ['Valid', 'Invalid'])->default('Valid');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persetujuan_digital');
    }
};
