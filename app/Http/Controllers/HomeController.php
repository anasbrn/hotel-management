<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __invoke()
    {
        $role = Auth::user()->role;
        dd($role);
        $checkrole = explode(',', $role);
        if (in_array('admin', $checkrole)) {
            return redirect('/dashboard');
        } else {
            return redirect('/');
        }
    }
}