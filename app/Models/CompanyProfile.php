<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    protected $table = 'company_profile';

    protected $fillable = [
        'company_name',
        'date_established',
        'capital',
        'company_address',
        'factory_address',
        'sales_address',
        'email_company',
        'email_hr',
        'email_sales',
        'en_production_line',
        'jp_production_line',
    
    ];
    
    
    protected $dates = [
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/company-profiles/'.$this->getKey());
    }
}
