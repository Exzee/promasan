<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        // return request()->all();
        $validateData = request()->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required|min:5|max:255'
        ]);

        // dd($validateData);
        $validateData['password'] = Hash::make($validateData['password']);
        User::create($validateData);

        // $request->session()->flash('success','Registration Successfull! Please Login');
        return redirect('/login')->with('success','Registration Successfull! Please Login');
    }
}
