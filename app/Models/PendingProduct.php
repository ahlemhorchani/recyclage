<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendingProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'price',
        'inStock',
        'image',
        'certife',
        'datecetif',
        'category_id',
        'user_id',
        'status', // Ne pas mettre la colonne et ses valeurs par défaut ici
    ];

    protected $table = 'pending_products'; // Nom de la table dans la base de données

    protected $attributes = [
        'status' => 'pending', // Valeur par défaut pour la colonne 'status'
    ];
}



