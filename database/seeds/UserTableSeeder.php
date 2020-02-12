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
              'username'		=> 'Adminsepor',
              'email' 			=> 'admin@gmail.com',
              'email_verified_at'=> \Carbon\Carbon::now(),
              'password'		=> bcrypt('admin123'),
              'api token'	    => Str::random(100),
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  			=> 2,
                'name'  		=> 'Adminsepor',
                'username'		=> 'Adminsepor',
                'email' 		=> 'admin@gmail.com',
                'email_verified_at'=> \Carbon\Carbon::now(),
                'password'		=> bcrypt('admin123'),
                'api_token'	    => Str::random(100),
                'created_at'     => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
              ],
        ]);
    }
}
