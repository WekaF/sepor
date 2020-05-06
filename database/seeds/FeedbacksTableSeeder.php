<?php

use Illuminate\Database\Seeder;
use App\Feedback;
use Faker\Factory as Faker;

class FeedbacksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 20; $i++){
        
            DB::table('feedbacks')->insert([
    			'nama' => $faker->name,
    			'email' => $faker->freeEmail,
                'saran' => $faker->text(30),
                'created_at'         => \Carbon\Carbon::now(),
                'updated_at'         => \Carbon\Carbon::now()
    		]);
        }
            
    }
}
