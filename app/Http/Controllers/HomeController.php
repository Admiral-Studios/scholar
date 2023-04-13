<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{

    /**
     * Show the application home page.
     *
     * @return Renderable
     */
    public function index()
    {
        $article = Article::first();

        return view('home', compact('article'));
    }

}
