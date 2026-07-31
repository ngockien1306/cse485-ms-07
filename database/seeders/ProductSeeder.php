<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $banPhim = Category::where('name', 'Ban phim')->value('id');
        $chuot = Category::where('name', 'Chuot')->value('id');
        $manHinh = Category::where('name', 'Man hinh')->value('id');

        Product::insert([
            [
                'category_id' => $banPhim,
                'sku' => 'KB-01',
                'name' => 'Keychron K2',
                'price' => 1990000,
                'qty' => 10,
                'description' => '',
            ],
            [
                'category_id' => $banPhim,
                'sku' => 'KB-02',
                'name' => 'Akko 3087',
                'price' => 1590000,
                'qty' => 5,
                'description' => '',
            ],
            [
                'category_id' => $banPhim,
                'sku' => 'KB-03',
                'name' => 'Leopold FC660M',
                'price' => 2890000,
                'qty' => 2,
                'description' => '',
            ],
            [
                'category_id' => $chuot,
                'sku' => 'MS-01',
                'name' => 'Logitech M331',
                'price' => 450000,
                'qty' => 15,
                'description' => '',
            ],
            [
                'category_id' => $chuot,
                'sku' => 'MS-02',
                'name' => 'Razer Viper',
                'price' => 1290000,
                'qty' => 6,
                'description' => '',
            ],
            [
                'category_id' => $chuot,
                'sku' => 'MS-03',
                'name' => 'Xiaomi Silent',
                'price' => 250000,
                'qty' => 12,
                'description' => '',
            ],
            [
                'category_id' => $manHinh,
                'sku' => 'MN-01',
                'name' => 'Dell 24 inch',
                'price' => 3990000,
                'qty' => 4,
                'description' => '',
            ],
            [
                'category_id' => $manHinh,
                'sku' => 'MN-02',
                'name' => 'LG UltraFine',
                'price' => 6990000,
                'qty' => 3,
                'description' => '',
            ],
        ]);

        $faker = fake();

        for ($i = 1; $i <= 20; $i++) {
            Product::create([
                'category_id' => Category::inRandomOrder()->value('id'),
                'sku' => $faker->unique()->bothify('SP-###'),
                'name' => $faker->words(3, true),
                'price' => $faker->numberBetween(100000, 9000000),
                'qty' => $faker->numberBetween(1, 15),
                'description' => $faker->sentence(),
            ]);
        }
    }
}