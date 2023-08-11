<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{    
    
    public function index()
    {
        // Données factices pour l'exemple
        $months = ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Jun', 'Jul', 'Aoû', 'Sep', 'Oct', 'Nov', 'Déc'];
        $salesData = [2000, 2500, 3000, 2800, 3200, 4000, 3500, 4200, 3800, 4500, 5000, 4800];
        $expensesData = [1500, 1800, 2000, 2200, 2300, 2800, 2600, 2700, 2500, 2800, 3000, 2900];

        return view('dashboard', compact('months', 'salesData', 'expensesData'));
    }

}
