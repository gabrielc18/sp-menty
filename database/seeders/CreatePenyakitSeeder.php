<?php

namespace Database\Seeders;

use App\Models\Penyakit;
use Illuminate\Database\Seeder;

class CreatePenyakitSeeder extends Seeder
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
                'nama' => 'Vegetative Depression',
                'kode' => 'P001',
                'penyebab' => 'Dalam kedokteran, Vegetative adalah istilah yang sebagian besar digunakan untuk menggambarkan keadaan kesadaran yang berubah di mana seseorang terjaga, tetapi tidak sadar dan tidak dapat menanggapi dengan baik apa yang ada lingkungan mereka. Gejala Vegetative Depression adalah hasil dari perubahan cara fungsi tubuh seseorang karena depresi mereka.'
            ],
            [
                'nama' => 'Agitation Depression',
                'kode' => 'P002',
                'penyebab' => 'Agitation Depression adalah gejala yang disebabkan oleh perasaan gelisah atau berbagai gangguan mood lainnya dan merupakan respons yang dilakukan ketika mengalami kecemasan atau ketegangan. Ciri-ciri yang bisa dikenali ketika seseorang mengalami Agitation Depression adalah dilakukannya gerakan atau perilaku yang tak terkendali, tanpa tujuan, dilakukan secara berulang dan sangat cepat.'
            ],
            [
                'nama' => 'Dysrhytmic Depression',
                'kode' => 'P003',
                'penyebab' => 'Gangguan Dysrhytmic Depression, juga disebut distimia (dis-THIE-me-uh), adalah bentuk depresi jangka panjang (kronis) yang berkelanjutan. Gejala gangguan Dysrhytmic Depression biasanya datang dan pergi selama bertahun-tahun, dan intensitasnya dapat berubah seiring waktu. Tapi biasanya gejala tidak hilang selama lebih dari dua bulan pada suatu waktu. Selain itu, episode depresi berat dapat terjadi sebelum atau selama gangguan Dysrhytmic Depression - ini kadang-kadang disebut depresi ganda.'
            ],
            [
                'nama' => 'Psychotic Depression',
                'kode' => 'P004',
                'penyebab' => 'Psychotic Depression, juga dikenal sebagai gangguan depresi mayor dengan gejala psikotik. Kondisi tersebut merupakan suatu kondisi serius yang memerlukan pengobatan segera dan pemantauan ketat oleh seorang dokter spesialis jiwa. Gangguan depresi mayor adalah gangguan mental yang dapat berdampak negatif pada banyak aspek kehidupan seseorang. Gangguan tersebut mempengaruhi suasana hati dan perilaku serta berbagai fungsi fisik, termasuk nafsu makan dan tidur. '
            ]
        ];

        Penyakit::insert($data);
    }
}
