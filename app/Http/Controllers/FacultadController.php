<?php

namespace App\Http\Controllers;

use App\Universidad;
use App\Facultad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FacultadController extends Controller
{
    //

    /**
     * Mandar Lista de las universidades.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $listaUniversidades = Universidad::all();
        $listaFacultades = Facultad::all();
        // return dd($listaFacultades);
        return view('admin.admin_facultades', compact('listaUniversidades','listaFacultades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request,[
        'universidad_id' => 'required',
        'nombre' => 'required']);
        // return $data;
        Facultad::create($data);
        return redirect('admin/facultades')->with('message','store');
    }

    /**
     * Actualizar universidad en base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        //

        $data = $this->validate($request,[
        'universidad_id' => 'required',
        'nombreUni2' => 'required']);
        //return $id;
        $share = Facultad::find($id);
        //return $share;
        $share->universidad_id = $request->get('universidad_id');
        $share->nombre = $request->get('nombreUni2');

        //return $share;
        $share->save();

        //return redirect('/shares')->with('success', 'Stock has been updated');
        return redirect('admin/facultades')->with('message','updated');
    }

    /**
     * Eliminar universidad de la base de datos.
     *
     * @param  \App\Universidad  $universidades
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $share = Facultad::find($id);
      $share->delete();
      return redirect('admin/facultades')->with('message','eliminated');
    }

    //este metodo mostrara un json con la informacion de las universidades
    // y viene dado por un ajax para ejecutar la consulta sin cargar la pagina
    public function searchfacultades(Request $request)
    {
        //

        if($request->ajax())
          {
            // return dd("hola");
            $facultadesxuni=Universidad::find($request->search)->facultades->pluck("nombre","id");

            return $facultadesxuni;
            // return json_encode($products);
          }

    }

    public function searchfacultadesedit(Request $request)
    {
        //

        if($request->ajax())
          {
            // return dd("hola");
            $facultad=Facultad::where('id',$request->search)->get()->first();

            return $facultad;
            // return json_encode($products);
          }

    }

}
