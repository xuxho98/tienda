<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' =>'tecnologia',
            'description' =>'tttttt'
        ]);
        Category::create([
            'name' =>'tecnologia1',
            'description' =>'tttttt'
        ]);
        Category::create([
            'name' =>'tecnologia2',
            'description' =>'tttttt'
        ]);
        Category::create([
            'name' =>'tecnologi3',
            'description' =>'tttttt'
        ]);
        Category::create([
            'name' =>'tecnologia4',
            'description' =>'tttttt'
        ]);
    }
}
