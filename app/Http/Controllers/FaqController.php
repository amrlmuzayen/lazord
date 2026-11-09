<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq; // استدعاء المودل

class FaqController extends Controller
{
    public function showWhyPage()
    {
        // جلب الأسئلة المفعلة مرتبة حسب sort_order
        $faqs = Faq::where('is_active', true)->orderBy('sort_order', 'asc')->get();

        // إرسال المتغير $faqs إلى صفحة why.blade.php
        return view('pages.why', compact('faqs'));
        
    }
}
