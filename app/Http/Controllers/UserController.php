<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $user = User::all();
        return $user;
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
        $data = $request->validate([
            'name'=>'required|string',
            'email'=>'required|string|email|unique:users',
        ]);

        $user = User::findOrFail($request->id);
        $user->name = $data['name'];
        $user->email = $data['email'];

        $user->save();
        return $user;

    }

}
