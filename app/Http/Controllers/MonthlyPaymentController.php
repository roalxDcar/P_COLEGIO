<?php

namespace App\Http\Controllers;

use App\MonthlyPayment;
use Illuminate\Http\Request;

class MonthlyPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monthly = MonthlyPayment::orderBy('idmonthly_payment','desc')->paginate(10);
        return view('monthlypayments.index',['monthly'=> $monthly]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('monthlypayments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $monthly = new MonthlyPayment;
        $monthly->start_date=$request->start_date;
        $monthly->end_date= $request->end_date;
        $monthly->description=$request->description;
        $monthly->save();
        return redirect()->route('monthly.index');
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
        $monthly = MonthlyPayment::findOrFail($id);
        return view('monthlypayments.edit',['monthly'=> $monthly]);
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
        $monthly = MonthlyPayment::findOrFail($id);
        $monthly -> start_date = $request -> start_date;
        $monthly -> end_date =  $request -> end_date;
        $monthly -> description = $request -> description;
        $monthly -> save();
        return redirect()->route('monthly.index');
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
