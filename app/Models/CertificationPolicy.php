<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CertificationPolicy extends Model
{
    protected $table = 'certification_policy';

    protected $fillable = [
        'en_ims',
        'jp_ims',
        'en_iso',
        'jp_iso',
    
    ];
    
    
    protected $dates = [
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/certification-policies/'.$this->getKey());
    }
}
