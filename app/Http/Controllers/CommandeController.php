<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CommandeController extends Controller
{
    public function index(){
        $response = Http::get(env('URL_API_ECOMMANDE').'/getNewStock/20.json');
        $valeur=$response->object();
        Commande::saveLigneCommande($valeur);
        /*$lignCommandes=Commande::getLigneCommande();
        foreach ($lignCommandes as $ligncde){
            echo 'NumCommande: '.$ligncde->NumCommande.' NumProduit: '.$ligncde->PRCLEUNIK.
                ' LibProduit: '.$ligncde->LibProd.' QuantiteProduit: '.$ligncde->Quantite.' PrixAchat: '.$ligncde->prix_achat.'<br/>';
        }*/

    }
}
