<?php

namespace App\Widgets;

use App\Models\Contract;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Str;
use TCG\Voyager\Widgets\BaseDimmer;

class ContractsDimmer extends BaseDimmer
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
        $count = Contract::count();
        $string = trans_choice('Contratos', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-documentation',
            'title'  => "{$count} {$string}",
            'text'   => "Você possui {$count} contratos no sistema.",
            'button' => [
                'text' => 'Visualizar',
                'link' => route('voyager.contracts.index'),
            ],
            'image' => asset('storage/widgets/contrato.jpg'),
        ]));
    }

    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', Contract::first());
    }
}


