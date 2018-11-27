<?php namespace Travo\Slack\Facades;


use Illuminate\Support\Facades\Facade;

class Slack extends Facade {

    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Slack';
    }

}