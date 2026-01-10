<?php

namespace App\Domain\Enums;

enum ListingCondition : string
{
    case New = 'new';
    case Used = 'used';
    case Refurbished = 'refurbished';
    case LikeNew = 'like_new';
}
