<?php

namespace App\Http\Controllers;

use App\Equipo;
use App\User;
use Illuminate\Http\Request;

class EquiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipos = Equipo::all();

        return view("equipos.index", compact("equipos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view("equipos.create", compact("users"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $equipo = new Equipo();
        /*$user = \Auth::user();
        $equipo->user_id = $user->id;*/ //Esta línea y la anterior permiten tomar los datos del usuario activo
        $equipo->tipo = $request->tipo;
        $equipo->marca = $request->marca;
        $equipo->modelo = $request->modelo;
        $equipo->garantia = $request->garantia;
        $equipo->user_id = $request->user_id;

        $equipo->save();

        return redirect("/equipos");
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipo = Equipo::findOrFail($id);
        $users = User::all();

        return view("equipos.edit", compact("equipo"), compact("users"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $equipo = Equipo::findOrFail($id);
        $equipo->update($request->all());
        return redirect("/equipos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equipo = Equipo::findOrFail($id);
        $equipo->delete();
        return redirect("/equipos");
    }
}
