<?php

namespace App\metier;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use DB;

class Personnel extends Model {

    protected $table = 'personnel';
    public $timestamps = false;
    protected $fillable = [
        'numperso',
        'idtype_perso',
        'dateembperso',
        'nomperso',
        'prenomperso',
        'loginperso',
        'mdpperso',
    ];

    public function login($login, $pwd) {
        $connected = false;
        $personnel = DB::table('personnel')
            ->select()
            ->where('loginperso', '=', $login)
            ->first();
        if ($personnel) {
            if ($personnel->mdpperso == $pwd) {
                Session::put('id', $personnel->numperso);
                Session::put('role', 'personnel');
                $connected = true;
            }
        }
        return $connected;
    }

    public function logout(){
        Session::put('id', 0);
    }
}
?>