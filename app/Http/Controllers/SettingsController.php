<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SettingsController extends Controller
{
    public function index()
    {
        return view('admin.settings.settings')->with('settings', Setting::first());
    }

    public function update(Request $request)
    {
        $settings = Setting::first();

        $settings->site_name = $request->site_name;
        $settings->address = $request->address;
        $settings->contact_number = $request->contact_number;
        $settings->contact_email = $request->contact_email;

        $settings->save();

        Session::flash('success', 'Site settings updated');

        return redirect()->back();
    }
}
