<?php
namespace App\Http\Controllers;

use App\Services\WikipediaService;

class WisataController extends Controller
{
    public function index(WikipediaService $wiki)
    {
        $tempatWisata = [
            'Candi',
        ];

        $wisatas = collect($tempatWisata)->map(function ($title) use ($wiki) {
            return $wiki->getAttraction($title);
        })->filter();

        return view('wisata.index', compact('wisatas'));
    }
}