<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $newsEndpoint = 'news';
    public function index()
    {
        $news = getApiData($this->newsEndpoint, []);
        $news1 = $news[0];
        $news2 = $news[1];
        $otherNews = array_slice($news, 2, 5);

        return view('home', compact('news', 'news1', 'news2', 'otherNews'));
    }
}
