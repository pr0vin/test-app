<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    //

    public function settings()
    {
        return view('settings.index');
    }

    public function update(Request $request)
    {


        $vaalidated = $request->validate([
            'site_name' => 'required|string|max:255',
            'site_email' => 'nullable|email',
            'site_phone' => 'nullable|string|max:50',
            'site_address' => 'nullable|string',
            'facebook_url' => 'nullable|url',

        ]);


        settings()->set($vaalidated);
        if ($request->hasFile('logo')) {
            if (settings('logo')) {
                Storage::delete(settings('logo'));
            }
            $path = Storage::putFile('site-logo', $request->file('site_logo'));
            settings()->set(['logo' => $path]);
        }

        return redirect()->route('settings')->with('success', 'Profile updated successfully');
    }
}
