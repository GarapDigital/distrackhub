<?php

namespace App\Functions;

class Helpers
{
    public function getRepositoryAuthor(string $full_repo_name)
    {
        return explode('/', $full_repo_name)[0];
    }
}