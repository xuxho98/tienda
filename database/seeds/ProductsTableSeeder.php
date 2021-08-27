<?php

use App\Product;
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
        Product::create([
            'name' => 'MacBook Pro',
            'details' => '15 pulgadas, 1TB HDD, 32GB RAM',
            'price' => 2499.99,
            'shipping_cost' => 29.99,
            'category_id' => 1,
            'image_path' => 'macbook-pro.png',
            'stock' => 12,
            'code' => 1234567890123
        ]);

        Product::create([
            'name' => 'Dell Vostro 3557',
            'details' => '15 pulgadas, 1TB HDD, 8GB RAM',
            'price' => 1499.99,
            'shipping_cost' => 19.99,
            'category_id' => 1,
            'image_path' => 'dell-v3557.png',
            'stock' => 12,
            'code' => 1245167890123
        ]);

        Product::create([
            'name' => 'iPhone 11 Pro',
            'details' => '6.1 pulgadas, 64GB 4GB RAM',
            'price' => 649.99,
            'shipping_cost' => 14.99,
            'category_id' => 2,
            'image_path' => 'iphone-11-pro.png',
            'stock' => 12,
            'code' => 1234577877123
        ]);

        Product::create([
            'name' => 'Remax 610D Headset',
            'details' => '6.1 pulgadas, 64GB 4GB RAM',
            'price' => 8.99,
            'shipping_cost' => 1.89,
            'category_id' => 3,
            'image_path' => 'remax-610d.jpg',
            'stock' => 12,
            'code' => 1234523890123
        ]);

        Product::create([
            'name' => 'Samsung LED TV',
            'details' => '24 pulgadas, LED Display, Resolución 1366 x 768',
            'price' => 41.99,
            'shipping_cost' => 12.59,
            'category_id' => 4,
            'image_path' => 'samsung-led-24.png',
            'stock' => 12,
            'code' => 1234567770123
        ]);

        Product::create([
            'name' => 'Samsung Camara Digital',
            'details' => '16.1MP, 5x Optical Zoom',
            'price' => 144.99,
            'shipping_cost' => 13.39,
            'category_id' => 5,
            'image_path' => 'samsung-mv800.jpg',
            'stock' => 12,
            'code' => 1234548890123
        ]);

        Product::create([
            'name' => 'Huawei GR 5 2017',
            'details' => '5.5 pulgadas, 32GB 4GB RAM',
            'price' => 148.99,
            'shipping_cost' => 6.79,
            'category_id' => 2,
            'image_path' => 'gr5-2017.jpg',
            'stock' => 12,
            'code' => 5434567890123
        ]);
    }
}
