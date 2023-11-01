<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourceController extends Controller
{
    protected $endpoint = 'resources';
    public function index()
    {
        $resources = getApiData($this->endpoint, []);
        return view('resource.index', compact('resources'));
    }
}
