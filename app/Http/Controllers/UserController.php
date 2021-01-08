<?php

namespace App\Http\Controllers;

use App\PermissionGroup;
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
        
        return view('/pages/user-add', [
            'groups' => PermissionGroup::all()
        ]);
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

        $user = User::create($request->merge([
            'password' => bcrypt($request->password),
        ])->all());

        $user->syncPermissions($request->get('permissions'));

        return redirect('usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('/pages/user-view', [
            'user' => User::find($id),
            'groups' => PermissionGroup::all(),
            'groups' => PermissionGroup::orderBy('name')->get()
         ]);
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
            'groups' => PermissionGroup::orderBy('name')->get()
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
            $user->syncPermissions($request->get('permissions'));
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function myaccount($id)
    {
        return view('/pages/myaccount', [
            'user' => User::find($id),
        ]);
        return redirect('minhaconta');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function myaccountupdate(Request $request, $id)
    {
        $user = User::find($id);
        if(isset($user)) {
            $user -> name   = $request->input('name');
            $user -> phone  = $request->input('phone');
            $user -> cpf    = $request->input('cpf');
            $user -> office = $request->input('office');
            $user -> status = $request->input('status');
            $user -> email  = $request->input('email');
            $user -> save();
        }
        return redirect('minhaconta');
    }
}
