<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetail;

class UserController extends Controller
{
    //

    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function manage(User $user)
    {

        $user->load('details');

        return view('users.create', compact('user'));
    }

    public function storeProfile(Request $request, User $user)
    {

        if ($user->details) {
            $user->details->update([
                'user_id' => $user->id,
                'phone' => $request->phone,
                'dob' => $request->dob,
                'gender' => $request->gender,
                'address' => $request->address
            ]);
        } else {

            UserDetail::create([
                'user_id' => $user->id,
                'phone' => $request->phone,
                'dob' => $request->dob,
                'gender' => $request->gender,
                'address' => $request->address
            ]);
        }


        return redirect()->route('users.show', $user);
    }
}
