<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('paymentmethod', [
            'as' => $request->query('as')
        ]);
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

            if ($request->btnGcash) {

                $newPayment = new PaymentMethod();
                $newPayment->userID = $tmpUser[0]['userID'];
                $newPayment->accountnumber = $request->accountnumber;
                $newPayment->accountname = $request->accountname;
                $newPayment->type = 'gcash';
                $isSave = $newPayment->save();
                session()->flush();
                if ($isSave) {
                    session()->put('successCreate', true);
                } else {
                    session()->put('errorCreate', true);
                }
                return redirect('/');
            } else if ($request->btnCredit) {
                $newPayment = new PaymentMethod();
                $newPayment->userID = $tmpUser[0]['userID'];
                $newPayment->accountnumber = $request->accountnumber;
                $newPayment->accountname = $request->accountname;
                $newPayment->card = $request->cardnumber;
                $newPayment->type = 'credit/debit';
                $isSave = $newPayment->save();
                session()->flush();
                if ($isSave) {
                    session()->put('successCreate', true);
                } else {
                    session()->put('errorCreate', true);
                }
                return redirect('/');
            }
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
