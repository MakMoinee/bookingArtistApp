<?php

namespace App\Http\Controllers;

use App\Models\BandProfile;
use App\Models\Events;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put("users", $user);
            $uType = $user['userType'];
            $uid = $user['userID'];

            $bands = BandProfile::all();
            $allnames = array();
            $idData = array();
            $bandData = array();

            foreach ($bands as $b) {
                array_push($allnames, $b['bandName']);
                array_push($idData, $b['profileID']);
                $bandData[$b['profileID']] = $b;
            }


            $service = Services::all();
            $serviceMap = array();
            $serviceArr = array();

            foreach ($service as $s) {
                if (array_key_exists($s['userID'], $serviceMap)) {
                    $newArr = $serviceMap[$s['userID']];
                    array_push($newArr, $s);
                    $serviceMap[$s['userID']] = $newArr;
                } else {
                    array_push($serviceArr, $s);
                    $serviceMap[$s['userID']] = $serviceArr;
                }
            }

            if ($uType == 3) {
                $queryResult = DB::table('band_profiles')->where(['userID' => $uid])->get();
                $pic = "";
                if (count($queryResult) > 0) {
                    $profiles = json_decode($queryResult, true);
                    $pic = $profiles[0]['bandPic'];
                }

                $allBands = BandProfile::all();
                return view('artist.artist', [
                    'pic' => $pic,
                    'bands' => $allBands,
                    'idData' => $idData,
                    'bandData' => $bandData,
                    'serviceMap' => $serviceMap
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
                return view('artist.artist', [
                    'pic' => $pic,
                    'bands' => $allBands,
                    'idData' => $idData,
                    'bandData' => $bandData,
                    'serviceMap' => $serviceMap
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
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put("users", $user);

            $event = new Events();
            $event->userID = $user['userID'];
            $event->eventname = $request->eventname;
            $event->artistID = $request->artistid;
            $event->eventdate = $request->eventdate;
            $event->addinfo = $request->addInfo;
            $event->location = $request->location;
            $event->fromTime = $request->fromTime;
            $event->toTime = $request->toTime;
            $event->services = $request->services;
            $event->status = 3;

            $isSave = $event->save();
            if ($isSave) {
                session()->put('successAddBooking', true);
            } else {
                session()->put('errorAddBooking', true);
            }
            return response('', 200);
        } else {
            return redirect('/');
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
