<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CommandeController extends Controller
{
    public function index(){
        /*$response = Http::get(env('URL_API_ECOMMANDE').'/getNewStock/20.json');
        $valeur=$response->object();
        Commande::saveLigneCommande($valeur);*/
        $commandes=Commande::getCommande();
        return view('commandes.commande',compact('commandes'));
    }
    public function show($id){
        $ligneCommandes=Commande::showCommande($id);
        return view("commandes.show",compact("ligneCommandes"));
    }
}
