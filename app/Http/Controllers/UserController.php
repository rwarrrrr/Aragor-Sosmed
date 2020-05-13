<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	public function profil()
    {
        return view('user');
    }

    public function update (Request $request, $id) {
        // $rule = [
        //     'name'=>'required',
        //     'email'=>'required',
        //     'adress'=>'required',
        //     'city'=>'required',
        //     'country'=>'required',
        //     'postal_code'=>'required|numeric',
        //     'about'=>'required'
        // ];
        // $this->validate($request,$rule);
        $input = $request->all();
        $user = \App\User::find($id);

        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->adress = $input['adress'];
        $user->city = $input['city'];
        $user->country = $input['country'];
        $user->postal_code = $input['postal_code'];
        $user->about = $input['about'];

        
        $status = $user->update();

        if ($status) {
            
            return redirect('/user')->with('success');
        } else {
            
            return redirect('/user')->wirh('Error');
        }
    }
}
