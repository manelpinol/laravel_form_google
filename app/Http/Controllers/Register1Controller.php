<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use SheetDB\SheetDB;
class Register1Controller extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'name'=> 'required|max:255',
            'username'=> 'required|min:3|max:255|unique:users,username',
            'email'=> 'required|email|max:255|unique:users,email',
            'password'=> 'required|min:7|max:255',
        ]);
        $attributes['password'] = bcrypt($attributes['password']);
        User::create($attributes);
        $sheetdb = new SheetDB('kwfuj4x6v2764');
        $sheetdb->create([
            [ 'name' => $attributes['name'], 'username' => $attributes['username'], 'email' => $attributes['email'], 'password' => $attributes['password']]]);
        return redirect('/')->with('success','Your account has been created.');
    }
}
