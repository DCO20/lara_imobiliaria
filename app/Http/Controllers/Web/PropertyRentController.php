<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyRentController extends Controller
{
    private $repository;

    public function __construct(Property $property)
    {
        $this->repository = $property;

    }

    public function index()
    {
        $propertyForRents = $this->repository->where('rent', 1)->where('status', 1)->orderBy('id', 'Asc')->paginate(12);
        $propertyForRentsRecent = $this->repository->where('rent', 1)->where('status', 1)->orderBy('id', 'Desc')->paginate(5);
        return view('web.pages.rents.property_rent', compact('propertyForRents', 'propertyForRentsRecent'));
    }

    public function detailsRent($slug)
    {
        $propertyRentsRecent = $this->repository->where('rent', 1)->where('status', 1)->orderBy('id', 'Desc')->paginate(5);
        $propertyForRentsDetails = $this->repository->where('slug', $slug)->first();
        return view('web.pages.rents.property_rent_details', compact('propertyForRentsDetails', 'propertyRentsRecent'));
    }
}
