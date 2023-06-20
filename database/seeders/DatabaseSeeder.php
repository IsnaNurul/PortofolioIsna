<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Portofolio;
use App\Models\Profil;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        Portofolio::create([
            "id" => "1",
            "tittle" => "ABCD",
            "description" => "ABCDEFGHIJ",
            "thumbnail" => "sfdfdf",
            "foto" => "dfdfd",
        ]);

        Profil::create([
            "id" => "1",
            "nama_lengkap" => "Isna Nurul",
            "tempat_lahir" => "tsm",
            "tgl_lahir" => "2023-03-15",
            "jenis_kelamin" => "Laki-laki",
            "alamat" => "monggor",
            "about" => "smkypc",
            "foto_profil" => "aaaaaa",
        ]);
           
    }
}
