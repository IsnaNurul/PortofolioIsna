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
        Schema::create('profils', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap', 50);
            $table->string('status', 50);
            $table->string('tempat_lahir', 50);
            $table->date('tgl_lahir');
            $table->string('jenis_kelamin', 50);
            $table->string('ig', 100);
            $table->string('wa', 100);
            $table->string('twitt', 100);
            $table->text('alamat');
            $table->text('about');
            $table->text('foto_profil');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profils');
    }
};
