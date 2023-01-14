<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class BookingsController extends Controller
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


            $services = Services::all();

            if ($uType == 3) {
                $queryResult = DB::table('vwalleventsforbands')->where([['bandUserID', '=', $uid]])->get();
                $event = json_decode($queryResult, true);
                $queryResult = DB::table('band_profiles')->where(['userID' => $uid])->get();
                $pic = "";
                if (count($queryResult) > 0) {
                    $profiles = json_decode($queryResult, true);
                    $pic = $profiles[0]['bandPic'];
                }

                $serviceData = array();
                foreach ($event as $e) {
                    $s =   $e['services'];
                    $newService = explode(",", $s, -1);
                    if (count($newService) == 0) {
                        foreach ($services as $ss) {
                            if ($ss['serviceID'] == $s) {
                                if (array_key_exists($e['eventID'], $serviceData)) {
                                    $arr = $serviceData[$e['eventID']];
                                    array_push($arr, $ss);
                                    $serviceData[$e['eventID']] = $arr;
                                } else {
                                    $arr = array();
                                    array_push($arr, $ss);
                                    $serviceData[$e['eventID']] = $arr;
                                }
                            }
                        }
                    } else {
                        foreach ($newService as $n) {
                            foreach ($services as $ss) {
                                if ($ss['serviceID'] == $n) {
                                    if (array_key_exists($e['eventID'], $serviceData)) {
                                        $arr = $serviceData[$e['eventID']];
                                        array_push($arr, $ss);
                                        $serviceData[$e['eventID']] = $arr;
                                    } else {
                                        $arr = array();
                                        array_push($arr, $ss);
                                        $serviceData[$e['eventID']] = $arr;
                                    }
                                }
                            }
                        }
                    }
                }

                return view('artist.bookings', [
                    'pic' => $pic,
                    'bookings' => $event,
                    'uType' => $uType,
                    'services' => $serviceData
                ]);
            }

            if ($uType == 2 || $uType == 0) {
                $queryResult = DB::table('vwalleventsforbands')->where([['hostUserID', '=', $uid]])->get();
                $event = json_decode($queryResult, true);

                $queryResult = DB::table('profiles')->where(['userID' => $uid])->get();
                $pic = "";
                if (count($queryResult) > 0) {
                    $profiles = json_decode($queryResult, true);
                    $pic = $profiles[0]['userPic'];
                }

                $serviceData = array();
                $amountArr = array();
                $amount = 0;
                foreach ($event as $e) {
                    $s =   $e['services'];
                    $newService = explode(",", $s, -1);
                    if (count($newService) == 0) {
                        foreach ($services as $ss) {
                            if ($ss['serviceID'] == $s) {
                                if (array_key_exists($e['eventID'], $serviceData)) {
                                    $arr = $serviceData[$e['eventID']];
                                    array_push($arr, $ss);
                                    $serviceData[$e['eventID']] = $arr;
                                    $a = $amountArr[$e['eventID']];
                                    $a += $ss['price'];
                                    $amountArr[$e['eventID']] = $a;
                                } else {
                                    $arr = array();
                                    array_push($arr, $ss);
                                    $serviceData[$e['eventID']] = $arr;
                                    $amountArr[$e['eventID']] = $ss['price'];
                                }
                            }
                        }
                    } else {
                        foreach ($newService as $n) {
                            foreach ($services as $ss) {
                                if ($ss['serviceID'] == $n) {
                                    if (array_key_exists($e['eventID'], $serviceData)) {
                                        $arr = $serviceData[$e['eventID']];
                                        array_push($arr, $ss);
                                        $serviceData[$e['eventID']] = $arr;
                                        $a = $amountArr[$e['eventID']];
                                        $a += $ss['price'];
                                        $amountArr[$e['eventID']] = $a;
                                    } else {
                                        $arr = array();
                                        array_push($arr, $ss);
                                        $serviceData[$e['eventID']] = $arr;
                                        $amountArr[$e['eventID']] = $ss['price'];
                                    }
                                }
                            }
                        }
                    }
                }

                // dd([
                //     'pic' => $pic,
                //     'bookings' => $event,
                //     'services' => $serviceData
                // ]);

                if ($uType == 0) {
                    return view('admin.bookings', [
                        'pic' => $pic,
                        'bookings' => $event,
                        'services' => $serviceData,
                        'uType' => $uType,
                        'amount' => $amount,
                        'amountArr'=> $amountArr
                    ]);
                } else {
                    return view('host.bookings', [
                        'pic' => $pic,
                        'bookings' => $event,
                        'services' => $serviceData,
                        'uType' => $uType,
                        'amount' => $amount,
                        'amountArr'=> $amountArr
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
        //
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
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put("users", $user);
            // dd($request);
            if ($request->btnUpdateConfirm) {
                $affectedRows = DB::table('events')->where(['eventID' => $id])->update([
                    'status' => 2
                ]);
                if ($affectedRows > 0) {
                    session()->put('successUpdateConfirm', true);
                } else {
                    session()->put('errorUpdateConfirm', true);
                }
            } else if ($request->btnUpdateCancel) {
                $affectedRows = DB::table('events')->where(['eventID' => $id])->update([
                    'status' => 4
                ]);
                if ($affectedRows > 0) {
                    session()->put('successCancel', true);
                } else {
                    session()->put('errorCancel', true);
                }
            } else if ($request->btnUpdateDone) {
                $affectedRows = DB::table('events')->where(['eventID' => $id])->update([
                    'status' => 5
                ]);
                if ($affectedRows > 0) {
                    session()->put('successDone', true);
                } else {
                    session()->put('errorDone', true);
                }
            }


            return redirect("/bookings");
        } else {
            return redirect("/");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put("users", $user);

            if ($request->btnDelete) {
                $queryResult = DB::table('events')->where(['eventID' => $id])->get();
                $eventArr = json_decode($queryResult, true);
                $updateStatus = false;
                foreach ($eventArr as $e) {
                    if ($e['status'] != 3) {
                        $updateStatus = true;
                    }
                }

                if ($updateStatus) {
                    session()->put('errorDeleteStatusChange', true);
                } else {
                    $affectedRows = DB::table('events')->where(['eventID' => $id])->delete();
                    if ($affectedRows > 0) {
                        session()->put('successDelete', true);
                    } else {
                        session()->put('errorDelete', true);
                    }
                }
            }

            return redirect('/bookings');
        } else {
            return redirect('/');
        }
    }
}
