<?php

namespace App\metier;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use DB;

class Chambre extends Model {

    protected $table = 'chambre';
    public $timestamps = false;
    protected $fillable = [
        'numchambre',
        'occupchambre',
    ];
}
?>

