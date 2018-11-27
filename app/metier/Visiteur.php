<?php

namespace App\metier;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use App\Exceptions\MonException;
use DB;

class Visiteur extends Model {

    protected $table = 'visiteur';
    public $timestamps = false;
    protected $fillable = [
        'numvisiteur',
        'nomvisiteur',
        'prenomvisiteur',
        'loginvisiteur',
        'mdpvisiteur',
    ];

    public function login($login, $pwd) {
        $connected = false;
        try {
            $visiteur = DB::table('visiteur')
                ->select()
                ->where('loginvisiteur', '=', $login)
                ->first();
            if ($visiteur) {
                if ($visiteur->mdpvisiteur == $pwd) {
                    Session::put('id', $visiteur->numvisiteur);
                    Session::put('role', 'visiteur');
                    $connected = true;
                }
            }
        }
        catch (QueryException $e)
        {
            throw new MonException ($e->getMessage());
        }
        return $connected;
    }

    public function logout(){
        Session::put('id', 0);
    }
}
?>

