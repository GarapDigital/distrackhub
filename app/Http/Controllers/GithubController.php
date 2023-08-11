<?php

namespace App\Http\Controllers;

use App\Functions\Static\Curl;
use App\Http\Resources\Github\GetRepositoryList;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class GithubController extends Controller
{
    /**
     * display github index view
     *
     * @return View
     */
    public function githubIndexPage(Request $request): View
    {
        $http_request = [];
        if ($request->page) {
            $http_request = Curl::get('https://api.github.com/user/repos', [
                'page' => $request->page,
            ]);

        } else {
            $http_request = Curl::get('https://api.github.com/user/repos');
        }

        $resources = (new GetRepositoryList())->toArray($http_request);

        return view('panel.github.index', [
            'repositories' => $resources,
        ]);
    }
}
