<?php

use Illuminate\Database\Seeder;

use App\DetailKA;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class KeretainfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        \App\DetailKA::insert([
            [
              'id'  		       => 1,
              'nama_kereta'        => 'Tumapel',
              'no_ka'              => 448,
              'relasi'             => 'Malang - Surabaya Kota',
              'jenis_id'           => 1,
              'jam'                => '04:30',
              'created_at'         => \Carbon\Carbon::now(),
              'updated_at'         => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 2,
                'nama_kereta'        => 'Penataran',
                'no_ka'              => 450,
                'relasi'             => 'Blitar - Malang - Surabaya Kota',
                'jenis_id'           => 1,
                'jam'                => '06:23',
                'created_at'         => \Carbon\Carbon::now(),
                'updated_at'         => \Carbon\Carbon::now()
              ],
              [
                'id'  		       => 3,
                'nama_kereta'        => 'Penataran',
                'no_ka'              => 447,
                'relasi'             => 'Surabaya Kota - Malang - Blitar',
                'jenis_id'           => 1,
                'jam'                => '07:30',
                'created_at'         => \Carbon\Carbon::now(),
                'updated_at'         => \Carbon\Carbon::now()
              ],
              [
                'id'  		       => 4,
                'nama_kereta'        => 'Songgoriti',
                'no_ka'              => 283,
                'relasi'             => 'Malang - Surabaya Gubeng',
                'jenis_id'           => 1,
                'jam'                => '11:10',
                'created_at'         => \Carbon\Carbon::now(),
                'updated_at'         => \Carbon\Carbon::now()
              ],
              [
                'id'  		       => 5,
                'nama_kereta'        => 'Penataran',
                'no_ka'              => 452,
                'relasi'             => 'Blitar - Malang - Surabaya Kota',
                'jenis_id'           => 1,
                'jam'                => '12:50',
                'created_at'         => \Carbon\Carbon::now(),
                'updated_at'         => \Carbon\Carbon::now()
              ],
              [
                'id'  		       => 6,
                'nama_kereta'        => 'Penataran',
                'no_ka'              => 451,
                'relasi'             => 'Surabaya Kota - Malang - Blitar',
                'jenis_id'           => 1,
                'jam'                => '14:51',
                'created_at'         => \Carbon\Carbon::now(),
                'updated_at'         => \Carbon\Carbon::now()
              ],
              [
                'id'  		       => 7,
                'nama_kereta'        => 'Penataran',
                'no_ka'              => 454,
                'relasi'             => 'Blitar - Malang - Surabaya Kota',
                'jenis_id'           => 1,
                'jam'                => '17:33',
                'created_at'         => \Carbon\Carbon::now(),
                'updated_at'         => \Carbon\Carbon::now()
              ],
              [
                'id'  		       => 8,
                'nama_kereta'        => 'Penataran',
                'no_ka'              => 456,
                'relasi'             => 'Blitar - Malang - Surabaya Kota',
                'jenis_id'           => 1,
                'jam'                => '20:22',
                'created_at'         => \Carbon\Carbon::now(),
                'updated_at'         => \Carbon\Carbon::now()
              ],
              [
                'id'  		       => 9,
                'nama_kereta'        => 'Penataran',
                'no_ka'              => 453,
                'relasi'             => 'Surabaya Kota - Malang - Blitar',
                'jenis_id'           => 1,
                'jam'                => '21:06',
                'created_at'         => \Carbon\Carbon::now(),
                'updated_at'         => \Carbon\Carbon::now()
              ],
              [
                'id'  		       => 10,
                'nama_kereta'        => 'Malioboro Ekspres',
                'no_ka'              => 171,
                'relasi'             => 'Malang - Yogyakarta',
                'jenis_id'           => 2,
                'jam'                => '08:20',
                'created_at'         => \Carbon\Carbon::now(),
                'updated_at'         => \Carbon\Carbon::now()
              ],
              [
                'id'  		       => 11,
                'nama_kereta'        => 'Jayabaya',
                'no_ka'              => 116,
                'relasi'             => 'Malang - Surabaya Pasar Turi - Pasar Senen',
                'jenis_id'           => 2,
                'jam'                => '11:55',
                'created_at'         => \Carbon\Carbon::now(),
                'updated_at'         => \Carbon\Carbon::now()
              ],
              [
                'id'  		       => 12,
                'nama_kereta'        => 'Gajayana',
                'no_ka'              => 75,
                'relasi'             => 'Malang - Gambir',
                'jenis_id'           => 2,
                'jam'                => '13:25',
                'created_at'         => \Carbon\Carbon::now(),
                'updated_at'         => \Carbon\Carbon::now()
              ],
              [
                'id'  		       => 13,
                'nama_kereta'        => 'Bima',
                'no_ka'              => 74,
                'relasi'             => 'Malang - Surabaya Gubeng - Gambir',
                'jenis_id'           => 2,
                'jam'                => '14:25',
                'created_at'         => \Carbon\Carbon::now(),
                'updated_at'         => \Carbon\Carbon::now()
              ],
              [
                'id'  		       => 14,
                'nama_kereta'        => 'Malabar',
                'no_ka'              => 108,
                'relasi'             => 'Malang - Bandung - Pasar Senen',
                'jenis_id'           => 2,
                'jam'                => '16:00',
                'created_at'         => \Carbon\Carbon::now(),
                'updated_at'         => \Carbon\Carbon::now()
              ],
              [
                'id'  		       => 15,
                'nama_kereta'        => 'Tawangalun',
                'no_ka'              => 336,
                'relasi'             => 'Malang Kota Lama - Bangil - Ketapang',
                'jenis_id'           => 2,
                'jam'                => '16:10',
                'created_at'         => \Carbon\Carbon::now(),
                'updated_at'         => \Carbon\Carbon::now()
              ],
              [
                'id'  		       => 16,
                'nama_kereta'        => 'Mutiara Selatan',
                'no_ka'              => 106,
                'relasi'             => 'Malang - Bandung - Gambir',
                'jenis_id'           => 2,
                'jam'                => '17:00',
                'created_at'         => \Carbon\Carbon::now(),
                'updated_at'         => \Carbon\Carbon::now()
              ],
              [
                'id'  		       => 17,
                'nama_kereta'        => 'Majapahit',
                'no_ka'              => 251,
                'relasi'             => 'Malang - Pasar Senen',
                'jenis_id'           => 2,
                'jam'                => '19:00',
                'created_at'         => \Carbon\Carbon::now(),
                'updated_at'         => \Carbon\Carbon::now()
              ],
              [
                'id'  		       => 18,
                'nama_kereta'        => 'Malioboro Ekspres',
                'no_ka'              => 173,
                'relasi'             => 'Malang - Yogyakarta',
                'jenis_id'           => 2,
                'jam'                => '20:05',
                'created_at'         => \Carbon\Carbon::now(),
                'updated_at'         => \Carbon\Carbon::now()
              ],
        ]);
    }
}
