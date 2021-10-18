<?php

namespace App\Http\Middleware;

use Closure;

class CheckForAjaxRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(! $this->requestedWithAjax($request) ) {
            return redirect('/')->with('warning', 'Recurso indisponível');
        }

        return $next($request);
    }

    private function requestedWithAjax($request)
    {
        $headers = $request->header();

        return isset($headers['x-requested-with']) && in_array('XMLHttpRequest', $headers['x-requested-with']);
    }
}
