<?php

namespace App\Http\Controllers;

use App\Universidad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UniversidadController extends Controller
{
  /**
   * Mandar Lista de las universidades.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      //
      $listaUniversidades = Universidad::all();
      return view('admin.admin_universidades', compact('listaUniversidades'));
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
      'nit' => 'required',
      'nombre' => 'required',
      'paginaWeb' => 'required']);
      //return $data;
      Universidad::create($data);
      return redirect('admin/universidades')->with('message','store');
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
      'nit2' => 'required',
      'nombreUni2' => 'required',
      'pgWeb2' => 'required']);
      //return $id;
      $share = Universidad::find($id);
      //return $share;
      $share->nit = $request->get('nit2');
      $share->nombre = $request->get('nombreUni2');
      $share->paginaWeb = $request->get('pgWeb2');
      //return $share;
      $share->save();

      //return redirect('/shares')->with('success', 'Stock has been updated');
      return redirect('admin/universidades')->with('message','updated');
  }

  /**
   * Eliminar universidad de la base de datos.
   *
   * @param  \App\Universidad  $universidades
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $share = Universidad::find($id);
    $share->delete();
    return redirect('admin/universidades')->with('message','eliminated');
  }

  //este metodo mostrara un json con la informacion de las universidades
  // y viene dado por un ajax para ejecutar la consulta sin cargar la pagina
  public function searchuniversidades(Request $request)
  {
      //

      if($request->ajax())
        {
          //return dd("hola");
          $university=Universidad::where('id',$request->search)->get()->first();

          return $university;
          // return json_encode($products);
        }

  }
}
