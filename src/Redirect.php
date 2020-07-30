<?php

namespace Haythem\Redirect;

use Laravel\Nova\Fields\Field;

class Redirect extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'redirect';

    public function url($url = '')
    {
        return $this->withMeta(['url' => $url]);
    }
    public function newtab($newtab = false)
    {
        return $this->withMeta(['newtab' => $newtab]);
    }
}
