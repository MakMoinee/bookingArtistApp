<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HostController extends Controller
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

            if ($uType == 2) {

                $queryResult = DB::table('profiles')->where(['userID' => $uid])->get();
                $pic = "";
                if (count($queryResult) > 0) {
                    $profiles = json_decode($queryResult, true);
                    $pic = $profiles[0]['userPic'];
                }

                $queryResult2 = DB::table('vwalleventsforbands')->where([['hostUserID', '=', $uid], ['status', '=', 2]])->get();
                $rawEvents = json_decode($queryResult2, true);
                $eventsArr = array();
                foreach ($rawEvents as $r) {
                    $tmpArr = array();
                    $tmpArr['title'] = $r['eventname'];
                    $tmpArr['start'] = $r['eventdate'];
                    array_push($eventsArr, $tmpArr);
                }

                // dd([
                //     'pic' => $pic,
                //     'events'=> $eventsArr
                // ]);

                return view('host.dashboard', [
                    'pic' => $pic,
                    'events' => $eventsArr
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
