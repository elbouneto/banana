<?php
/**
 * Created by PhpStorm.
 * User: wal01
 * Date: 15/03/16
 * Time: 14:28
 */

namespace App\Http\Controllers;

use App\Category;
use App\Directors;
use App\Movies;
use App\Sessions;
use App\Actors;
use App\User;

class HomeController extends Controller
{

    public function homepage(){

        $movie = new Movies();

        $category = new Category();

        $actors = new Actors();

        $directors = new Directors();

        $nextsessions = new Sessions();

        $lastuser = new User();


        $nb = $movie->getNbMoviesActifs();
        $nbtotal=$movie->getNbMovies();
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


        return view('static/welcome', [
            'nb' => $nb,
            'nbtotal'=>$nbtotal,
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
            'lastuser' => $lastuser
        ]);

    }




}