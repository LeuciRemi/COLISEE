<?php

namespace App\Http\Controllers;
use Request;
use App\metier\Visiteur;

class VisiteurController extends Controller {

    public function signIn() {
        $login = Request::input('loginvisiteur');
        $pwd = Request::input('mdpvisiteur');
        $unVisiteur = new Visiteur();
        $connected = $unVisiteur->login($login, $pwd);
        if ($connected){
            return view('home');
        }
        else{
            $erreur = "Login ou mot de passe inconnu !";
            return view('formLogin', compact('erreur'));
        }
    }

    public function signOut(){
        $unVisiteur = new Visiteur();
        $unVisiteur->logout();
        return view('home');
    }

    public function getLogin() {
        $erreur = "";
        return view ('authentification/formLogin', compact('erreur'));
    }
}

