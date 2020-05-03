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
              'email' 			=> 'admin@sepor.com',
              'email_verified_at'=> \Carbon\Carbon::now(),
              'password'		=> bcrypt('sepor123'),
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  			=> 2,
                'name'  			=> 'admin',
                'email' 			=> 'admin@admin.com',
                'email_verified_at'=> \Carbon\Carbon::now(),
                'password'		=> bcrypt('admin123'),
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
              ],
        ]);
    }
}
