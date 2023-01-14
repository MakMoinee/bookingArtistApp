<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Models\Transactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
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

            $invoiceID = $request->query('id');
            if ($invoiceID) {
                $queryResult = DB::table('events')->where(['eventID' => $invoiceID])->get();
                $events = json_decode($queryResult, true);

                $serviceData = array();
                $services = Services::all();
                $amount = 0;
                foreach ($events as $e) {
                    $s = $e['services'];
                    $newService = explode(",", $s, -1);
                    if (count($newService) == 0) {
                        foreach ($services as $ss) {
                            if ($ss['serviceID'] == $s) {
                                if (array_key_exists($e['eventID'], $serviceData)) {
                                    $arr = $serviceData[$e['eventID']];
                                    array_push($arr, $ss);
                                    $serviceData[$e['eventID']] = $arr;
                                    $amount += $ss['price'];
                                } else {
                                    $arr = array();
                                    array_push($arr, $ss);
                                    $serviceData[$e['eventID']] = $arr;
                                    $amount += $ss['price'];
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
                                        $amount += $ss['price'];
                                    } else {
                                        $arr = array();
                                        array_push($arr, $ss);
                                        $serviceData[$e['eventID']] = $arr;
                                        $amount += $ss['price'];
                                    }
                                }
                            }
                        }
                    }
                }
                // dd([
                //     'events' => count($events) == 0 ? [] : $events[0],
                //     'services' => $serviceData
                // ]);
                return view('invoice', [
                    'events' => count($events) == 0 ? [] : $events[0],
                    'services' => $serviceData,
                    'amount' => $amount
                ]);
            } else {
                return redirect("/");
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
            session()->put("users", $user); //


            $newTran = new Transactions();
            $newTran->eventID = $request->eventID;
            $newTran->reference = $request->reference;
            $newTran->phoneNum = $request->phoneNum;

            $isSave = $newTran->save();
            if ($isSave) {
                $affectedRows = DB::table('events')->where(['eventID' => $newTran->eventID])->update([
                    'status' => 1
                ]);
                session()->put('successSaveTrans', true);
            } else {
                session()->put('errorSaveTrans', true);
            }

            return redirect('/bookings');
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
