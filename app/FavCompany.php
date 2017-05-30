<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FavCompany extends Model
{
    protected $table='fav_companies';

    protected $fillable=['user_id','company_id'];
}
