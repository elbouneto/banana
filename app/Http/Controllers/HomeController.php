<?php
/**
 * Created by PhpStorm.
 * User: wal01
 * Date: 15/03/16
 * Time: 14:28
 */

namespace App\Http\Controllers;

use App\Movies;

use App\Actors;

class HomeController extends Controller
{

    public function homepage(){

        $movie = new Movies();
        $nb = $movie->getNbMoviesActifs();
        $nbtotal=$movie->getNbMovies();
        $actors = new Actors();
        $nbactors = $actors->getNbActors();
        $nbfrenchactors = $actors->getNbFrenchActors();

        return view('static/welcome', [
            'nb' => $nb,
            'nbtotal'=>$nbtotal,
            'nbactors' => $nbactors,
            'nbfrenchactors' => $nbfrenchactors
        ]);

    }




}