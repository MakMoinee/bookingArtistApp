<?php

namespace App\Http\Controllers;

use App\Models\Iusers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put("users", $user);
            $uType = $user['userType'];

            if ($uType == 3) {
                return redirect("/artistdash");
            }

            if ($uType == 2) {
                return redirect("/hostdash");
            }

            if ($uType == 0) {
                return redirect("/admin");
            }
        } else {
            $queryResult = DB::table('iusers')->where(['userType' => 0])->get();
            $userCount = count($queryResult);
            if ($userCount == 0) {
                $newUser = new Iusers();
                $newUser->email = env('SUPER_USER', 'superadmin@demo.com');
                $newUser->password = Hash::make(env('SUPER_PASS', 'superadmin'));
                $newUser->userType = 0;
                $newUser->save();
            }
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
                $queryResult3 = DB::table('band_profiles')->where([['verified', '=', 1]])->get();
                $bands = json_decode($queryResult3, true);
                return view('welcome', [
                    'bands' => $bands
                ]);
            }
        }
    }
}
