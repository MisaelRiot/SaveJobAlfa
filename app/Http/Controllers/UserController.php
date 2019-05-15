<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class UserController extends Controller
{

    /**
     * Muestra el formulario de edicion de perfil para mostrar.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function editProfileForm()
    {
        // return dd(array('user'=>Auth::user()));
        return view('user.user_edit_perfil',array('user'=>Auth::user()));
    }

    public function updateProfile(Request $request)
    {
      // return dd($request);
      $request->validate([
          'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          // 'foto' => ['required', 'mimes:image/png'],//check
          'about' => ['required', 'string', 'max:255'],
      ]);
      // return dd($request->foto);
      $user = Auth::user();
      // return dd($request->foto->getClientOriginalExtension());
      $avatarName = $user->id.'_avatar'.time().'.'.request()->foto->getClientOriginalExtension();

      $request->foto->storeAs('userphotos/',$avatarName);

      $user->foto = $avatarName;
      $user->about = $request->about;
      $user->save();

      return redirect('/');
    }

    /**
     * Muestra el formulario de edicion de informacion personal del usuario.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function editInfoForm()
    {
        // return dd(array('user'=>Auth::user()));
        return view('user.user_edit_info',array('user'=>Auth::user()));
    }


    /**
     * Realiza la actualizacion de datos personales del usuario.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function updateInfo(Request $request)
    {

      $request->validate([
        //nombres
        'name' => ['required', 'string', 'max:255'],//check
        'lastname' => ['required', 'string', 'max:255'],//check
        //contacto
        'telefono' => ['required', 'numeric'],//check
        'direccion' => ['required', 'string', 'max:255'],//check
        'email' => ['required', 'string', 'email', 'max:255'],//check
        //Educación
        'institucion' => ['required', 'string', 'max:255'],//check
        'certificado' => ['required', 'mimes:pdf', 'max:9999'],//check

      ]);
      // return dd($request->institucion);
      $user = Auth::user();
      // return dd($request->foto->getClientOriginalExtension());
      // $interes = Storage::disk('')->putFile('/certificados', $request->file('certificado'));

      //nombre unico para el certificado
      $avatarName = $user->id.'_Certificate'.time().'.'.request()->certificado->getClientOriginalExtension();

      //almacenar certificado en el disco local
      $request->certificado->storeAs('usercertificate/',$avatarName);
      $user->certificado = $avatarName;

      //almacenar los demás campos
      $user->name = $request->name;
      $user->lastname = $request->lastname;
      $user->telefono = $request->telefono;
      $user->direccion = $request->direccion;
      $user->email = $request->email;
      $user->institucion = $request->institucion;



      $user->save();


      return redirect('/');
    }
}
