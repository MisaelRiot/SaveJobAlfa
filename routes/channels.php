<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
//canal de comunicacion con el que halla hecho la solicitud d tutoria
Broadcast::channel('notificaciondemodal.{id}', function ($user, $id) {
    return (int) $user->id === \App\Petition::find($id)->user_id;
}, ['guards' =>['web']]);

//$user->ofrecimiento->id === id
//canal para notificaciones a administrador
Broadcast::channel('notificacionAdmins.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
}, ['guards' =>['admin']]);
