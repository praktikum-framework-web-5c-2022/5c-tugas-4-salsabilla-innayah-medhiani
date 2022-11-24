<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Matakuliah;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $matakuliah = [
            'Algoritma dan Pemrograman',
            'Struktur Data',
            'Basis Data',
            'Pemrograman Berorientasi Objek',
            'Jaringan Komputer',
            'Pemrograman Berbasis Web',
            'Sistem Operasi',
            'Pemrograman Berbasis Mobile',
            'Data Mining',
            'Framework Pemrograman Web',
            'Machine Learning',
            'Pengolahan Citra Digital',
            'Pemrograman Berbasis Mobile',
            'Pengolahan Citra Digital',
            'Pengenalan Algoritma dan Pemrograman',
            'Pengenalan Basis Data',
            'Algoritma dan Struktur Data',
            'Statistika dan Probabilitas',
            'Fisika Dasar',
            'Sistem Informasi Akuntansi dan Keuangan',
            'Jaringan dan Keamanan Sistem',
            'Pemrograman Perangkat Bergerak',
            'Komputasi Awan',
            'Pemrograman Animasi dan Multimedia',
        ];

        Matakuliah::create([
            'kode_mk' => "IF".$faker->unique()->numerify("###"),
            'nama_mk' => $faker->randomElemenet($matakuliah),
            'sks' => $faker->randomElement($sks = [1,2,3]),
            'nama_dosen' => $faker->firstName." ".$faker->lastName,
        ]);
    }
}