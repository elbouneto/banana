<?php
/**
 * Created by PhpStorm.
 * User: wal01
 * Date: 08/03/16
 * Time: 14:16
 */

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Directors extends Model
{

    protected $table = "directors";

    public function getNbDirectors()
    {
        $nbdirectors = DB::table('directors')
            ->count();
        return $nbdirectors;
    }



}