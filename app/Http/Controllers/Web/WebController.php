<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\Slider;
use Illuminate\Http\Request;

class WebController extends Controller
{
    private $repository;

    public function __construct(Property $property)
    {
        $this->repository = $property;

    }
    public function home()
    {
        $sliders = Slider::where('status', 1)->orderBy('sorder', 'Asc')->get();
        $propertyForSale = $this->repository->where('sale', 1)->orderBy('id', 'Asc')->get();
        $propertyForRent = $this->repository->where('rent', 1)->orderBy('id', 'Desc')->paginate(1);
        return view('web.pages.home', compact( 'sliders', 'propertyForSale','propertyForRent'));
    }

    public function about()
    {
        return view('web.pages.about.index');
    }

    public function all(){
        $propertys = $this->repository->where('status', 1)->orderBy('Id', 'Desc')->paginate(3);
        return view('web.pages.alls.index', compact('propertys'));
    }

    public function contact()
    {
        return view('web.pages.contact.index');
    }
    
    public function search(Request $request)
    {
        $filters = $request->only('filter');

        $propertys = $this->repository
                            ->where(function($query) use ($request) {
                                if ($request->filter) {
                                    $query->orWhere('description', 'LIKE', "%{$request->filter}%");
                                    $query->orWhere('name', $request->filter);
                                }
                            })
                            ->latest()
                            ->paginate();

        return view('web.pages.alls.index', compact('propertys', 'filters'));
    }

}
