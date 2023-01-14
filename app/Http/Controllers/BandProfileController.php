<?php

namespace App\Http\Controllers;

use App\Models\BandProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BandProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

            //check if exist
            $queryResult = DB::table("band_profiles")->where([['bandName', '=', $request->artist]])->get();
            if (count($queryResult) > 0) {
                session()->put('errorExistArtist', true);
                return redirect('/signup?as=' . $request['as'] . '&step=2');
            }

            $fileName = "";
            if ($file) {
                $mimetype = $file->getMimeType();

                if ($mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype == "image/png" || $mimetype == "image/bitmap") {
                    $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/storage/profiles';
                    $fileName = $uid . "" . date('ymdh', strtotime(now())) . "." . $file->getClientOriginalExtension();
                    $isFile = $file->move($destinationPath,  $fileName);
                }
            }

            $profile = new BandProfile();
            $profile->userID = $uid;
            $profile->bandSize = $request->bandsize;
            $profile->reper = $request->reper;
            $profile->address = $request->address;
            $profile->bandName = $request->artist;
            $profile->bio = $request->bio;
            $profile->exp = $request->exp;
            $profile->artistType = $request->type;
            $profile->youtube = $request->youtube;
            $profile->genres = $request->genre;
            $profile->bandPic = $fileName;
            $profile->verified = 2;

            $isSave = $profile->save();

            if ($isSave) {
                $queryResult = DB::table('band_profiles')->where([
                    'userID' => $profile->userID,
                ])->get();
                $tmpProfile = json_decode($queryResult, true);
                session()->put('tmpProfile', $tmpProfile);
                return redirect('/paymentmethod?as=' . $request->query('as') . '&step=3');
            } else {
                session()->put('errorCreate', true);
                return redirect('/signup?as=' . $request['as'] . '&step=2');
            }
        } else {
            return redirect('/signup?as=' . $request['as'] . '&step=2');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
