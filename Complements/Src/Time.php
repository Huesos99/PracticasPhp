<?php

declare(strict_types=1);

namespace Complements\Src;

final class Time
{
    protected $time = null;

    public function __construct( $time = null )
    {
        $this->time = $time ?: time();
    }

    public function __toString(): string
    {
        return date('d/m/Y H:i:s', $this->time);
    }
     public function tomorrow(): Time
     {
         return new Time($this->time + 24*60*60);

    }
     public function yesterday(): Time
     {
         return new Time($this->time - 24*60*60);
     }

}

$time = new Time();

    echo "hoy es $time \n";
    $tomorrow = $time->tomorrow();
    echo "mañana sera {$time->tomorrow()}\n";
    echo "pasado mañana sera {$tomorrow->tomorrow()}\n";
    echo "ayer fue {$time->yesterday()}";