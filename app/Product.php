<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Product extends Model
{
    protected $guarded = ['created_at', 'deleted_at'];
}
