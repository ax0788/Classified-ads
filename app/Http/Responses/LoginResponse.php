<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use Laravel\Fortify\Fortify;

class LoginResponse implements LoginResponseContract
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse($request)
    {
        // $home = auth()->user()->role == 'admin' ? 'admin/dashboard' : '/';

        $home = auth()->user()->role == 'admin' ? '/admin-dashboard' : '/home';

        return redirect()->intended($home);
    }
}