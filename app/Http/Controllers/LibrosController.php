<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;
use App\Categoria;
use App\Carrera;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros=libro::all();
        return view('libros.libros',['libros'=>$libros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carreras=Carrera::all();
        $categorias=Categoria::all();
        return view('libros.newLibro',['carreras'=>$carreras,'categorias'=>$categorias]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        libro::create($request->all());
        return redirect('/libros');
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

        $libro_id=$id;
        $libro=libro::find($libro_id);
        $carreras=Carrera::all();
        $categorias=Categoria::all();
        return view('libros.editarLibro',['libro'=>$libro,'carreras'=>$carreras,'categorias'=>$categorias]);
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
        $libro=libro::find($id);
        $categoria=categoria::find($id);
        $carrera=carrera::find($id);
        $libro->titulo=$request->titulo;
        $libro->isbn=$request->isbn;
        $libro->autor=$request->autor;
        $categoria->nombre=$request->nombre;
        $carrera->nombre=$request->nombre;
        $libro->save();
        return "Datos Actualizados";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    libro::destroy($id);
    return redirect('/libros');
    }
}
