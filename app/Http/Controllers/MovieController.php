<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MovieController extends Controller
{
    //
    public function index()
    {
        $client = new Client();

        $response = $client->request('GET', 'https://api.themoviedb.org/3/movie/now_playing?language=en-US&page=1', [
            'headers' => [
              'Authorization' => "Bearer " . config('services.tmdb.key'),
              'accept' => 'application/json',
            ],
        ]);

        // $responseBody = json_decode($response->getBody());

        return Inertia::render('Movies/Index', [
            'response' => json_decode($response->getBody()),
        ]);
        // return json_decode($response->getBody());
    }
}
