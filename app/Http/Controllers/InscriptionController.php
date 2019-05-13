<?php

namespace App\Http\Controllers;

use App\inscription;
use App\Degree;
use App\Parallel;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $degrees=Degree::orderBy('iddegree','desc');
        $parallels=Parallel::orderBy('idparallel','desc');
        return view('inscriptions.index',[
            'degrees' => $degrees,
            'parallels' => $parallels
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function show(inscription $inscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function edit(inscription $inscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, inscription $inscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(inscription $inscription)
    {
        //
    }
}
