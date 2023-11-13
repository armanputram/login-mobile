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
        Schema::create('bibliografi', function (Blueprint $table) {
            $table->id();
            $table->string('isbn', 45)->nullable();
            $table->string('judul', 200);
            $table->string('penulis', 100);
            $table->integer('harga');
            $table->date('perolehan')->nullable();
            $table->unsignedBigInteger('bibliografi_kategori_id');
            $table->foreign('bibliografi_kategori_id')->references('id')->on('bibliografi_kategori')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bibliografi');
    }
};
