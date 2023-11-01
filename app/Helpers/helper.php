<?php
use Illuminate\Support\Facades\Http;

function authenticate()
{
    $response = Http::post(env('API_URL').'/api/auth/login', ['email' => env('API_EMAIL'), 'password' => env('API_PASSWORD')]);
    return json_decode($response->body());
}
function getApiData($url, $data)
{
    if (empty($data)){
        $response = Http::withToken(authenticate()->data->access_token)->get(env('API_URL'). '/api/v1/'.$url);
    } else {
        $response = Http::withToken(authenticate()->data->access_token)->post($url, $data);
    }
    return json_decode($response->body())->data;
}
