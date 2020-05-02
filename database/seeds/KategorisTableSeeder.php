<?php

use Illuminate\Database\Seeder;

class KategorisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Kategori::insert([
            [
              'id'  			=> 1,
              'nama_kategori'    => 'Mall',
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  			=> 2,
                'nama_kategori'    => 'Universitas',
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
              ],
              [
                'id'  			=> 3,
                'nama_kategori'    => 'Rumah Sakit',
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
              ],
              [
                'id'  			=> 4,
                'nama_kategori'    => 'Tempat Wisata',
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
              ],
              [
                'id'  			=> 5,
                'nama_kategori'    => 'Hotel',
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
              ],
              
        ]);
    }
}
