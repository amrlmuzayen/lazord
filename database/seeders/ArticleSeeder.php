<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    
    {
        $articles = [
    // البلوغ (قسم "مستقبل طب الأسنان")
    ['title' => 'دراسة حالة: 10 وحدات لتحويل ابتسامة الزركونيا', 'image' => 'blog-smile.jpg', 'type' => 'blog', 'is_featured' => true],
    ['title' => 'داخل معمل لازورد للمستقبل', 'image' => 'blog-lab.jpg', 'type' => 'blog'],
    ['title' => 'كيف يعمل لازورد', 'image' => 'blog-work.jpg', 'type' => 'blog'],

    // مقالات إضافية
    ['title' => 'دليل المسح الضوئي الرقمي للمبتدئين', 'excerpt' => 'تعرف على كيفية البدء في المسح الضوئي الرقمي وتحقيق أفضل النتائج لمرضاك منذ اليوم الأول.', 'image' => 'result-1.jpg', 'type' => 'resource'],
    ['title' => 'كيف تحسّن قبول العلاج بالتصاميم الرقمية', 'excerpt' => 'استخدم التصاميم الرقمية ثلاثية الأبعاد لإقناع المرضى بخطط العلاج وزيادة نسبة القبول.', 'image' => 'result-2.jpg', 'type' => 'resource'],
    ['title' => 'مستقبل طب الأسنان: توجهات 2025', 'excerpt' => 'اكتشف أحدث التوجهات والتقنيات التي ستشكل مستقبل طب الأسنان في السنوات القادمة.', 'image' => 'result-3.jpg', 'type' => 'resource'],
];

foreach ($articles as $i => $data) {
    Article::firstOrCreate(
        ['title' => $data['title']],
        $data + ['sort_order' => $i + 1]
    );
}
    }
}
