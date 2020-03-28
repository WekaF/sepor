<?php

use Illuminate\Database\Seeder;

class jeniskeretasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\JenisKA::insert([
            [
              'id'  			=> 1,
              'jenis_kereta'    => 'Lokal',
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  			=> 2,
                'jenis_kereta'    => 'Jarak Jauh',
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
              ],
        ]);
    }
}
