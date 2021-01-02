<?php

namespace App\Widgets;

use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Str;
use TCG\Voyager\Widgets\BaseDimmer;

class CompaniesDimmer extends BaseDimmer
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
        $count = Company::count();
        $string = trans_choice('Empresas', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-company',
            'title'  => "{$count} {$string}",
            'text'   => "Você possui {$count} empresas no sistema.",
            'button' => [
                'text' => 'Visualizar',
                'link' => route('voyager.companies.index'),
            ],
            'image' => asset('storage/widgets/empresa.jpg'),
        ]));
    }

    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', Company::first());
    }
}

