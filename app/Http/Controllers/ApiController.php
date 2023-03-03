<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function create(Request $request) {
        $user = new User();

        $user->name = $request->input('name');

        $user->save();
        return response()->json($user);
    }
}
