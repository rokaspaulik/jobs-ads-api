<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'area'
    ];

    public function jobAds()
    {
        return $this->belongsToMany('App\JobAd');
    }
}
