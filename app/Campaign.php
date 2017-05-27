<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{

    protected $table = 'campaigns';


    public function sup_companies()
    {
        return $this->belongsToMany('App\Company', 'sup_campaigns', 'company_id', 'campaign_id');
    }


    public function agn_companies()
    {
        return $this->belongsToMany('App\Company', 'agn_campaigns', 'company_id', 'campaign_id');
    }
}
