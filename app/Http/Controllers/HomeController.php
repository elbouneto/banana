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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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

    public function modifier(Requests\AdministratorRequest $request){

        $name = $request->name;
        $firstname = $request->firstname;
        $photo = $request->photo;
        $description = $request->description;
        $email = $request->email;
        $password = $request->password;

        $user = Auth::user();
        $user->firstname = $firstname;
        $user->lastname = $name;
        $user->description = $description;
        $user->email = $email;

        if($request->hasFile('photo')){
            $filename = $photo->getClientOriginalName();
            // Récupère le nom original du fichier
            $destinationPath = public_path().'/uploads/administrators';
            // Indique ou stocker le fichier
            $photo->move($destinationPath, $filename);

            $user->photo = asset('/uploads/administrators/'.$filename);

        }

        //has() permet de dire si un champ existe et n'est pas vide

        if($request->has('password')){

            $user->password = bcrypt($password);

        }

        $user->save();

        return Redirect::route('static_welcome');


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
