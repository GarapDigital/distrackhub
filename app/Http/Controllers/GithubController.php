<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class GithubController extends Controller
{
    /**
     * display github index view
     *
     * @return View
     */
    public function githubIndexPage(): View
    {
        return view('panel.github.index');
    }
}
