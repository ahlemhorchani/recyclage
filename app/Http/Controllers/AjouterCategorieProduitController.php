<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjouterCategorieProduitController extends Controller
{
    public function index()
    {
        // Vous pouvez ajouter ici la logique pour gérer l'ajout de catégorie et de produit
        
        return view('ajouter-categorie-produit.index');
    }

}
