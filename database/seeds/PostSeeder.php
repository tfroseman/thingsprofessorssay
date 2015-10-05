<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => str_random(10),
            'body' => str_random(40),
            'published_at' => \Carbon\Carbon::now(),
            'school' => str_random(20),
        ]);
    }

}