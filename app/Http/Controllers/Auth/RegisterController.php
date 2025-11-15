<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use function PHPUnit\Framework\returnArgument;

class RegisterController extends Controller
{
    public function show() {
        return view('auth.register');
    }
    public function store(Request $request) {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        User::create([
            'name'=>$request->nome,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'role' => 'user'
        ]);
        return redirect('/login')->with('sucess', 'Cadastro realizado com sucesso');
    }
}
