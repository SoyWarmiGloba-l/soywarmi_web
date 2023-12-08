<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourceController extends Controller
{
    protected $endpoint = 'resources';
    public function index()
    {
        $resources = getApiData($this->endpoint, []);
        $type_resources = [];
        $bandera = [];
        foreach ($resources as $resource) {

            if (!in_array($resource->code_type, $bandera)) {
                $type_resources[] = $resource->code_type;
                $bandera[] = $resource->code_type;
            }
        }

        return view('resource.index', compact('resources', 'type_resources'));
    }
}
