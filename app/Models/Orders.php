<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    public function customers()
    {
        return $this->belongsTo(Costumers::class, 'customers_id', 'id');
    }

    public function products()
    {
        return $this->belongsTo(Products::class, 'products_id', 'id');
    }
}
