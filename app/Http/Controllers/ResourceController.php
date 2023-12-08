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
                if ($resource->code_type == 'pptx')
                    $type_resources[] = 'Power Point';
                else if ($resource->code_type == 'pdf')
                    $type_resources[] = 'PDF';
                else if ($resource->code_type == 'docx')
                    $type_resources[] = 'Word';
                else if ($resource->code_type == 'video')
                    $type_resources[] = 'Video';
                else
                    $type_resources[] = $resource->code_type;
                $bandera[] = $resource->code_type;
            }
        }

        return view('resource.index', compact('resources', 'type_resources'));
    }
}
