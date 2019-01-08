<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => str_random(10),
            'desc' => str_random(10),
            'content' => str_random(10),
            'images' => str_random(10),
        ]);
    }
}
