<?php

namespace ToxaGeek\LaravelWgApi;

use Illuminate\Support\Facades\Config;

class WgApi
{
    private $config;

    private $app_id;

    private $protocol;

    private $platform = 'pc';

    private $sub = 'api';

    private $domain = 'worldoftanks';

    private $region = 'ru';

    private $game_slug = 'wgn';

    public function __construct()
    {
        $this->config = json_decode(json_encode(Config::get('wg_api.url')), false);
        $this->app_id = Config::get('wg_api.application_id');
        $this->protocol = $this->config->protocol;
    }

    public function game(string $value)
    {
        $this->game_slug = $value;
        return $this;
    }

    public function platform(string $value)
    {
        $this->platform = $value;
        //$this->sub = $this->config->sub->$value;
        //$this->game(key($this->config->domains->console));
        return $this;
    }

    public function region(string $value)
    {
        //if (in_array($value, $this->config->domains->))
        return $this;
    }

    public function redirect()
    {
        //$url = $this->config->protocol.(new static)->game();
        $url = $this->protocol;
        $url .= $this->sub;
        $url .= '.' . $this->domain;
        $url .= '.' . $this->region;
        $url .= '/' . $this->game_slug;
        return dd($this);
    }
}
