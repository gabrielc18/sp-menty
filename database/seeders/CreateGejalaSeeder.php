<?php

namespace Database\Seeders;

use App\Models\Gejala;
use Illuminate\Database\Seeder;

class CreateGejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nama' => 'Sebelum Siklus Mentruasi',
                'kode' => 'G001'
            ],
            [
                'nama' => 'Tidak Nafsu Makan',
                'kode' => 'G002'
            ],
            [
                'nama' => 'Cenderung Menyendiri',
                'kode' => 'G003'
            ],
            [
                'nama' => 'Insomnia',
                'kode' => 'G004'
            ],
            [
                'nama' => 'Merasa Gelisah',
                'kode' => 'G005'
            ],
            [
                'nama' => 'Meremas - remas tangan saat emosi',
                'kode' => 'G006'
            ],
            [
                'nama' => 'Bicara yang tidak penting',
                'kode' => 'G007'
            ],
            [
                'nama' => 'Tidak bisa merasakan emosi duka',
                'kode' => 'G008'
            ],
            [
                'nama' => 'Merasa bersalah yang mendalam',
                'kode' => 'G009'
            ],
            [
                'nama' => 'Ingin bunuh diri',
                'kode' => 'G010'
            ],
            [
                'nama' => 'Hilangnya siklus menstruasi',
                'kode' => 'G011'
            ],
            [
                'nama' => 'Perubahan kepribadian',
                'kode' => 'G012'
            ],
            [
                'nama' => 'Tampak suram',
                'kode' => 'G013'
            ],
            [
                'nama' => 'Pasif',
                'kode' => 'G014'
            ],
            [
                'nama' => 'Merasa curiga',
                'kode' => 'G015'
            ],
            [
                'nama' => 'Suka mengkritik',
                'kode' => 'G016'
            ],
            [
                'nama' => 'Penuh dengan pikiran negatif',
                'kode' => 'G017'
            ],
            [
                'nama' => 'Ketakutan yang berlebihan akan menjadi gila',
                'kode' => 'G018'
            ],
            [
                'nama' => 'Mengalami delusi',
                'kode' => 'G019'
            ],
            [
                'nama' => 'Mengalami halusinasi',
                'kode' => 'G020'
            ],
            [
                'nama' => 'Merasa tidak percaya diri',
                'kode' => 'G021'
            ],
            [
                'nama' => 'Merasa seperti sedang diawasi',
                'kode' => 'G022'
            ],
            [
                'nama' => 'Merasa tidak berharga',
                'kode' => 'G023'
            ]
        ];

        Gejala::insert($data);
    }
}
