<?php
/**
 * Created by PhpStorm.
 * User: wal01
 * Date: 08/03/16
 * Time: 13:55
 */

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Actors extends Model
{

    protected $table = "actors";

    public function getNbActors(){
        $nbactors = DB::table('actors')
            ->count();
        return $nbactors;
    }

    public function getNbFrenchActors()
    {
        /**   SELECT COUNT(*) as ncurses_baudrate()
         * FROM movies
         * WHERE visible = 1
         */
        $nbfrenchactors = DB::table('actors')
            ->where('nationality','France')
            ->count();
        return $nbfrenchactors;


    }
}