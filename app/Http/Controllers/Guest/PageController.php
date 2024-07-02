<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie; //senza questo non posso usare il modello Movie e quindi mi si rompe $film in basso

class PageController extends Controller
{
    //{
    public function home()
    {
        $film = Movie::all(); //funziona solo grazie al "use App\Models\Movie;" sopra, altrimenti non ci sarebbe niente importato
        $dati = [
            "store" => config("data"),
            "movie" => $film
        ];

        return view('home', $dati);
    }

    public function movieList()
    {
        $film = Movie::all(); //funziona solo grazie al "use App\Models\Movie;" sopra, altrimenti non ci sarebbe niente importato
        $dati = [
            "store" => config("data"),
            "movie" => $film
        ];

        return view('home', $dati);
    }
}

