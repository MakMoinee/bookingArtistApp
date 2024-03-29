<?php

namespace App\Http\Controllers;

use App\Models\BandProfile;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put("users", $user);
            $uType = $user['userType'];
            $uid = $user['userID'];

            if ($uType == 3) {
                $queryResult = DB::table('band_profiles')->where(['userID' => $uid])->get();
                $pic = "";
                if (count($queryResult) > 0) {
                    $profiles = json_decode($queryResult, true);
                    $pic = $profiles[0]['bandPic'];
                }

                $allBands = BandProfile::all();
                return view('artist.profile', [
                    'pic' => $pic,
                    'bands' => $allBands,
                    'profiles' => count($profiles) == 0 ? [] : $profiles[0],
                    'uType' => $uType
                ]);
            }

            if ($uType == 2) {
                $queryResult = DB::table('profiles')->where(['userID' => $uid])->get();
                $pic = "";
                if (count($queryResult) > 0) {
                    $profiles = json_decode($queryResult, true);
                    $pic = $profiles[0]['userPic'];
                }

                $allBands = BandProfile::all();
                return view('host.profile', [
                    'pic' => $pic,
                    'bands' => $allBands,
                    'profiles' => count($profiles) == 0 ? [] : $profiles[0],
                    'uType' => $uType
                ]);
            }
        } else {
            return redirect("/");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (session()->exists('tmpUser')) {
            $tmpUser = session()->pull('tmpUser');
            session()->put('tmpUser', $tmpUser);
            $file = $request->file('files');
            $uid = $tmpUser[0]['userID'];
            $fileName = "";
            if ($file) {
                $mimetype = $file->getMimeType();

                if ($mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype == "image/png" || $mimetype == "image/bitmap") {
                    $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/storage/profiles';
                    $fileName = $uid . "" . date('ymd', strtotime(now())) . "." . $file->getClientOriginalExtension();
                    $isFile = $file->move($destinationPath,  $fileName);
                }
            }

            $newProfile = new Profile();
            $newProfile->userID = $uid;
            $newProfile->profile = $request->profile;
            $newProfile->bio = $request->bio;
            $newProfile->company = $request->company;
            $newProfile->location = $request->location;
            $newProfile->verified = 2;
            if ($fileName != "") {
                $newProfile->userPic = $fileName;
            }
            $isSave = $newProfile->save();

            if ($isSave) {
                $queryResult = DB::table('profiles')->where([
                    'userID' => $newProfile->userID,
                ])->get();
                $tmpProfile = json_decode($queryResult, true);

                session()->put('tmpProfile', $tmpProfile);
            } else {
                session()->put('errorCreate', true);
            }

            return redirect('/paymentmethod?as=' . $request->query('as') . '&step=3');
        } else {
            return redirect('/signup?as=' . $request['as'] . '&step=1');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
