<?php

namespace App\Functions\Static;

use App\Functions\Helpers;

class Github
{
    /**
     * make static for getRepositoryAuthor func.
     *
     * @param string $full_name
     */
    public static function getRepositoryAuthor(string $full_name)
    {
        return (new Helpers())->getRepositoryAuthor($full_name);
    }
}
