<?php

namespace App\Http\Controllers;

use App\Models\Iusers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request['as'] && $request['step']) {
            if ($request['as'] == 'BAND' || $request['as'] == 'HOST') {

                if ($request['step'] == 1 && $request['as'] == 'BAND') {
                    return view('signup', [
                        'step' => $request['step'],
                        'as' => $request['as']
                    ]);
                } else if ($request['step'] == 1 && $request['as'] == 'HOST') {
                    return view('signuphost', [
                        'step' => $request['step'],
                        'as' => $request['as']
                    ]);
                }

                if ($request['step'] == 2 && $request['as'] == 'HOST') {
                    return view('signupstep2a', [
                        'step' => $request['step'],
                        'as' => $request['as']
                    ]);
                } else if ($request['step'] == 2 && $request['as'] == 'BAND') {
                    return view('signupstep2b', [
                        'step' => $request['step'],
                        'as' => $request['as']
                    ]);
                }
            } else {
                return redirect('/');
            }
        } else {
            return redirect('/');
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
        // dd($request);
        if ($request['btnStep1']) {
            $as = $request->query('as');
            $step = $request->query('step');

            $iuser = new Iusers();
            $iuser->email = $request->email;
            $iuser->password = Hash::make($request->password);
            $iuser->phonenum = $request->phonenum;
            if ($as == 'HOST') {
                $iuser->userType = 2;
            } else if ($as == 'BAND') {
                $iuser->userType = 3;
            }

            $isSave = $iuser->save();

            if ($isSave) {
                session()->put('successCreate', true);
                $step = $step + 1;
            } else {
                session()->put('errorCreate', true);
            }

            return redirect('/signup?as=' . $as . '&step=' . $step . '');
        } else {
            return redirect('/signup');
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
