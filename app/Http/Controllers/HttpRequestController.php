<?php

namespace App\Http\Controllers;

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
        return view('panel.http-request.index');
    }
}
