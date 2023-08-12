<?php

namespace App\Http\Controllers;

use App\Models\HttpRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardPage(): View
    {
        $http_requests = HttpRequest::latest()->limit(3)->get();

        return view('panel.dashboard', compact('http_requests'));
    }
}
