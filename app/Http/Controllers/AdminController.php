<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard() {
        return view('pages.admin.dashboard.index');
    }

    public function users() {
        return view('pages.admin.users.index');
    }
}
