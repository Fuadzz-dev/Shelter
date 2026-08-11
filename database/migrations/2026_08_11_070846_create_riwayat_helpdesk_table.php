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
        Schema::create('riwayat_helpdesk', function (Blueprint $table) {
            $table->integer('id_riwayat', true);
            $table->integer('id_helpdesk')->index();
            $table->integer('id_tindakan')->nullable()->index();
            $table->integer('id_pelapor')->index();
            $table->text('judul_masalah');
            $table->integer('id_persetujuan')->nullable()->index();
            $table->timestamp('waktu_diselesaikan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_helpdesk');
    }
};
