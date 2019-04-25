<?php

namespace App\Http\Controllers;

use App\Pension;
use Illuminate\Http\Request;

class PensionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pensiones = Pension::orderBy('id','desc')->paginate(7);
        return view('pensions.index' , [
            'pensiones' => $pensiones
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pensions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pension =  new Pension;
        $pension->descripcion = $request->descripcion;
        $pension->nivel = $request->nivel;
        $pension->monto = $request->monto;
        $pension->fecha_inicio = $request->fecha_inicio;
        $pension->fecha_final = $request->fecha_final;
        $pension->save();
        return redirect()->route('pensiones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //este show jajaj otro comentario
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pension = Pension::findOrFail($id);
        return view('pensions.edit',[
            'pension' => $pension
        ]);
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
        $pension = Pension::findOrFail($id);
        $pension->descripcion = $request->descripcion;
        $pension->nivel = $request->nivel;
        $pension->monto = $request->monto;
        $pension->fecha_inicio = $request->fecha_inicio;
        $pension->fecha_final = $request->fecha_final;
        $pension->save();
        return redirect()->route('pensiones.index');
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
