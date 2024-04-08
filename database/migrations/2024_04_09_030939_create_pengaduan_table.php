<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id();
            $table->string('no_pengaduan');
            $table->string('kategori');
            $table->string('judul');
            $table->text('uraian');
            $table->date('tanggal');
            $table->time('time');
            $table->text('lampiran');
            $table->string('status');
            $table->timestamps();
            $table->foreignId('id_pelapor')->constrained('users')->onDelete('cascade');
            $table->foreignId('id_terlapor')->constrained('terlapor')->onDelete('cascade');
            // $table->foreignId('id_lampiran')->constrained('lampiran')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengaduan');
    }
}