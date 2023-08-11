<?php

namespace App\Functions\Static;

use App\Functions\Helpers;

class Github
{
    public static function getRepositoryAuthor($full_name)
    {
        return (new Helpers())->getRepositoryAuthor($full_name);
    }
}