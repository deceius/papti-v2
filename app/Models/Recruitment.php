<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    protected $table = 'recruitment';

    protected $fillable = [
        'en_header',
        'jp_header',
        'en_details',
        'jp_details',
        'en_vision',
        'jp_vision',
        'en_mission',
        'jp_mission',
    
    ];
    
    
    protected $dates = [
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/recruitments/'.$this->getKey());
    }
}
