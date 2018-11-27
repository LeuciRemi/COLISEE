<?php

namespace App\metier;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use DB;

class Rdv extends Model {

    protected $table = 'rdv';
    public $timestamps = false;
    protected $fillable = [
        'numrdv',
        'numvisiteur',
        'numpatient',
        'datevisite',
        'heuredebut',
        'heurefin',
    ];
}
?>