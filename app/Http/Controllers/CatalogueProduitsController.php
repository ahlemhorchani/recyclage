<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogueProduitsController extends Controller
{
      public function index()
    {
        // Vous pouvez ajouter ici la logique pour récupérer les produits à afficher dans le catalogue
        
        return view('catalogue-produits.index');
    }

}
// app/Http/Controllers/CatalogueProduitsController.php

