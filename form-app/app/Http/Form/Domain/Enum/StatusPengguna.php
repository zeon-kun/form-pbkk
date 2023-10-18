<?php

namespace App\Http\Form\Domain\Enum;

enum StatusPengguna: string
{
    case Online = 'online';
    case Offline = 'offline';
    case Deleted = 'deleted';
}
