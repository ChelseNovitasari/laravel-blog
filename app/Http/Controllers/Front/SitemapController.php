<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;

class SitemapController extends Controller
{
    public function index()
    {
        $articles   = Article::latest()->get();
        $categories = Category::latest()->get();

        return response()->view('front.sitemap', [
            'articles' => $articles,
            'categories' => $categories,
        ])->header('Content-Type', 'text/xml');
    }
}
