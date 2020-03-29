<?php

namespace Pravodev\KawalCoronaLaravel;

use Illuminate\Support\Facades\Cache;
use Pravodev\KawalCorona\KawalCorona as BaseClass;

class KawalCorona extends BaseClass
{
    public function __call($name, $arguments)
    {
        $get_type = strtolower(str_replace('get', '', $name));
        $data = $this->getContent($get_type);
        $remember = config('kawalcorona.remember');

        return Cache::remember('kawalcorona.'.$get_type, $remember, function () use ($get_type) {
            $data = $this->getContent($get_type);

            return is_array($data) ? collect($data) : $data;
        });
    }
}
