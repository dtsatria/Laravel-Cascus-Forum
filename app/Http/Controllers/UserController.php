<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use App\Models\User;



class userController extends Controller
{
    public function index(){
        $kategori = Kategori::all();
    $users = User::with('pertanyaan')->get();
    return view('user.index', compact('kategori', 'users'));
    }

     
}


