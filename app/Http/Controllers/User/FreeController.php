<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FreeController extends Controller
{
    //プロフィール
    public function add()
    {
        return view('user.profile.create');
    }
}
