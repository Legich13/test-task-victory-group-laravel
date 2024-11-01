<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $currentTheme = session('theme', 'classic');
        return view("themes.$currentTheme.home", ['theme' => $currentTheme]);
    }

    public function contacts()
    {
        $currentTheme = session('theme', 'classic');
        return view("themes.$currentTheme.contacts", ['theme' => $currentTheme]);
    }

    public function setTheme(Request $request)
    {
        $request->validate(['theme' => 'required|in:classic,cuba']);
        session(['theme' => $request->theme]);
        return redirect()->back();
    }
}
