<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name',
        'price_new',
        'price_old',
        'cate_id',
        'short_desc',
        'detail',
    ];

    public function connectCategories(){
    	return $this->belongsTo('App\Models\Category', 'cate_id','id');
    }

    public function connectComments(){
        return $this->hasMany('App\Models\Comment' , 'product_id' , 'id');
    }
}
