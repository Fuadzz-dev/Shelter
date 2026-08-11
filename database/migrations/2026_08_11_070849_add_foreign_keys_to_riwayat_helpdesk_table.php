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
        Schema::table('riwayat_helpdesk', function (Blueprint $table) {
            $table->foreign(['id_helpdesk'], 'riwayat_helpdesk_ibfk_1')->references(['id_helpdesk'])->on('helpdesk')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['id_tindakan'], 'riwayat_helpdesk_ibfk_2')->references(['id_tindakan'])->on('tindakan_perbaikan')->onUpdate('cascade')->onDelete('set null');
            $table->foreign(['id_pelapor'], 'riwayat_helpdesk_ibfk_3')->references(['user_id'])->on('user')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign(['id_persetujuan'], 'riwayat_helpdesk_ibfk_4')->references(['id_persetujuan'])->on('persetujuan_digital')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('riwayat_helpdesk', function (Blueprint $table) {
            $table->dropForeign('riwayat_helpdesk_ibfk_1');
            $table->dropForeign('riwayat_helpdesk_ibfk_2');
            $table->dropForeign('riwayat_helpdesk_ibfk_3');
            $table->dropForeign('riwayat_helpdesk_ibfk_4');
        });
    }
};
