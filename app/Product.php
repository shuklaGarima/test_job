<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'photo','price','quantity','color','size'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
