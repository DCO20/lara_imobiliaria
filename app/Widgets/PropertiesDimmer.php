<?php

namespace App\Widgets;

use App\Models\Property;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Str;
use TCG\Voyager\Widgets\BaseDimmer;

class PropertiesDimmer extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Property::count();
        $string = trans_choice('Imóveis', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-home',
            'title'  => "{$count} {$string}",
            'text'   => "Você possui {$count} imóveis no sistema.",
            'button' => [
                'text' => 'Visualizar',
                'link' => route('voyager.properties.index'),
            ],
            'image' => asset('storage/widgets/1.jpg'),
        ]));
    }

    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', Property::first());
    }
}
