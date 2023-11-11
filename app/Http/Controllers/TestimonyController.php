<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonyController extends Controller
{
    protected $endpoint = 'testimonies';
    public function index()
    {
        $testimonies = getApiData($this->endpoint, []);

        return view('all_testimonies', compact('testimonies'));
    }

    public function show($slug)
    {
        return view('testimony', ['testimony' => getApiData($this->endpoint . '/slug/' . $slug, [])]);
    }
}
