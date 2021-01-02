<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'image',
        'email',
        'password',
        'genre',
        'document',
        'document_secondary',
        'date_of_birth',
        'place_of_birth',
        'civil_status',
        'occupation',
        'income',
        'company_work',
        'zipcode',
        'street',
        'number',
        'complement',
        'neighborhood',
        'state',
        'city',
        'cell',
        'spouse_name',
        'spouse_document',
        'spouse_document_secondary',
        'spouse_date_of_birth',
        'spouse_occupation',
        'spouse_income',
        'spouse_company_work',
        'lessor',
        'lessee',
    ];

    public function companies()
    {
        return $this->hasMany(Company::class);
    }

    public function properties()
    {
        return $this->hasMany(Property::class);
    }

    public function setDateOfBirthAttribute($value)
    {
        $this->attributes['date_of_birth'] = $this->convertStringToDate($value);
    }

    public function getDateOfBirthAttribute($value)
    {
        return date('d/m/Y', strtotime($value));
    }

    public function setIncomeAttribute($value)
    {
        $this->attributes['income'] = floatval($this->convertStringToDouble($value));
    }

    public function getIncomeAttribute($value)
    {
        return number_format($value, 2, ',', '.');
    }

    private function convertStringToDate(?string $param)
    {
        if(empty($param)){
            return null;
        }

        list($day, $month, $year) = explode('/', $param);
        return (new \DateTime($year . '-' . $month . '-' . $day))->format('Y-m-d');
    }

    private function convertStringToDouble(?string $param)
    {
        if(empty($param)){
            return null;
        }

        return str_replace(',', '.', str_replace('.', '', $param));
    }
}
