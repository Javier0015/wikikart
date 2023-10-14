<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['usuarios']=Usuario::paginate(5);
        return view('usuario.index',$datos );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //$datosUsuario = request()->all();
        $datosUsuario = request()->except('_token');
        Usuario::insert($datosUsuario);

      //  return response()->json($datosUsuario);
      return redirect ('usuario')->with('mensaje', 'Usuario agregado con exito');

    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $usuario=Usuario::findOrFail($id);
        return view('usuario.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosUsuario = request()->except(['_token','_method']);
        Usuario::where('id','=',$id)->update($datosUsuario);

        $usuario=Usuario::findOrFail($id);
        return view('usuario.edit', compact('usuario'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Usuario::destroy($id);
        return redirect('usuario')->with('mensaje','Usuario Borrado');
    }

    

}
