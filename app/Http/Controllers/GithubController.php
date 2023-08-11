<?php

namespace App\Http\Controllers;

use App\Functions\Static\Curl;
use App\Http\Requests\Github\CreateRepositoryRequest;
use App\Http\Requests\Github\UpdateRepositoryRequest;
use App\Http\Resources\Github\GetDetailRepository;
use App\Http\Resources\Github\GetRepositoryList;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
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
     * store value in to github repository api.
     * 
     * @return RedirectResponse
     */
    public function createGithubRepository(CreateRepositoryRequest $request): RedirectResponse
    {
        $request_data = $request->validated();
        $request_data['name'] = strtolower(str_replace(' ', '-', $request_data['name']));
        $request_data['private'] = $request_data['private'] == 0 ? false : true;
        $request_data['homepage'] = 'https://github.com';

        $http_post = Curl::post('https://api.github.com/user/repos', $request_data);

        return redirect()->route('panel.github.index')->with(['data' => $http_post]);

    }

    /**
     * display github repository edit view.
     * 
     * @param $repo_name
     * @return View
     */
    public function githubEditPage($repo_name): View
    {
        $url = 'https://api.github.com/repos/'.config('github.credential.owner_name').'/'.$repo_name;
        $http_request = Curl::get($url);

        $resource = (new GetDetailRepository())->toArray($http_request);

        return view('panel.github.edit', [
            'repository' => $resource,
        ]);
    }

    /**
     * display github repository detail view.
     * 
     * @param $repo_name
     * @return View
     */
    public function githubDetailPage($repo_name): View
    {
        $url = 'https://api.github.com/repos/'.config('github.credential.owner_name').'/'.$repo_name;
        $http_request = Curl::get($url);

        $resource = (new GetDetailRepository())->toArray($http_request);

        return view('panel.github.detail', [
            'repository' => $resource,
        ]);
    }

    /**
     * update records in github api.
     * 
     * @param $repo_name
     * 
     */
    public function updateGithubRepository(UpdateRepositoryRequest $request, $repo_name)
    {
        $request_data = $request->validated();
        $request_data['name'] = strtolower(str_replace(' ', '-', $request_data['name']));
        $request_data['private'] = $request_data['private'] == 0 ? false : true;

        $url = 'https://api.github.com/repos/'.config('github.credential.owner_name').'/'.$repo_name;
        $http_patch = Curl::patch($url, $request_data);

        return redirect()->route('panel.github.index')->with(['data' => $http_patch]);
    }
}
