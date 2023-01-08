<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
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
        if (session()->exists('tmpProfile')) {
            $tmpProfile = session()->pull('tmpProfile');
            session()->put('tmpProfile', $tmpProfile);
            $tmpUser = session()->pull('tmpUser');
            session()->put('tmpUser', $tmpUser);
            $uid = $tmpUser[0]['userID'];

            $queryResult = DB::table('services')->where([['userID', '=', $uid], ['serviceName', '=', $request->servicename]])->get();
            if (count($queryResult) > 0) {
                return $request->ajax() ? response()->json(["Error" => "Service Exist"], Response::HTTP_INTERNAL_SERVER_ERROR) : abort(404);
            }

            $service = new Services();
            $service->userID = $uid;
            $service->serviceName = $request->servicename;
            $service->details = $request->details;
            $service->price = $request->price;
            $isSave = $service->save();
            if ($isSave) {
                $queryResult2 = DB::table('services')->where([['userID', '=', $uid]])->get();
                $allService = json_decode($queryResult2, true);
                return $request->ajax() ? response()->json($allService, Response::HTTP_OK) : abort(404);
            } else {
                return $request->ajax() ? response()->json(["Error" => "Service Exist"], Response::HTTP_INTERNAL_SERVER_ERROR) : abort(404);
            }
        } else {
            return abort(500);
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
    public function destroy($id, Request $request)
    {
        if (session()->exists('tmpUser')) {
            $tmpUser = session()->pull('tmpUser');
            session()->put('tmpUser', $tmpUser);
            $uid = $tmpUser[0]['userID'];

            $queryResult = DB::table('services')->where([['serviceID', '=', $id]])->delete();
            if ($queryResult > 0) {
                session()->put('successDeleteService', true);
            } else {
                session()->put('errorDeleteService', true);
            }
            return redirect("/paymentmethod?as=" . $request->as . "&step=3");
        } else {
            return redirect("/paymentmethod?as=" . $request->as . "&step=3");
        }
    }
}
