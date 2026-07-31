<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::insert([
            [
                'name' => 'Ban phim',
                'description' => 'Danh mục bàn phím',
            ],
            [
                'name' => 'Chuot',
                'description' => 'Danh mục chuột',
            ],
            [
                'name' => 'Man hinh',
                'description' => 'Danh mục màn hình',
            ],
        ]);
    }
}