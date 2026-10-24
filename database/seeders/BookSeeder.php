<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            [
                'title' => 'Laut Bercerita',
                'author' => 'Leila S. Chudori',
                'genre' => 'Novel',
                'price' => 95000,
                'image' => 'laut-bercerita.jfif',
                'summary' => 'Novel tentang persahabatan, keluarga, kehilangan, dan perjuangan pada masa Orde Baru.',
            ],
            [
                'title' => 'Bumi',
                'author' => 'Tere Liye',
                'genre' => 'Fantasi',
                'price' => 89000,
                'image' => 'bumi.jfif',
                'summary' => 'Petualangan Raib, Seli, dan Ali dalam dunia paralel yang penuh misteri.',
            ],
            [
                'title' => 'Filosofi Teras',
                'author' => 'Henry Manampiring',
                'genre' => 'Pengembangan Diri',
                'price' => 98000,
                'image' => 'filosofi-teras.jfif',
                'summary' => 'Buku pengantar filsafat Stoisisme untuk menghadapi masalah kehidupan sehari-hari.',
            ],
            [
                'title' => 'Atomic Habits',
                'author' => 'James Clear',
                'genre' => 'Pengembangan Diri',
                'price' => 120000,
                'image' => 'atomic-habits.jfif',
                'summary' => 'Panduan membangun kebiasaan baik melalui perubahan kecil yang dilakukan secara konsisten.',
            ],
            [
                'title' => 'Negeri 5 Menara',
                'author' => 'Ahmad Fuadi',
                'genre' => 'Novel',
                'price' => 85000,
                'image' => 'negeri-5-menara.jfif',
                'summary' => 'Kisah persahabatan dan perjuangan enam santri dalam meraih cita-cita.',
            ],
            [
                'title' => 'Laskar Pelangi',
                'author' => 'Andrea Hirata',
                'genre' => 'Novel',
                'price' => 79000,
                'image' => 'laskar-pelangi.jfif',
                'summary' => 'Kisah perjuangan anak-anak Belitung dalam memperoleh pendidikan dan mengejar mimpi.',
            ],
            [
                'title' => 'Sebuah Seni untuk Bersikap Bodo Amat',
                'author' => 'Mark Manson',
                'genre' => 'Pengembangan Diri',
                'price' => 99000,
                'image' => 'seni-bodo-amat.jfif',
                'summary' => 'Buku pengembangan diri tentang menentukan hal yang benar-benar penting dalam hidup.',
            ],
            [
                'title' => 'Pulang',
                'author' => 'Tere Liye',
                'genre' => 'Fiksi',
                'price' => 92000,
                'image' => 'pulang.jfif',
                'summary' => 'Kisah Bujang yang menjalani perjalanan hidup dalam dunia keluarga dan pertarungan.',
            ],
        ];

        foreach ($books as $book) {
            DB::table('books')->updateOrInsert(
                ['title' => $book['title']],
                array_merge($book, [
                    'updated_at' => now(),
                    'created_at' => now(),
                ])
            );
        }
    }
}
