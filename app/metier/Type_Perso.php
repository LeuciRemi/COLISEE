<?php

namespace App\metier;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use DB;

class Type_Perso extends Model {

    protected $table = 'type_perso';
    public $timestamps = false;
    protected $fillable = [
        'idtype_perso',
        'lbltype_perso',
    ];
}
?>