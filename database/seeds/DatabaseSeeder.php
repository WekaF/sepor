<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
          $this->call(UserTableSeeder::class);
          $this->call(jeniskeretasTableSeeder::class);
          $this->call(KategorisTableSeeder::class);
          $this->call(SubkategorisTableSeeder::class);
          $this->call(KeretainfoTableSeeder::class);
          $this->call(KontakTableSeeder::class);
        //   $this->call(FeedbacksTableSeeder::class);
        
          
    }
}
