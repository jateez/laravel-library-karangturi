<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID'); // Set the locale to Bahasa Indonesia

        $titles = [
            'Matahari Senja di Pantai',
            'Bintang-bintang di Langit Malam',
            'Harmony dalam Kejutan',
            'Rahasia Kecil yang Indah',
            'Bumi dan Sang Fajar',
            'Kisah Petualangan di Hutan Rimba',
            'Di Balik Awan Putih',
            'Senyum Pelangi di Waktu Senja',
            'Petualangan di Negeri Ajaib',
            'Pesona Bunga Sakura',
            'Jejak Langkah di Tanah Jauh',
            'Rahasia Kastil Tua',
            'Pohon Pelangi dan Kupu-kupu',
            'Misteri di Desa Terpencil',
            'Seindah Senja di Pedesaan',
            'Senandung Cinta dalam Hujan',
            'Pengembaraan di Dunia Fantasi',
            'Sinar Bulan di Malam Gelap',
            'Jejak Seribu Tahun',
            'Harmoni di Tepi Sungai',
            'Rahasia di Balik Kabut Tebal',
            'Pesona Malam di Pantai',
            'Keajaiban di Negeri Ajaib',
            'Sang Dewi Pelangi',
            'Perjalanan Menuju Puncak',
        ];

        // Generate random data in Bahasa Indonesia
        foreach ($titles as $title) {
            Book::create([
                'title' => $title,
                'author' => $faker->name,
                'publication_year' => $faker->numberBetween(2017, 2022),
                'publisher' => $faker->randomElement(['CV Buku', 'CV Penulis', 'CV Media', 'Lebah']) . ' ' . $faker->randomElement(['Pustaka', 'Maju', 'Bersama', 'Mandiri']),
                'stock' => $faker->numberBetween(1, 3),
            ]);
        }
    }
}
