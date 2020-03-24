<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::insert([
            [
              'id'  			=> 1,
              'name'  			=> 'Adminsepor',
              'email' 			=> 'admin@gmail.com',
              'email_verified_at'=> \Carbon\Carbon::now(),
              'password'		=> bcrypt('sepor123'),
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
        ]);
    }
}
