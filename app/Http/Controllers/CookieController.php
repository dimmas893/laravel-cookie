<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CookieController extends Controller
{
    public function addBrowserCookieVersi1()
    {
        Cookie::queue('user-cookie', 'ini cookie', 1);

        return response()->json(['Cookie has been successfully set.']);
    }
    public function addBrowserCookieVersi2(Request $request)
    {
        return response()->json(['Cookie has been successfully set.'])->cookie('user-cookie-two', 'Cookie demo two', 120);
    }
    public function getBrowserCookie()
    {
        $cookieRes = Cookie::get('user-cookie');
        dd($cookieRes);
    }
    public function deleteBrowserCookie()
    {
        Cookie::forget('user-cookie');

        dd('Cookie has been successfully deleted.');
    }
}
