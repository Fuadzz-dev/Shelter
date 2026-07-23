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
        Schema::table('tindakan_perbaikan', function (Blueprint $table) {
            $table->foreign(['id_helpdesk'], 'tindakan_perbaikan_ibfk_1')->references(['id_helpdesk'])->on('helpdesk')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tindakan_perbaikan', function (Blueprint $table) {
            $table->dropForeign('tindakan_perbaikan_ibfk_1');
        });
    }
};
