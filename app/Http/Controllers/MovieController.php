<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MovieController extends Controller
{
    private $client;

    public function __construct() {
        $this->client = new Client();
    }

    private function fetch(string $url)
    {
        $response = $this->client->request('GET', $url, [
            'headers' => [
              'Authorization' => "Bearer " . config('services.tmdb.key'),
              'accept' => 'application/json',
            ],
        ]);

        return json_decode($response->getBody());
    }

    //
    public function index()
    {
        $now_playing = $this->fetch('https://api.themoviedb.org/3/movie/now_playing?language=en-US&page=1');
        $popular = $this->fetch('https://api.themoviedb.org/3/movie/popular?language=en-US&page=1');
        $top_rated = $this->fetch('https://api.themoviedb.org/3/movie/top_rated?language=en-US&page=1');
        $upcoming = $this->fetch('https://api.themoviedb.org/3/movie/upcoming?language=en-US&page=1');

        return Inertia::render('Movies/Index', [
            'now_playing' => $now_playing,
            'popular' => $popular,
            'top_rated' => $top_rated,
            'upcoming' => $upcoming,
        ]);
        // return json_decode($response->getBody());
    }
}
