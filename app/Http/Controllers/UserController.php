<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/pages/users', [
            'users' => User::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/pages/user-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedUser = $request->validate([
            'email' => ['required', 'email', 'unique:users',],
        ]);

        User::create($request->merge([
            'password' => bcrypt($request->password),
        ])->all());
        return view('/pages/usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('/pages/user-edit', [
            'user' => User::find($id),
        ]);
        return redirect('usuarios');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if(isset($user)) {
            $user -> name   = $request->input('name');
            $user -> phone  = $request->input('phone');
            $user -> cpf    = $request->input('cpf');
            $user -> office = $request->input('office');
            $user -> status = $request->input('status');
            $user -> email  = $request->input('email');
            $user -> image  = $request->input('image');
            $user -> save();
        }
        return redirect('usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if (isset($user)) {
            $user->delete();
        }
        return redirect('usuarios');
    }
}
