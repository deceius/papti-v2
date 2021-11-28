<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $fillable = [
        'country_code',
        'count',

    ];


    protected $primaryKey = 'country_code';
    public $timestamps = false;
    public $incrementing = false;
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/visitors/'.$this->getKey());
    }
}
