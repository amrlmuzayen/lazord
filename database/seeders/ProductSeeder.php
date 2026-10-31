<?php

namespace Database\Seeders;
use App\Models\Product;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $products = [
    ['أجزاء مباشرة إلى النهاية', 'product-1.jpg'],
    ['حلول رعاية الأسنان الشاملة', 'product-2.jpg'],
    ['طقم الأسنان ذو الموعد الثاني', 'product-3.jpg'],
    ['تيجان الزركونيا لمدة 5 أيام', 'product-4.jpg'],
    ['أجهزة علاج انقطاع التنفس أثناء النوم', 'product-5.jpg'],
    ['تقويم الأسنان الشفاف', 'product-6.jpg'],
    ['واليات ليلية مطبوعة بتقنية ثلاثية الأبعاد', 'product-7.jpg'],
];

foreach ($products as $i => [$title, $image]) {
    Product::create([
        'title'      => $title,
        'image'      => $image,
        'sort_order' => $i + 1,
    ]);
}
    }
}
