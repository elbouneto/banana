<?php
/**
 * Created by PhpStorm.
 * User: wal01
 * Date: 17/03/16
 * Time: 09:42
 */

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Sessions extends Model
{

    protected $table = 'sessions';


    public function getnextsession(){

        $nextsessions=DB::table('sessions')
            ->join('cinema','cinema.id','=','sessions.cinema_id')
            ->select('cinema.title as cinetitle','cinema.ville as cineville','date_session')
            ->get();

        return $nextsessions;
    }

}