<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $users = User::all();
        return view('admin.users.index',['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
        ]);
        if (DB::table('users')->where('email', $request->email)->count() == 0 || $user->email == $request->email) {
            $user->update($request->all());
            if($request->role == 'Administrator') {
                $user->admin = 1;
            } else {
                $user->admin = 0;
            }
            $user->save();
            session()->flash('flash_message', 'Your User has edited ! ');
            Session()->flash('alert-class', 'alert-success'); 
        }else {
            session()->flash('flash_message', 'User name has been existed ! ');
            Session()->flash('alert-class', 'alert-danger'); 
        }
        return redirect('/admin/users/' . $user->id);
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
        $user->delete();
        session()->flash('flash_message', 'Your User has been deleted ! ');
        return redirect('/admin/users');
    }
}
