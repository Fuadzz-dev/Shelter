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
        Schema::create('tindakan_perbaikan', function (Blueprint $table) {
            $table->integer('id_tindakan', true);
            $table->integer('id_helpdesk')->index();
            $table->text('deskripsi_tindakan');
            $table->json('foto_tindakan')->nullable();
            $table->timestamp('waktu_tindakan')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tindakan_perbaikan');
    }
};
