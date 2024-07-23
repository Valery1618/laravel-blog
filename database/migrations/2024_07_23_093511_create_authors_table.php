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
            $table->dropColumn('author_id');
            $table->foreignId('author_id')->index();
            $table->foreignId('rubric_id')->index();
        });

        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('rubrics', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */

    public function down(): void
    {

        Schema::table('news', function (Blueprint $table) {
            $table->dropColumn('author_id');
            $table->dropColumn('rubric_id');
            $table->integer('author_id');
        });

        Schema::dropIfExists('authors');
        Schema::dropIfExists('rubrics');
    }

};
