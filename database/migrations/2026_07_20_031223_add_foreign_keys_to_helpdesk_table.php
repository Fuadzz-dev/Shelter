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
        Schema::table('helpdesk', function (Blueprint $table) {
            $table->foreign(['id_pelapor'], 'helpdesk_ibfk_1')->references(['user_id'])->on('user')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('helpdesk', function (Blueprint $table) {
            $table->dropForeign('helpdesk_ibfk_1');
        });
    }
};
