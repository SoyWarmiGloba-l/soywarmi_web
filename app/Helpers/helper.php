<?php

use Illuminate\Support\Facades\Http;

function authenticate()
{
    $response = Http::post(env('API_URL_GOOGLE_FIREBASE') . env('API_GOOGLE_FIREBASE'), [
        "email" => env('API_EMAIL'),
        "password" =>  env('API_PASSWORD'),
        "returnSecureToken" =>  true
    ]);

    $response_auth = Http::withHeaders([
        'Authorization' => 'Bearer ' . $response->json()["idToken"],
    ])->post(env('API_URL_API') . '/api/auth/login', []);

    return $response->json()["idToken"];
}
function getApiData($url, $data)
{
    if (empty($data)) {
        $response = Http::withToken(authenticate())->get(env('API_URL_API') . '/api/v1/' . $url);
    } else {
        $response = Http::withToken(authenticate())->post($url, $data);
    }

    return json_decode($response->body())->data;
}
