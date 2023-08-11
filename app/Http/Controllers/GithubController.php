<?php

namespace App\Http\Controllers;

use App\Functions\Static\Curl;
use App\Http\Resources\Github\GetDetailRepository;
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

    /**
     * display github repository create view.
     * 
     * @return View
     */
    public function githubCreatePage(): View
    {
        return view('panel.github.create');
    }

    /**
     * display github repository edit view.
     * 
     * @param $repo_name
     * @return View
     */
    public function githubEditPage($repo_name): View
    {
        return view('panel.github.edit');
    }

    /**
     * display github repository detail view.
     * 
     * @param $repo_name
     * @return View
     */
    public function githubDetailPage(Request $request, $repo_name): View
    {
        $http_request = [];
        $url = 'https://api.github.com/repos/'.config('github.credential.owner_name').'/'.$repo_name;
        if ($request->page) {
            $http_request = Curl::get($url, [
                'page' => $request->page,
            ]);

        } else {
            $http_request = Curl::get($url);
        }

        $resource = (new GetDetailRepository())->toArray($http_request);

        return view('panel.github.detail', [
            'repository' => $resource,
        ]);
    }
}
