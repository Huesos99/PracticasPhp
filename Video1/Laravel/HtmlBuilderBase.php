<?php

declare(strict_types=1);

namespace Laravel;

class HtmlBuilderBase
{
    use Macroable;
    public function hr()
    {
        return '<hr>';
    }

}