<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\DB;
use Closure;

class CheckPermissionAcl
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
        // 1. Lay user login vao he thong
        // $roleOfUser = DB::table('users');
            // ->join('role_user', 'users.id', '=', 'role_user.user_id')
            // ->join('roles', 'role_user.role_id', '=', 'roles.id')
            // ->where('users.id',auth()->id())
            // ->select('roles.*')
            // ->get()->pluck('id')->toArray();

        // return $next($request);
       
        
    }
}
