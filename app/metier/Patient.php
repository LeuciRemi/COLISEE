<?php

namespace App\metier;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use DB;

class Patient extends Model {

    protected $table = 'patient';
    public $timestamps = false;
    protected $fillable = [
        'numpatient',
        'numchambre',
        'nompatient',
        'prenompatient',
        'loginpatient',
        'mdppatient',
        'dateadminpat',
        'datesortipat',
    ];

    public function login($login, $pwd) {
        $connected = false;
        $patient = DB::table('patient')
            ->select()
            ->where('loginpatient', '=', $login)
            ->first();
        if ($patient) {
            if ($patient->mdppatient == $pwd) {
                Session::put('id', $patient->numpatient);
                Session::put('role', 'patient');
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

