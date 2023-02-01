<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function index()
    {
        $role = Auth::user()->is_admin;
        if ($role == 1){
            return redirect('admin/home');
        }
        else{
            return redirect('/parameters');
        }
    }
}
