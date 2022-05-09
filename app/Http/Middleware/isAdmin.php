<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Authentication;
use Illuminate\Http\Request;

class isAdmin
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
        $id = $request->session()->get('user_id');
        $user = Authentication::find($id);
        if(!$request->session()->get('user_id'))
            return redirect('/Login');
      else{
        if($user->role == "Admin"){

            return $next($request);
        }
        else {
            abort(403);
        }
      }
      
    }
}
