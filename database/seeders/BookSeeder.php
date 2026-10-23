<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::insert([
            [
                'title' => 'Laut Bercerita',
                'author' => 'Leila S. Chudori',
                'genre' => 'Novel',
                'price' => 95000,
                'image' => 'laut-bercerita.svg',
                'summary' => 'Novel tentang persahabatan, perjuangan, kehilangan, dan ingatan terhadap masa lalu.',
            ],
            [
                'title' => 'Bumi',
                'author' => 'Tere Liye',
                'genre' => 'Fantasi',
                'price' => 89000,
                'image' => 'bumi.svg',
                'summary' => 'Petualangan Raib, Seli, dan Ali dalam dunia paralel yang penuh misteri.',
            ],
            [
                'title' => 'Filosofi Teras',
                'author' => 'Henry Manampiring',
                'genre' => 'Pengembangan Diri',
                'price' => 98000,
                'image' => 'filosofi-teras.svg',
                'summary' => 'Pengenalan filsafat Stoisisme dan cara menerapkannya dalam kehidupan sehari-hari.',
            ],
            [
                'title' => 'Atomic Habits',
                'author' => 'James Clear',
                'genre' => 'Pengembangan Diri',
                'price' => 120000,
                'image' => 'atomic-habits.svg',
                'summary' => 'Panduan membangun kebiasaan baik melalui perubahan kecil yang dilakukan secara konsisten.',
            ],
            [
                'title' => 'Negeri 5 Menara',
                'author' => 'Ahmad Fuadi',
                'genre' => 'Novel',
                'price' => 85000,
                'image' => 'negeri-5-menara.svg',
                'summary' => 'Kisah persahabatan dan perjuangan enam santri dalam mengejar cita-cita.',
            ],
            [
                'title' => 'Laskar Pelangi',
                'author' => 'Andrea Hirata',
                'genre' => 'Novel',
                'price' => 79000,
                'image' => 'laskar-pelangi.svg',
                'summary' => 'Perjuangan anak-anak Belitung dalam mendapatkan pendidikan dan meraih impian.',
            ],
            [
                'title' => 'Sebuah Seni untuk Bersikap Bodo Amat',
                'author' => 'Mark Manson',
                'genre' => 'Pengembangan Diri',
                'price' => 99000,
                'image' => 'seni-bodo-amat.svg',
                'summary' => 'Buku tentang menentukan hal yang benar-benar penting dan menghadapi keterbatasan hidup.',
            ],
            [
                'title' => 'Pulang',
                'author' => 'Tere Liye',
                'genre' => 'Fiksi',
                'price' => 92000,
                'image' => 'pulang.svg',
                'summary' => 'Kisah perjalanan hidup, keluarga, kesetiaan, dan pencarian makna pulang.',
            ],
        ]);
    }
}
