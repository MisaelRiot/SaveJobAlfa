<?php

namespace App\Listeners;
use App\Validacion;
use App\Events\UsuarioRegistrado;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CrearValidacion
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {

        $validacion = new Validacion;
        $validacion->user_id = $event->user->id;
        $validacion->admin_id =1;
        $validacion->save();
        // return dd($validacion);
    }
}
