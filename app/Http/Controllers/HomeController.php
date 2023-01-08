<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $cancel = $request->query('cancel');
        if ($cancel) {
            $tmpUser = session()->pull('tmpUser');
            if ($tmpUser) {
                $uid = $tmpUser[0];
                $affectedRows = DB::table('iusers')->where(['userID' => $uid])
                    ->delete();
                $affectedRows2 = DB::table('services')->where(['userID' => $uid])
                    ->delete();
                $affectedRows3 = DB::table('band_profiles')->where(['userID' => $uid])
                    ->delete();
            }
            $tmpProfile = session()->pull('tmpProfile');
            if ($tmpProfile) {
                $uid = $tmpUser[0];
                $affectedRows = DB::table('profiles')->where(['userID' => $uid])
                    ->delete();
            }
            session()->forget('isFromStep1');
            session()->forget('AS');
            session()->forget('tmpProfile');
            session()->forget('tmpUser');
            return redirect('/');
        }

        $isFromStep1 = session()->pull('isFromStep1');
        $isFromStep2 = session()->pull('isFromStep2');
        if ($isFromStep1) {
            session()->put('isFromStep1', true);
            $AS = session()->pull('AS');
            session()->put('AS', $AS);

            return redirect('/signup?as=' . $AS . '&step=2');
        }

        if ($isFromStep2) {
            session()->put('isFromStep2', true);
            $AS = session()->pull('AS');
            session()->put('AS', $AS);

            return redirect('/paymentmethod?as=' . $AS . '&step=3');
        }

        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put('users', $user);
        } else {
            return view('welcome');
        }
    }
}
