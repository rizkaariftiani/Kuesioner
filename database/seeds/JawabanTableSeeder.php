<?php

use Illuminate\Database\Seeder;

class JawabanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Jawaban::insert([
            [
                'nama_jwb' => 'Sangat Tidak Setuju / Tidak Pernah',
                'value' =>  '1',
            ],
            [
                'nama_jwb' => 'Tidak Setuju / Jarang',
                'value' =>  '2',
            ],
            [
                'nama_jwb' => 'Ragu-Ragu / Kadang-Kadang',
                'value' =>  '3',
            ],
            [
                'nama_jwb' => 'Setuju / Sering',
                'value' =>  '4',
            ],
            [
                'nama_jwb' => 'Sangat Setuju / Selalu',
                'value' =>  '5',
            ],
        ]);
    }
}
