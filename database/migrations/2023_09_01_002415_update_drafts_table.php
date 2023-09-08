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
        Schema::table('drafts', function (Blueprint $table) {
            $table->string('content', 2048)->after('description');
            $table->string('thumbnail')->after('content')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('drafts', function (Blueprint $table) {
            $table->dropColumn('content');
            $table->dropColumn('thumbnail');
        });
    }
};
