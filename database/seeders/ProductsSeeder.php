<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;
use Illuminate\Support\Str;
class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::create([
            'name' => 'Alien Pc',
            'slug' => 'alien-pc',
            'img_url' => Str::random(10),
            'details' => Str::random(30),
            'description' => Str::random(100),
            'amount'=> 30,
            'category_id' => 1,
            'price'=> 150000.00
        ]);

        Products::create([
            'name' => Str::random(10),
            'slug' => 'laptop-pc',
            'img_url' => Str::random(10),
            'details' => Str::random(30),
            'description' => Str::random(100),
            'amount'=> 30,
            'category_id' => 1,
            'price'=> 100000.00
        ]);
        Products::create([
            'name' => Str::random(10),
            'slug' => '14-inch-laptop',
            'img_url' => Str::random(10),
            'details' => Str::random(30),
            'description' => Str::random(100),
            'amount'=> 30,
            'category_id' => 1,
            'price'=> 120000.00
        ]);
        Products::create([
            'name' => Str::random(10),
            'slug' => 'smartphone',
            'img_url' => Str::random(10),
            'details' => Str::random(30),
            'description' => Str::random(100),
            'amount'=> 30,
            'category_id' => 2,
            'price'=> 12000.00
        ]);
        Products::create([
            'name' => Str::random(10),
            'slug' => 'smartphone-1',
            'img_url' => Str::random(10),
            'details' => Str::random(30),
            'description' => Str::random(100),
            'amount'=> 30,
            'category_id' => 2,
            'price'=> 12000.00
        ]);
        Products::create([
            'name' => Str::random(10),
            'slug' => 'smartphone-2',
            'img_url' => Str::random(10),
            'details' => Str::random(30),
            'description' => Str::random(100),
            'amount'=> 30,
            'category_id' => 2,
            'price'=> 12000.00
        ]);
        Products::create([
            'name' => Str::random(10),
            'slug' => 'smartphone-3',
            'img_url' => Str::random(10),
            'details' => Str::random(30),
            'description' => Str::random(100),
            'amount'=> 30,
            'category_id' => 2,
            'price'=> 12000.00
        ]);
        Products::create([
            'name' => Str::random(10),
            'slug' => 'smartphone',
            'img_url' => Str::random(10),
            'details' => Str::random(30),
            'description' => Str::random(100),
            'amount'=> 30,
            'category_id' => 2,
            'price'=> 12000.00
        ]);
        Products::create([
            'name' => Str::random(10),
            'slug' => 'accessories-1',
            'img_url' => Str::random(10),
            'details' => Str::random(30),
            'description' => Str::random(100),
            'amount'=> 30,
            'category_id' => 3,
            'price'=> 12000.00
        ]);
        Products::create([
            'name' => Str::random(10),
            'slug' => 'accessories-3',
            'img_url' => Str::random(10),
            'details' => Str::random(30),
            'description' => Str::random(100),
            'amount'=> 30,
            'category_id' => 3,
            'price'=> 12000.00
        ]);
        Products::create([
            'name' => Str::random(10),
            'slug' => 'accessories-4',
            'img_url' => Str::random(10),
            'details' => Str::random(30),
            'description' => Str::random(100),
            'amount'=> 30,
            'category_id' => 3,
            'price'=> 12000.00
        ]);
        Products::create([
            'name' => Str::random(10),
            'slug' => 'accessories-6',
            'img_url' => Str::random(10),
            'details' => Str::random(30),
            'description' => Str::random(100),
            'amount'=> 30,
            'category_id' => 3,
            'price'=> 12000.00
        ]);
        Products::create([
            'name' => Str::random(10),
            'slug' => 'accessories-7',
            'img_url' => Str::random(10),
            'details' => Str::random(30),
            'description' => Str::random(100),
            'amount'=> 30,
            'category_id' => 4,
            'price'=> 12000.00
        ]);
        Products::create([
            'name' => Str::random(10),
            'slug' => 'accessories-8',
            'img_url' => Str::random(10),
            'details' => Str::random(30),
            'description' => Str::random(100),
            'amount'=> 30,
            'category_id' => 4,
            'price'=> 12000.00
        ]);
        Products::create([
            'name' => Str::random(10),
            'slug' => 'accessories-9',
            'img_url' => Str::random(10),
            'details' => Str::random(30),
            'description' => Str::random(100),
            'amount'=> 30,
            'category_id' => 4,
            'price'=> 12000.00
        ]);
    }
}
