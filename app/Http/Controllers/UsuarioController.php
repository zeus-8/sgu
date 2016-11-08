<?php

namespace sigetrab\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Session;
use sigetrab\Http\Controllers\Controller;
use sigetrab\Http\Requests;
use sigetrab\Http\Requests\UserCreateRequest;
use sigetrab\Http\Requests\UserUpdateRequest;
use sigetrab\User;
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::All();
        return view('usuario.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        $user=$request['nombre'];
        $u=strtoupper($user[0]).strtolower($request['apellido']);
        User::create([
                'nombre' => trim(strtoupper($request['nombre'])),
                'apellido' => trim(strtoupper($request['apellido'])),
                'ci' => $request['ci'],
                'telef1' => $request['telef1'],
                'telef2' => $request['telef2'],
                'direccion' => trim(strtoupper($request['direccion'])),
                'email' => trim(strtoupper($request['email'])),
                'password' => bcrypt($u),
                'name_user' => $u,
                'rol' => $request['rol'],
            ]);
        Session::flash('message', 'Los datos se guardaron exitosamente');
        return Redirect::to('/usuario');
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
        $user = User::find($id);
        return view('usuario.edit', ['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();
        Session::flash('message', 'Los datos se moldificaron exitosamente');
        return Redirect::to('/usuario');
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
