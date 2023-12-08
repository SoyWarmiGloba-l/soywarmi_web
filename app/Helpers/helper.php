<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

function authenticate()
{
    $response = Http::post(env('API_URL_GOOGLE_FIREBASE') . env('API_GOOGLE_FIREBASE'), [
        "email" => env('API_EMAIL'),
        "password" =>  env('API_PASSWORD'),
        "returnSecureToken" =>  true
    ]);
    /* $response_auth = Http::withHeaders([
        'Authorization' => 'Bearer ' . $response->json()["idToken"],
    ])->post(env('API_URL_API') . '/api/auth/login', []); */

    return $response->json()["idToken"];
}

function getApiData($url, $data)
{
    if (Cache::has('google_token')) {

        $token = Cache::get('google_token');
    } else {
        Cache::put('google_token', authenticate(), now()->addMinutes(60));
        $token = authenticate();
    }
    if (empty($data)) {
        $response = Http::withHeaders(['accept' => 'application/json'])->withToken($token)->get(env('API_URL_API') . '/api/v1/' . $url);
    } else {
        $response = Http::withHeaders(['accept' => 'application/json'])->withToken($token)->post($url, $data);
    }

    return json_decode($response->body())->data;
}
