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
        Schema::create('helpdesk', function (Blueprint $table) {
            $table->integer('id_helpdesk', true);
            $table->string('nomor_Helpdesk', 50)->unique('nomor_helpdesk');
            $table->integer('id_pelapor')->index();
            $table->text('judul_masalah');
            $table->text('deskripsi_keluhan');
            $table->json('foto_helpdesk')->nullable();
            $table->enum('status_Helpdesk', ['In Progress', 'in repair', 'Waiting Approval', 'Completed'])->default('In Progress');
            $table->timestamp('tanggal_lapor')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('helpdesk');
    }
};
