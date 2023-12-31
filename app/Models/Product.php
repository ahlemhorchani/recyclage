<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'description' ,
        'price' ,
        'inStock' ,
        'image','discount',
        'certife' ,
        'datecetif','date_creation',
        'category_id', 'user_id'] ;
        public function getRouteKeyName()
        {
            return'slug' ;
            
        }
        public function category(){
            return $this->belongsTo(category::class);
        }
        protected $table = 'products';

        public static function getAllProducts()
        {
            return self::query()->orderBy('date_creation', 'desc')->get();
        }
        public function user()
         {
           return $this->belongsTo(User::class);
        }

    
    
}
