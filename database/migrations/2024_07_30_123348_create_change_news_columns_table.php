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
        Schema::table('news', function (Blueprint $table) {

            if (Schema::hasColumn('news', 'author_id')) {
                $table->dropColumn('author_id');
            }
            if (Schema::hasColumn('news', 'rubric_id')) {
                $table->dropColumn('rubric_id');
            }

            $table->foreignId('author_id')->constrained('authors')->onDelete('cascade');
            $table->foreignId('rubric_id')->constrained('rubrics')->onDelete('cascade');

            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropForeign(['author_id']);
            $table->dropForeign(['rubric_id']);
            $table->dropColumn('author_id');
            $table->dropColumn('rubric_id');

            $table->foreignId('author_id')->index();
            $table->foreignId('rubric_id')->index();
        });
    }
};
