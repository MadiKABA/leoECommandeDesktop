<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Mouvement;
class HistoriqueController extends Controller
{
    public function index()
    {
        $response = Http::get('https://test.total-ecommande.com/api/leo2/getNewStock/20.json');
        $valeur=$response->object();
        //$v1=$valeur[0];
        //dd($valeur);
        $references=Mouvement::getReferemce();
        foreach ($valeur as $key){
            foreach ($key as $value){
                echo $value->produit->id;
            }
        }
        dd("kaba");
        $mouvements=Mouvement::getALL();
        //dd($mouvements);
        return view('welcome',compact('references','mouvements'));
    }
    public function getByReference($ref){

        $mouvements=Mouvement::getByReference($ref);
        $references=Mouvement::getReferemce();
        return view('welcome',compact('mouvements','references'));
    }
}
