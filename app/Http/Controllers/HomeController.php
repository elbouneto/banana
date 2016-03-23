<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Category;
use App\Directors;
use App\Movies;
use App\Sessions;
use App\Actors;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function compte(){

        return view('compte');
    }

    public function modifier(AdministratorRequest $request){



    }


    public function homepage()
    {

        $movie = new Movies();

        $category = new Category();

        $actors = new Actors();

        $directors = new Directors();

        $nextsessions = new Sessions();

        $lastuser = new User();


        $nb = $movie->getNbMoviesActifs();
        $nbtotal = $movie->getNbMovies();
        $nbactors = $actors->getNbActors();
        $nbfrenchactors = $actors->getNbFrenchActors();
        $moyenage = $actors->getMoyenAgeActors();
        $moyenmovie = $movie->getDureeMoyenMovie();
        $nextseance = $movie->getNextSeance();
        $sumbudget = $movie->getSumBudget();
        $notepress = $movie->getNotePress();
        $nbcategory = $category->getNbCategory();
        $nbdirectors = $directors->getNbDirectors();
        $nextsessions = $nextsessions->getnextsession();
        $lastuser = $lastuser->getlastuser();
        $trailer = $movie->video();


        return view('static/welcome', [
            'nb' => $nb,
            'nbtotal' => $nbtotal,
            'nbactors' => $nbactors,
            'nbfrenchactors' => $nbfrenchactors,
            'moyenage' => $moyenage,
            'moyenmovie' => $moyenmovie,
            'nextseance' => $nextseance,
            'sumbudget' => $sumbudget,
            'notepress' => $notepress,
            'nbcategory' => $nbcategory,
            'nbdirectors' => $nbdirectors,
            'nextsessions' => $nextsessions,
            'lastuser' => $lastuser,
            'trailer' => $trailer
        ]);

    }





}
