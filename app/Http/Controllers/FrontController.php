<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //

    public function contact()
    {

        $title = "Contact";
        $subTitle = "This is sub title";
        return view('pages.contact', compact('title', 'subTitle'));
    }
    public function about(Request $request)
    {

        $users = User::get();

        $title = $request->name ?? 'About';
        return view('pages.about', [
            'name' => $title,
            'users' => $users
        ]);
    }
}
