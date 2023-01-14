<?php

namespace App\Http\Controllers;

use App\Models\Verified;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VerifyController extends Controller
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

            $isSubmittedVerify = false;
            $queryResult2 = DB::table('verifieds')->where([['userID' ,'=', $uid]])->get();
            if (count($queryResult2) > 0) {
                $isSubmittedVerify = true;
            }

            if ($uType == 3) {
                $queryResult = DB::table('band_profiles')->where(['userID' => $uid])->get();
                $pic = "";
                if (count($queryResult) > 0) {
                    $profiles = json_decode($queryResult, true);
                    $pic = $profiles[0]['bandPic'];
                }
            } else if ($uType == 2) {
                $queryResult = DB::table('profiles')->where(['userID' => $uid])->get();
                $pic = "";
                if (count($queryResult) > 0) {
                    $profiles = json_decode($queryResult, true);
                    $pic = $profiles[0]['userPic'];
                }
            }
            return view('verification', [
                'pic' => $pic,
                'uType' => $uType,
                'isDoneVerify' => $isSubmittedVerify
            ]);
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
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put("users", $user);
            $uid = $user['userID'];
            $file = $request->file('files');

            if ($file) {
                $mimetype = $file->getMimeType();

                if ($mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype == "image/png" || $mimetype == "image/bitmap") {
                    $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/storage/ids';
                    $fileName = $uid . "" . date('ymd', strtotime(now())) . "." . $file->getClientOriginalExtension();
                    $isFile = $file->move($destinationPath,  $fileName);
                }
                $verify = new Verified();
                $verify->userID = $user['userID'];
                $verify->idnumber = $request->idnumber;
                $verify->name = $request->idname;
                $verify->idPic = $fileName;
                $isSave = $verify->save();
                if ($isSave) {
                    session()->put('successAddVerify', true);
                } else {
                    session()->put('errorAddVerify', true);
                }
            } else {
                session()->put('errorFileRequire', true);
            }
            return redirect("/verify");
        } else {
            return redirect("/");
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
