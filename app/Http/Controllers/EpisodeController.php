<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Episode;

class EpisodeController extends Controller
{

    public function index()
    {
        return view('episode.index', ['episodes' => Episode::paginate(15) ]);
    }

    public function show(Episode $episode)
    {
        return view('episode.show', ['episode' => $episode]);
    }
}