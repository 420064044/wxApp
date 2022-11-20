<?php

declare(strict_types=1);

namespace app\middleware;

class Check
{
    public function handle($request, \Closure $next)
    {
        if (empty(session('admin_conusers')) && !preg_match('/login/', $request->pathinfo())) {

            return redirect((string) url('/login/'));

        }

        return $next($request);
    }
}