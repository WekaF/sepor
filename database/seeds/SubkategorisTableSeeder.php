<?php

use Illuminate\Database\Seeder;

use App\SubKategori;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class SubkategorisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $faker = Faker::create();
        \App\SubKategori::insert([
            [
              'id'  		       => 1,
              'nama_subkategori'    => 'Malang Town Square',
              'kategori_id'         => 1,
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 2,
                'nama_subkategori'    => 'Malang Olympic Garden',
                'kategori_id'         => 1,
                'created_at'          => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 3,
                'nama_subkategori'    => 'Cyber Mall Dieng',
                'kategori_id'        => 1,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 4,
                'nama_subkategori'    => 'Transmart Malang',
                'kategori_id'        => 1,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 5,
                'nama_subkategori'    => 'Sarinah Malang',
                'kategori_id'        =>1 ,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 6,
                'nama_subkategori'    => 'Dinoyo City',
                'kategori_id'        => 1,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 7,
                'nama_subkategori'    => 'Araya Malang',
                'kategori_id'        => 1,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 8,
                'nama_subkategori'    => 'Gajah Mada Malang',
                'kategori_id'        => 1,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 9,
                'nama_subkategori'    => 'Malang Plaza',
                'kategori_id'        => 1,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 10,
                'nama_subkategori'    => 'Universitas Brawijaya',
                'kategori_id'        => 2,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 11,
                'nama_subkategori'    => 'Universitas Negeri Malang',
                'kategori_id'        => 2,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 12,
                'nama_subkategori'    => 'UIN Maliki Malang',
                'kategori_id'        => 2,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 13,
                'nama_subkategori'    => 'ITN Malang',
                'kategori_id'        => 2,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 14,
                'nama_subkategori'    => 'UMM Malang',
                'kategori_id'        => 2,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 15,
                'nama_subkategori'    => 'Universitas Kanjuruhan Malang',
                'kategori_id'        => 2,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 16,
                'nama_subkategori'    => 'Politeknik Negeri Malang',
                'kategori_id'        => 2,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 17,
                'nama_subkategori'    => 'Universitas Merdeka Malang',
                'kategori_id'        => 2,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 18,
                'nama_subkategori'    => 'Universitas Ma Chung',
                'kategori_id'        => 2,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 19,
                'nama_subkategori'    => 'Universitas Islam Malang',
                'kategori_id'        => 2,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 20,
                'nama_subkategori'    => 'RS Dr. Saiful Anwar',
                'kategori_id'        => 3,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 21,
                'nama_subkategori'    => 'RS Tentara Dr. Soepraoen',
                'kategori_id'        => 3,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 22,
                'nama_subkategori'    => 'RS Panti Nirmala',
                'kategori_id'        => 3,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 23,
                'nama_subkategori'    => 'RS Lavalette',
                'kategori_id'        => 3,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 24,
                'nama_subkategori'    => 'RS Panti Waluya Sawahan',
                'kategori_id'        => 3,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 25,
                'nama_subkategori'    => 'Gunung Bromo',
                'kategori_id'        => 4,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 26,
                'nama_subkategori'    => 'Jatim Park 1',
                'kategori_id'        => 4,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 27,
                'nama_subkategori'    => 'Jatim Park 2',
                'kategori_id'        => 4,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 28,
                'nama_subkategori'    => 'Jatim Park 3',
                'kategori_id'        => 4,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 29,
                'nama_subkategori'    => 'BNS',
                'kategori_id'        => 4,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 30,
                'nama_subkategori'    => 'Hawai Waterpark',
                'kategori_id'        => 4,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 31,
                'nama_subkategori'    => 'Alun-Alun Malang',
                'kategori_id'        => 4,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 32,
                'nama_subkategori'    => 'Alun-Alun Tugu',
                'kategori_id'        => 4,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 33,
                'nama_subkategori'    => 'Jodipan',
                'kategori_id'        => 4,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 34,
                'nama_subkategori'    => 'Museum Angkut',
                'kategori_id'        => 4,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 35,
                'nama_subkategori'    => 'Lembah Tumpang Resort',
                'kategori_id'        => 4,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 36,
                'nama_subkategori'    => 'Sengkaling',
                'kategori_id'        => 4,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 37,
                'nama_subkategori'    => 'Pantai JLS',
                'kategori_id'        => 4,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 38,
                'nama_subkategori'    => 'Ijen Suites Resort & Convention',
                'kategori_id'        => 5,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 39,
                'nama_subkategori'    => 'Harris Hotel & Convention',
                'kategori_id'        => 5,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 40,
                'nama_subkategori'    => 'Aria Gajayana Hotel',
                'kategori_id'        => 5,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 41,
                'nama_subkategori'    => 'Grand Cakra Hotel Malang',
                'kategori_id'        => 5,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 42,
                'nama_subkategori'    => 'The Balava Hotel',
                'kategori_id'        => 5,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 43,
                'nama_subkategori'    => 'Swiss Berlin Malang',
                'kategori_id'        => 5,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 44,
                'nama_subkategori'    => 'Hotel Santika Premiere Malang',
                'kategori_id'        => 5,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 45,
                'nama_subkategori'    => 'Ibis Styles Malang',
                'kategori_id'        => 5,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            
            ]);


    }
}
