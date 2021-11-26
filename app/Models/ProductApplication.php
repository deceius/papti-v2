<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Brackets\Media\HasMedia\ProcessMediaTrait;
use Brackets\Media\HasMedia\AutoProcessMediaTrait;
use Brackets\Media\HasMedia\HasMediaCollectionsTrait;
use Brackets\Media\HasMedia\HasMediaThumbsTrait;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia;

class ProductApplication extends Model implements HasMedia
{
    use ProcessMediaTrait;
    use AutoProcessMediaTrait;
    use HasMediaCollectionsTrait;
    use HasMediaThumbsTrait;

    protected $fillable = [
        'en_title',
        'en_description',
        'jp_title',
        'jp_description',

    ];


    protected $dates = [

    ];
    public $timestamps = false;

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/product-applications/'.$this->getKey());
    }

    public function registerMediaCollections(): void {
        $this->addMediaCollection('image')->accepts('image/*');
    }

    public function registerMediaConversions(Media $media = null): void {
        $this->autoRegisterThumb200();
        $this->addMediaConversion('thumb')
              ->width(350)
              ->height(350);
    }
}
