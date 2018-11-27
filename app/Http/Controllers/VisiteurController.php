<?php

namespace App\Http\Controllers;
use Request;
use App\metier\Visiteur;

class VisiteurController extends Controller {

    public function signIn()
    {
        try {
            $login = Request::input('login');
            $pwd = Request::input('pwd');
            $unUtilisateur = new Utilisateur();
            $connected = $unUtilisateur->login($login, $pwd);
            if ($connected) {
                return view('home');
            } else {
                $erreur = "Login ou mot de passe inconnu !";
                return view('Error', compact('erreur'));
            }
        } catch (MonException $e) {
            $erreur = $e->getMessage();
            return view('Error', compact('erreur'));
        }
    }

    /**
     * Déconnecte le visiteur authentifié
     * @return type Vue home
     */
    public function signOut()
    {
        try {

            $unUtilisateur = new Utilisateur();
            $unUtilisateur->logout();
            return view('home');
        } catch (Exception $e) {
            $erreur = $e->getMessage();
            return view('Error', compact('erreur'));
        }
    }

    /**
     * Initialise le formulaire d'authentification
     * @return type Vue formLogin
     */
    public function getLogin()
    {
        try {
            $erreur = "";
            return view('formLogin', compact('erreur'));
        } catch (Exception $ex) {
            $erreur = $e->getMessage();
            return view('Error', compact('erreur'));
        }
    }
}