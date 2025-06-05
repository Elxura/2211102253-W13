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
    Schema::create('nota', function (Blueprint $table) {
        $table->id('id_nota');
        $table->unsignedBigInteger('user_id');
        $table->string('nama_makanan');
        $table->integer('jumlah_pesanan');
        $table->decimal('total_harga', 10, 2);
        $table->timestamp('waktu')->useCurrent();
        $table->unsignedBigInteger('id_keranjang');
        $table->string('payment_method');
        $table->string('nama_pembeli');
        $table->timestamps();

        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('id_keranjang')->references('id_keranjang')->on('keranjang')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nota');
    }
};