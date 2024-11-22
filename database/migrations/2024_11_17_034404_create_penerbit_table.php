<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerbit', function (Blueprint $table) {
            $table->id('penerbit_id'); // ID unik untuk penerbit
            $table->string('penerbit_nama'); // Nama penerbit
            $table->string('penerbit_alamat'); // Alamat penerbit
            $table->string('penerbit_notelp'); // Nomor telepon penerbit
            $table->string('penerbit_email'); // Email penerbit
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penerbit');
    }
};
