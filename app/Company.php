<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';



    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }

    public function campaigns()
    {
        return $this->belongsToMany('App\Role', 'comp_camp', 'company_id', 'campaign_id');
    }


}
