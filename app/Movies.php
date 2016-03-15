<?php
/**
 * Created by PhpStorm.
 * User: wal01
 * Date: 08/03/16
 * Time: 11:43
 */

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class Movies
 * Modelise toutes mes requetes concernant la table Movies
 * @package App
 */
class Movies extends Model
{

    /**
     * Nom de ma table
     * @var string
     */
    protected $table = "movies";

    /**
     * Récupérer les films actifs
     */

    public function getNbMoviesActifs(){
      /**   SELECT COUNT(*) as ncurses_baudrate()
            FROM movies
            WHERE visible = 1
       */
        $nb = DB::table('movies')
            ->where('visible', 1)
            ->count();
        return $nb;


    }

    public function getNbMovies(){

        $nbtotal = DB::table('movies')
            ->count();

        return $nbtotal;
    }

}