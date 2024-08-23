<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckMemberRole
{
    public function handle(Request $request, Closure $next)
    {
        if (backpack_user() && backpack_user()->hasRole('Member')) {
            $allowedRoutes = [
                config('backpack.base.route_prefix') . '/dashboard',
                config('backpack.base.route_prefix') . '/logout',
            ];

            if (!in_array($request->path(), $allowedRoutes)) {
                return redirect(backpack_url('dashboard'));
            }
        }

        return $next($request);
    }
}
