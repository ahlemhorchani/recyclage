<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'delivered' ,
        'qty' ,
        'product_name' ,
        'total',
        'price ' ,
        'paid','user_id'] ;
        public function user(){
            return $this->belongsTo(User::class);
        }
}
