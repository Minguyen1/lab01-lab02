<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0;$i < 100;$i++){
            DB::table('books')->insert([
                'title'=> fake()->text(25),
                'thumbnail'=> fake()->imageUrl(),
                'author'=> fake()->paragraph(),
                'publisher'=> fake()->paragraph(),
                'publication'=> fake()->date(),
                'price'=> fake()->randomFloat(2, 10, 100),
                'quantity'=> fake()->randomNumber(6),
                'category_id' => rand(1,4)
            ]);
        }
    }
}
