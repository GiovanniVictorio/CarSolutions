<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Taller;

class TallerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $talleres = Taller::all();
        return view('taller.index')->with('talleres', $talleres);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('taller.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $talleres = new Taller();

        $talleres->nombre = $request->get('nombre');
        $talleres->horario = $request->get('horario');
        $talleres->telefono = $request->get('telefono');
        $talleres->googlemaps = $request->get('googlemaps');
        $talleres->tipo = $request->get('tipo');

        $talleres->save();
        return redirect('/talleres');
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
        $taller = Taller::find($id);
        return view(taller.edit)->with('taller',$taller);
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
        $taller = Taller::find($id);

        $taller->nombre = $request->get('nombre');
        $taller->horario = $request->get('horario');
        $taller->telefono = $request->get('telefono');
        $taller->googlemaps = $request->get('googlemaps');
        $taller->tipo = $request->get('tipo');

        $taller->save();
        return redirect('/talleres');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $taller = Taller::find($id);
        $taller->delete();

        return redirect('/talleres');
    }
}
