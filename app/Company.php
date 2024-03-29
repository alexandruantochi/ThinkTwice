<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    protected $fillable = ['name','description','contact'];

    protected $hidden = ['id','parent','created_at','updated_at'];

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }

    public function sup_campaigns()
    {
        return $this->belongsToMany('App\Campaign', 'sup_campaigns', 'company_id', 'campaign_id');
    }

    public function agn_campaigns()
    {
        return $this->belongsToMany('App\Campaign', 'agn_campaigns', 'company_id', 'campaign_id');
    }



}
