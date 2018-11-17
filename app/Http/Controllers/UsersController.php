<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index');
    }

    public function sindex()
    {
        return view('admin.user.sindex');
    }

    public function tindex()
    {
        return view('admin.user.tindex');
    }
}
