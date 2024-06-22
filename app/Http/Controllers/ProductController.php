<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function logoutAdmin() {
        Auth::logout();
        session()->flush();
        return redirect('/admin/login');
    }
}
