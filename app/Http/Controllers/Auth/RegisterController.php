<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\Dropbox\Client;
use App\Events\UsuarioRegistrado;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //el usuario no debe estar registrado para que se pueda registrar
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->dropbox = Storage::disk('dropbox')->getDriver()->getAdapter()->getClient();
        // $this->middleware('auth:admin');

    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // return dd($data);
        return Validator::make($data, [
          'name' => ['required', 'string', 'max:255'],//check
          'lastname' => ['required', 'string', 'max:255'],//check
          'documento' => ['required', 'numeric', 'unique:users'],//check
          'tipodocumento' => ['required', 'numeric'],//check
          'fechaNacimiento' => ['required', 'date'],//check
          'telefono' => ['required', 'numeric', 'unique:users'],//check
          'direccion' => ['required', 'string', 'max:255'],//check
          'institucion' => ['required', 'string', 'max:255'],//check
          'certificado' => ['required', 'mimes:pdf', 'max:9999'],//check
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],//check
          'password' => ['required', 'string', 'min:8', 'confirmed'],//check
          'terminosCondiciones' => ['accepted'],//check
        ]);
    }

    protected function adminValidator(array $data)
    {
        return Validator::make($data, [
            'name'            => ['required', 'string', 'max:255'],//check
            'email'           => ['required', 'string', 'email', 'max:255', 'unique:admins'],//check
            'password'        => ['required', 'string', 'min:8', 'confirmed'],//check
            'lastname'        => ['required', 'string', 'max:255'],//check
            'documento'       => ['required', 'numeric', 'unique:admins'],//check
            'fechaContrato'   => ['required', 'date'],//check
            'fechaNacimiento' => ['required', 'date'],//check
            'telefono'        => ['required', 'numeric'],//check
            'direccion'       => ['required', 'string', 'max:255'],//check


        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // return dd($data);
        $request = request();
        // return dd($request->hasFile('certificado'));
        $interes = Storage::disk('dropbox')->putFile('/certificados', $request->file('certificado'));
        // return dd($request);
        $response = $this->dropbox->createSharedLinkWithSettings(
            $interes,
            ["requested_visibility" => "public"]
        );
        // return dd($response);
        $user = User::create([
          'name' => $data['name'],//check
          'email' => $data['email'],//check
          'password' => Hash::make($data['password']),//check
          'lastname' => $data['lastname'],//check
          'documento' => $data['documento'],//check
          'tipodocumento' => $data['tipodocumento'],//check
          'fechaNacimiento' => date('Y-m-d', strtotime($data['fechaNacimiento'])),//check
          'certificado' => $response['url'],
          'telefono' => $data['telefono'],//check
          'direccion' => $data['direccion'],//check
          'institucion' => $data['institucion'],//check
          'terminosCondiciones' => $data['terminosCondiciones'],//check

        ]);
        event(new UsuarioRegistrado($user));
        return $user;
    }

    public function showAdminRegisterForm()
    {
        return view('auth.register', ['url' => 'admin']);
    }

    protected function createAdmin(Request $request)
    {
        $this->adminValidator($request->all())->validate();
        $admin = Admin::create([
          'name' => $data['name'],//check
          'email' => $data['email'],//check
          'password' => Hash::make($data['password']),//check
          'lastname' => $data['apellidos'],//check
          'documento' => $data['documento'],//check
          'fechaNacimiento' => date('Y-m-d', strtotime($data['fechaNacimiento'])),//check
          'fechaContrato' => date('Y-m-d', strtotime($data['fechaContrato'])),//check
          'telefono' => $data['telefono'],//check
          'direccion' => $data['direccion'],//check


        ]);
        return redirect()->intended('login/admin');
    }
}
