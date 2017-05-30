<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductReviews extends Model
{
    protected $table = 'product_reviews';

    public function user(){
        return $this->belongsTo('App\User'); //relation a post belongs to a user
    }
}
