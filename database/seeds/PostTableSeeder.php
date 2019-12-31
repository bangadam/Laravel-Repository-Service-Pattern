<?php

use App\Models\Post;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');
        foreach (range(0,100) as $item) {
            Post::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraph
            ]);
        }
    }
}
