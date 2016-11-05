<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Auth;
use View;

class ProfileController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        return View::make('backend.profile.index');
    }

}
