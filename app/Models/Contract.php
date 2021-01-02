<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable = [
        'sale',
        'rent',
        'owner',
        'owner_spouse',
        'owner_company',
        'acquirer',
        'acquirer_spouse',
        'acquirer_company',
        'property',
        'sale_price',
        'rent_price',
        'price',
        'tribute',
        'condominium',
        'due_date',
        'deadline',
        'start_at',
        'status'
    ];

    public function ownerObject()
    {
        return $this->hasOne(Client::class);
    }

    public function ownerCompanyObject()
    {
        return $this->hasOne(Company::class);
    }

    public function propertyObject()
    {
        return $this->hasOne(Property::class);
    }

    public function acquirerObject()
    {
        return $this->hasOne(Client::class);
    }

    public function acquirerCompanyObject()
    {
        return $this->hasOne(Company::class);
    }

    public function getPriceAttribute($value)
    {
        return number_format($value, 2, ',', '.');
    }

    public function setSalePriceAttribute($value)
    {
        if(!empty($value)){
            $this->attributes['price'] = floatval($this->convertStringToDouble($value));
        }
    }

    public function setRentPriceAttribute($value)
    {
        if(!empty($value)){
            $this->attributes['price'] = floatval($this->convertStringToDouble($value));
        }
    }

    public function getTributeAttribute($value)
    {
        return number_format($value, 2, ',', '.');
    }

    public function setTributeAttribute($value)
    {
        if(!empty($value)){
            $this->attributes['tribute'] = floatval($this->convertStringToDouble($value));
        }
    }

    public function getCondominiumAttribute($value)
    {
        return number_format($value, 2, ',', '.');
    }

    public function setCondominiumAttribute($value)
    {
        if(!empty($value)){
            $this->attributes['condominium'] = floatval($this->convertStringToDouble($value));
        }
    }

    private function convertStringToDouble($param)
    {
        if(empty($param)){
            return null;
        }

        return str_replace(',', '.', str_replace('.', '', $param));
    }
}
