<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = "sliders";

    public function setSaleAttribute($value)
    {
        $this->attributes['price'] = floatval($this->convertStringToDouble($value));
    }

    public function getSaleAttribute($value)
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
