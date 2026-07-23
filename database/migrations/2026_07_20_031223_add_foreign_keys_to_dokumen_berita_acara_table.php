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
        Schema::table('dokumen_berita_acara', function (Blueprint $table) {
            $table->foreign(['id_helpdesk'], 'dokumen_berita_acara_ibfk_1')->references(['id_helpdesk'])->on('helpdesk')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['id_persetujuan'], 'dokumen_berita_acara_ibfk_2')->references(['id_persetujuan'])->on('persetujuan_digital')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dokumen_berita_acara', function (Blueprint $table) {
            $table->dropForeign('dokumen_berita_acara_ibfk_1');
            $table->dropForeign('dokumen_berita_acara_ibfk_2');
        });
    }
};
