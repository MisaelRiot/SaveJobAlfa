<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'welcome');
//pagina de entrada a la aplicación requiere no esta autenticado
Route::view('/prueba', 'savejobintro')->middleware('guest', 'guest:admin');

//paginas de login y rgistro de usuarios de la aplicación
Auth::routes();

//paginas que contienen los formularios para el ingreso y registro de usuarios administradores
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->middleware('redirectSuperAdmin')->name('adminlogin');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm')->middleware('auth:admin','checkSuperAdmin:admin');
Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin')->middleware('auth:admin');;

Route::get('/home', 'HomeController@index')->name('home');

//actualizacion de perfil de usuario
Route::get('/user/edit/profile', 'UserController@editProfileForm')->name('actualizarfoto');
Route::post('/user/edit/profile', 'UserController@updateProfile')->name('actualizarfoto2');

//actualizacion de información personal del usuario
Route::get('/user/edit/info', 'UserController@editInfoForm')->name('actualizarinfo');
Route::post('/user/edit/info', 'UserController@updateInfo')->name('actualizarinfo2');

//hacer solicitud de tutoria
Route::get('/user/solicitud', 'PetitionController@formularioSolicitud')->name('solicitudformulario');
Route::post('/user/solicitud', 'PetitionController@envioSolicitud')->name('solicitudenvio');
Route::get('/user/buscando/solicitud/{id}','PetitionController@esperarOfrecimiento')->name('buscandoOferta');
//hacer ofrecimiento


//consultar historial


//generar interacción

Route::view('/user/menu', 'user.user_menu');
// Route::view('/user/edit/profile', 'user.user_edit_perfil');
// Route::view('/user/edit/info', 'user.user_edit_info');
Route::view('/user/historial', 'user.user_historial');
Route::view('/user/ofrecimiento', 'user.user_ofrecimiento');
// Route::view('/user/solicitud', 'user.user_solicitud');


//pop up SEnder
Route::get('test', function () {
    event(new App\Events\TestingPopUp('1'));
    return "Event has been sent!";
});

Route::any('/broadcasting/auth', '\Illuminate\Broadcasting\BroadcastController@authenticate');
