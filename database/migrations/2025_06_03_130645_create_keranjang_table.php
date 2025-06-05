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
    Schema::create('keranjang', function (Blueprint $table) {
        $table->id('id_keranjang');
        $table->unsignedBigInteger('id_stok');
        $table->string('nama_makanan');
        $table->decimal('harga_makanan', 10, 2);
        $table->integer('jumlah');
        $table->integer('nomer_meja');
        $table->timestamps();

 
        $table->foreign('id_stok')->references('id_stok')->on('warehouse')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keranjang');
    }
};