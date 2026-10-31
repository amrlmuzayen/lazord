<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plans = [
    [
        'name' => 'الباقة الأساسية', 'badge' => 'مبتدئ',
        'price_label' => 'مجاناً', 'price_period' => 'للبدء',
        'description' => 'مثالية للعيادات التي تبدأ رحلتها في طب الأسنان الرقمي.',
        'cta_text' => 'ابدأ مجاناً', 'is_popular' => false,
        'features' => [
            ['الوصول إلى منصة لازورد', true],
            ['طلب حتى 5 حالات شهرياً', true],
            ['دعم عبر البريد الإلكتروني', true],
            ['تتبع الحالات الأساسي', true],
            ['الموافقة الرقمية قبل التصنيع', false],
            ['أولوية في التسليم', false],
        ],
    ],
    [
        'name' => 'الباقة الاحترافية', 'badge' => 'الأكثر شيوعاً',
        'price_label' => '$299', 'price_period' => '/ شهرياً',
        'description' => 'للعيادات المتنامية التي تسعى لتقديم خدمة متميزة ومتسقة.',
        'cta_text' => 'ابدأ الآن', 'is_popular' => true,
        'features' => [
            ['الوصول الكامل إلى منصة لازورد', true],
            ['طلبات غير محدودة', true],
            ['دعم هاتفي ومباشر', true],
            ['الموافقة الرقمية قبل التصنيع', true],
            ['تتبع الحالات في الوقت الفعلي', true],
            ['تدريب مخصص للفريق', true],
        ],
    ],
    [
        'name' => 'باقة المؤسسات', 'badge' => 'مؤسسي',
        'price_label' => 'مخصص', 'price_period' => 'حسب الاحتياج',
        'description' => 'حلول مخصصة لشبكات العيادات والمجموعات الصحية الكبيرة.',
        'cta_text' => 'تواصل معنا', 'is_popular' => false,
        'features' => [
            ['كل مميزات الباقة الاحترافية', true],
            ['مدير حساب مخصص', true],
            ['تكامل مع أنظمة العيادة', true],
            ['تقارير وإحصاءات متقدمة', true],
            ['أولوية قصوى في التسليم', true],
            ['دعم 24/7 على مدار الساعة', true],
        ],
    ],
];

foreach ($plans as $i => $data) {
    $features = $data['features'];
    unset($data['features']);

    $plan = Plan::create($data + ['sort_order' => $i + 1]);

    foreach ($features as $j => [$title, $included]) {
        $plan->features()->create([
            'title'       => $title,
            'is_included' => $included,
            'sort_order'  => $j + 1,
        ]);
    }
}
    }
}
