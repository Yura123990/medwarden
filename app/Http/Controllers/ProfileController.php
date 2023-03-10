<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function show()
    {
        return view('profile.show');
    }

    public function edit()
    {
        return view('profile.edit');
    }
}
