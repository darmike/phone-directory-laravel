<?php

namespace App\Http\Controllers;

use App\Models\PhoneBook;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index()
    {
//        $users = PhoneBook::all();
        $users = PhoneBook::orderBy('name')->paginate(20);
        return view('home', compact('users'));
    }

    public function search(Request $request)
    {
        $s = $request->s;

        $users = PhoneBook::where('name', 'LIKE', "%{$s}%")->orderBy('name')->paginate(10);
        return view('home', compact('users'));


    }
}
