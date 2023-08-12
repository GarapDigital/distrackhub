<?php

namespace App\Functions;

class Helpers
{
    /**
     * get author name of github repositories.
     *
     * @param string $full_repo_name
     * @return string
     */
    public function getRepositoryAuthor(string $full_repo_name)
    {
        return explode('/', $full_repo_name)[0];
    }
}
