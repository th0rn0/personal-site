<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;
use App\User;

use Illuminate\Support\Facades\Redirect;

class NoMoreRegistrations
{

    public function handle($request, Closure $next)
    {

        if (User::all()->count() == 0) {
            return $next($request);
        }
        return Redirect::to('/');
    }
}
