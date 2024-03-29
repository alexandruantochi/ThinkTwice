<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UGC_Company extends Model
{
    protected $table = 'ugc_companies';

    protected $fillable= ['name','description','contact','suggester','user_id'];


    public function user()
    {
        return $this->belongsTo('App/User');
    }


}
