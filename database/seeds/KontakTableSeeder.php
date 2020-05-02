<?php

use Illuminate\Database\Seeder;
use App\Kontak;
use Faker\Factory as Faker;

class KontakTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        \App\Kontak::insert([
            [
              'id'  		       => 1,
              'jenis'              => $faker->randomElement(['Pelanggan']),
              'nama'               => 'Telpon',
              'nomor'              => '021-021 , 021-21391121',
              'created_at'         => \Carbon\Carbon::now(),
              'updated_at'         => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 2,
                'jenis'              => $faker->randomElement(['Pelanggan']),
                'nama'               => 'Email',
                'nomor'              => 'kontakpelanggan@kereta-api.co.id',
                'created_at'         => \Carbon\Carbon::now(),
                'updated_at'         => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 3,
                'jenis'              => $faker->randomElement(['Pelanggan']),
                'nama'               => 'Facebook',
                'nomor'              => 'KAI 121',
                'created_at'         => \Carbon\Carbon::now(),
                'updated_at'         => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 4,
                'jenis'              => $faker->randomElement(['Pelanggan']),
                'nama'               => 'Twitter',
                'nomor'              => 'KAI 121',
                'created_at'         => \Carbon\Carbon::now(),
                'updated_at'         => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 5,
                'jenis'              => $faker->randomElement(['Darurat']),
                'nama'               => 'Polisi',
                'nomor'              => '110',
                'created_at'         => \Carbon\Carbon::now(),
                'updated_at'         => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 6,
                'jenis'              => $faker->randomElement(['Darurat']),
                'nama'               => 'Ambulans',
                'nomor'              => '118 & 119',
                'created_at'         => \Carbon\Carbon::now(),
                'updated_at'         => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 7,
                'jenis'              => $faker->randomElement(['Darurat']),
                'nama'               => 'Badan Pencarian & Penyelamatan Nasional',
                'nomor'              => '115',
                'created_at'         => \Carbon\Carbon::now(),
                'updated_at'         => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 8,
                'jenis'              => $faker->randomElement(['Darurat']),
                'nama'               => 'Posko Bencana Alam',
                'nomor'              => '129',
                'created_at'         => \Carbon\Carbon::now(),
                'updated_at'         => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 9,
                'jenis'              => $faker->randomElement(['Darurat']),
                'nama'               => 'PLN',
                'nomor'              => '123',
                'created_at'         => \Carbon\Carbon::now(),
                'updated_at'         => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 10,
                'jenis'              => $faker->randomElement(['Darurat']),
                'nama'               => 'Pemadam Kebakaran',
                'nomor'              => '113 atau 1131',
                'created_at'         => \Carbon\Carbon::now(),
                'updated_at'         => \Carbon\Carbon::now()
            ],
            [
                'id'  		       => 11,
                'jenis'              => $faker->randomElement(['Darurat']),
                'nama'               => 'Nomor Darurat telpon seluler & satelit',
                'nomor'              => '112',
                'created_at'         => \Carbon\Carbon::now(),
                'updated_at'         => \Carbon\Carbon::now()
            ],

        ]);
    }
}
