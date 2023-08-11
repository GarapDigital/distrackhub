<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Jobs\TerminatingJob;
use Illuminate\Http\Response;

class TerminatingMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }

    /**
     * handle tasks after response has been sent to the browser
     *
     * @return void
     */
    public function terminate(Request $request, Response $response): void
    {
        TerminatingJob::dispatch([
            'session_id' => session()->getId(),
            'user_id' => $request->user()->id ?? null,
            'ip' => $request->ip(),
            'ajax' => $request->ajax(),
            'url' => $request->fullUrl(),
            'payload' => $request->toArray(),
            'status_code' => $response->getStatusCode()
        ]);
    }
}
