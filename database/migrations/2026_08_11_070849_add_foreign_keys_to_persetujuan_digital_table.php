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
        Schema::table('persetujuan_digital', function (Blueprint $table) {
            $table->foreign(['id_helpdesk'], 'persetujuan_digital_ibfk_1')->references(['id_helpdesk'])->on('helpdesk')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['id_penyetuju'], 'persetujuan_digital_ibfk_2')->references(['user_id'])->on('user')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('persetujuan_digital', function (Blueprint $table) {
            $table->dropForeign('persetujuan_digital_ibfk_1');
            $table->dropForeign('persetujuan_digital_ibfk_2');
        });
    }
};
