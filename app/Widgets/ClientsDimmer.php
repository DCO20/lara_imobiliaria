<?php

namespace App\Widgets;

use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Str;
use TCG\Voyager\Widgets\BaseDimmer;

class ClientsDimmer extends BaseDimmer
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
        $count = Client::count();
        $string = trans_choice('Clientes', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-people',
            'title'  => "{$count} {$string}",
            'text'   => "Você possui {$count} clientes no sistema.",
            'button' => [
                'text' => 'Visualizar',
                'link' => route('voyager.clients.index'),
            ],
            'image' => asset('storage/widgets/cliente.jpg'),
        ]));
    }

    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', Client::first());
    }
}
