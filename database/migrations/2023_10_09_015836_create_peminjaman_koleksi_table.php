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
        Schema::create('peminjaman_koleksi', function (Blueprint $table) {
            $table->unsignedBigInteger('peminjaman_id');
            $table->unsignedBigInteger('koleksi_id');

            // Setting the combination of `peminjaman_id` and `koleksi_id` as the primary key
            $table->primary(['peminjaman_id', 'koleksi_id']);

            // Foreign key constraints
            $table->foreign('peminjaman_id')->references('id')->on('peminjaman')->onDelete('no action')->onUpdate('no action');
            $table->foreign('koleksi_id')->references('id')->on('koleksi')->onDelete('no action')->onUpdate('no action');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman_koleksi');
    }
};
