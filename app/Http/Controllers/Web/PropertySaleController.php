<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertySaleController extends Controller
{
    private $repository;

    public function __construct(Property $property)
    {
        $this->repository = $property;

    }
    
    public function index()
    {
        $propertyForSales = $this->repository->where('sale', 1)->where('status', 1)->orderBy('id', 'Asc')->paginate(6);
        $propertyForSalesRecent = $this->repository->where('sale', 1)->where('status', 1)->orderBy('id', 'Desc')->paginate(5);
        return view('web.pages.sales.property_sale', compact('propertyForSales', 'propertyForSalesRecent'));
    }

    public function detailsSale($slug)
    {
        $propertyForSalesRecent = $this->repository->where('sale', 1)->where('status', 1)->orderBy('id', 'Desc')->paginate(5);
        $propertyForSalesDetails = $this->repository->where('slug', $slug)->first();
        return view('web.pages.sales.property_sale_details', compact('propertyForSalesDetails', 'propertyForSalesRecent'));
    }
}
