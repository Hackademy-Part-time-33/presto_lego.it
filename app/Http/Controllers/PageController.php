<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;

class PageController extends Controller
{
    public function homepage() {
        $articles = Article::take(6)->orderBy('created_at', 'desc')->get();
        return view('homepage', compact('articles'));
    }

    public function about() {
        return view('about');
    }
    public function contacts() {
        return view('contacts');
    }

}
