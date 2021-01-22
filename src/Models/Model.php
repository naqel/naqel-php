<?php

namespace Naqel\Models;

use Closure;

class Model
{
    public function __construct(Closure $callback = null)
    {
        if (is_callable($callback)) {
            $callback($this);
        }
    }
}
