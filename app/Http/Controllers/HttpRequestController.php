<?php

namespace App\Http\Controllers;

use App\Models\HttpRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HttpRequestController extends Controller
{
    /**
     * display list of http request resource page
     *
     * @return View
     */
    public function HttpRequestPage(): View
    {
        $http_requests = HttpRequest::latest()->paginate(10)->toArray();
        // dd($http_requests);

        return view('panel.http-request.index', compact('http_requests'));
    }
}
