<?php

namespace App\Http\Controllers;

use App\Models\BandProfile;
use App\Models\Events;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class EventsController extends Controller
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

            if ($uType == 3) {
                $queryResult = DB::table('band_profiles')->where(['userID' => $uid])->get();
                $pic = "";
                if (count($queryResult) > 0) {
                    $profiles = json_decode($queryResult, true);
                    $pic = $profiles[0]['bandPic'];
                }

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

                $queryResult = DB::table('vwalleventsforbands')->get();
                $event = json_decode($queryResult, true);

                return view('artist.events', [
                    'pic' => $pic,
                    'allnames' => $allnames,
                    'idData' => $idData,
                    'bandData' => $bandData,
                    'serviceMap' => $serviceMap,
                    'uType' => $uType,
                    'events' => $event
                ]);
            }

            if ($uType == 2 || $uType == 0) {
                $queryResult = DB::table('profiles')->where(['userID' => $uid])->get();
                $pic = "";
                if (count($queryResult) > 0) {
                    $profiles = json_decode($queryResult, true);
                    $pic = $profiles[0]['userPic'];
                }

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

                $queryResult = DB::table('vwalleventsforhost')->where([['status', '<>', 3]])->get();
                $event = json_decode($queryResult, true);

                if ($uType == 0) {
                    return view('admin.events', [
                        'pic' => $pic,
                        'allnames' => $allnames,
                        'idData' => $idData,
                        'bandData' => $bandData,
                        'serviceMap' => $serviceMap,
                        'events' => $event,
                        'uType' => $uType
                    ]);
                } else {
                    return view('artist.events', [
                        'pic' => $pic,
                        'allnames' => $allnames,
                        'idData' => $idData,
                        'bandData' => $bandData,
                        'serviceMap' => $serviceMap,
                        'events' => $event,
                        'uType' => $uType
                    ]);
                }
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
                session()->put('successAddEvent', true);
            } else {
                session()->put('errorAddEvent', true);
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
