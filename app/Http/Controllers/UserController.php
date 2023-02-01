<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::select('id', 'email', 'name','is_admin')->get();

        return view('users.list')->with([
            'users' => $users
        ]);
    }    
    public function users() {
        $userCount = User::count();
        return view('/adminHome', compact('userCount'));
  }
}