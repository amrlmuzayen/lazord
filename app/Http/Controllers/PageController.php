<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Faq;
use App\Models\Plan;
use App\Models\Article;

class PageController extends Controller
{
    public function learn()
    {
        $faqs = Faq::where('is_active', true)->orderBy('sort_order')->get();
        $blog = Article::where('type', 'blog')->orderBy('sort_order')->get();
        $featured = $blog->firstWhere('is_featured', true);
        $side = $blog->where('is_featured', false);

        $resources = Article::where('type', 'resource')->orderBy('sort_order')->get();

        return view('pages.learn', compact('faqs', 'featured', 'side', 'resources'));
    }


    
  
    public function labServices()
    {
        $products = Product::where('is_active', true)->orderBy('sort_order')->get();

        return view('pages.lab-services', compact('products'));
    }


    public function pricing()
    {
        $plans = Plan::with('features')->orderBy('sort_order')->get();
    
        return view('pages.pricing', compact('plans'));
    }



    public function solutions()
    {
        $blog = Article::where('type', 'blog')->orderBy('sort_order')->get();
        $featured = $blog->firstWhere('is_featured', true);
        $side = $blog->where('is_featured', false);

        return view('pages.solutions', compact('featured', 'side'));
    }
    

}
