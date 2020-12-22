<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index() {

        $articles = Article::all();
        return view('home', compact('articles'));
    }

    public function showArticles($id){
        return view('article');
    }
}
