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
        Schema::create('dokumen_berita_acara', function (Blueprint $table) {
            $table->integer('id_dokumen', true);
            $table->string('nomor_berita_acara', 100)->unique('nomor_berita_acara');
            $table->integer('id_helpdesk')->index();
            $table->integer('id_persetujuan')->index();
            $table->timestamp('tanggal_diterbitkan')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumen_berita_acara');
    }
};
