<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Barang extends Migration
{
    /**
     * Run the migrations.
     *
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->string('KodeBarang', 25)->primary();
            $table->string('NamaBarang', 25);
            $table->string('Satuan', 25);
            $table->integer('HargaSatuan');
            $table->integer('Stok');
            $table->timestamps(); // Adds created_at and updated_at columns.
        });
    }

    /**
     * Reverse the migrations.
     *
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
