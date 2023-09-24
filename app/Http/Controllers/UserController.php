<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserRequest;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('library.view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.edit', ['users' => $user]);
    }


    /**
 * Update the specified resource in storage.
 *
 * @param  \App\Http\Requests\UpdateuserRequest  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, string $id)
 {
    $users = User::find($id);
    $users->name = $request->name;
    $users->age = $request->age;
    $users->gender = $request->gender;
    $users->email = $request->email;
    $users->phone = $request->phone;
    $users->address = $request->address;
    $users->save();
    return view('admin.edit');
 }

}


