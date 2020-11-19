<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobAdTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'job_ad_id',
        'language_code',
        'title',
        'description'
    ];

    public function jobAd()
    {
        $this->belongsTo('App\JobAd');
    }
}
