<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobAd extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'area_id',
        'title',
        'description',
        'salary'
    ];

    public function area()
    {
        return $this->belongsTo('App\Area');
    }

    public function jobAdTranslations()
    {
        return $this->hasMany('App\JobAdTranslation');
    }
}
