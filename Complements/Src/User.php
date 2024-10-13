<?php

declare(strict_types=1);

namespace Complements\Src;

use Carbon\Carbon;

final class User extends Model
{
    public function getAgeAttribute()
    {
       $carbon = Carbon::createFromFormat('Y-m-d', $this->birthdate);

         return $carbon->age;
    }

}