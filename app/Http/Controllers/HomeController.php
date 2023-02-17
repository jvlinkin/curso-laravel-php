<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(){

        $users = User::all();

        return view('home/index', [
            'users' => $users
        ]);
    }

    public function show($id){
        $user = User::find($id);

        return view('home.show', [
            'user' => $user
        ]);
    }
}
