<?php

use Illuminate\Database\Seeder;

class KuesionerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Kuesioner::insert([
            [
              'nim_mhs' => '1931710105',
              'nama_mhs' =>  'Faiz Hilmawan M',
              'kelas' => '2F',
              'no_abs' => '5',
              'jwb1' => '1',
              'jwb2' => '1',
              'jwb3' => '1',
              'jwb4' => '1',
              'jwb5' => '1',
            ],
        ]);
    }
}
