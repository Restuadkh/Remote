<?php

namespace App\Http\Middleware;

use Closure;

class Status
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
        $user = User::where('email', $request->email)->first();
        if($user->status == '0'){
            return redirect('admin/Dashboard');
        }if($user->status == '5'){
            return redirect('Home/Dashboard');
        }
        return $next($request);
    }
}
