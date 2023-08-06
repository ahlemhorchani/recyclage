<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'delivered' ,
        'qty' ,
        'product_name' ,
        'total',
        'price' ,'image',
        'paid','user_id'] ;
        public function user(){
            return $this->belongsTo(User::class);
        }
}
