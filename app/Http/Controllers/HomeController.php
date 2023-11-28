<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $newsEndpoint = 'news';
    protected $testimonyEndPoint = 'testimonies';
    protected $teamEndPoint = 'teams';
    public function index()
    {
        $news = getApiData($this->newsEndpoint, []);
        $testimonies = getApiData($this->testimonyEndPoint, []);

        $news1 = $news[0];
        $news2 = $news[1];
        $otherNews = array_slice($news, 2, 5);

        $testimonies = array_slice($testimonies, 0, 5);

        return view('home', compact('news', 'news1', 'news2', 'otherNews', 'testimonies'));
    }

    public function indexOurMission()
    {
        $teams = getApiData($this->teamEndPoint . '/rol/5', []);

        return view('our-mission', compact('teams'));
    }
}
