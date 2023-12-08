<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    protected $endPoint = 'faqs';
    public function index()
    {
        $faqs = getApiData($this->endPoint, []);
        //dd(array_chunk($faqs, 3));
        return view('faqs', [
            'faqs' => array_chunk($faqs, 3)
        ]);
    }
}
