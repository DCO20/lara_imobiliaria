<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Property extends Model
{
    protected $fillable = [
        'client_id',
        'sale',
        'rent',
        'category',
        'type',
        'sale_price',
        'rent_price',
        'tribute',
        'condominium',
        'description',
        'bedrooms',
        'suites',
        'bathrooms',
        'garage',
        'garage_covered',
        'area_total',
        'area_util',
        'zipcode',
        'street',
        'number',
        'complement',
        'neighborhood',
        'state',
        'city',
        'air_conditioning',
        'bar',
        'library',
        'barbecue_grill',
        'american_kitchen',
        'fitted_kitchen',
        'pantry',
        'edicule',
        'office',
        'bathtub',
        'fireplace',
        'lavatory',
        'furnished',
        'pool',
        'steam_room',
        'view_of_the_sea',
        'status',
        'title',
        'slug',
        'headline',
        'experience'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function setSalePriceAttribute($value)
    {
        if(empty($value)){
            $this->attributes['price'] = null;
        } else {
            $this->attributes['price'] = floatval($this->convertStringToDouble($value));
        }
    }

    public function getSalePriceAttribute($value)
    {
        return number_format($value, 2, ',', '.');
    }

    public function setTributeAttribute($value)
    {
        if(empty($value)){
            $this->attributes['tribute'] = null;
        } else {
            $this->attributes['tribute'] = floatval($this->convertStringToDouble($value));
        }
    }

    public function getTributeAttribute($value)
    {
        return number_format($value, 2, ',', '.');
    }

    private function convertStringToDouble($param)
    {
        if(empty($param)){
            return null;
        }

        return str_replace(',', '.', str_replace('.', '', $param));
    }
}
