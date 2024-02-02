<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $role = Auth::user()->role->role;
            if ($role == 'admin') {
                return redirect('admin.dashboard');
            } else {
                return redirect('books');
            }
        }
    }
}
