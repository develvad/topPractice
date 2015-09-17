<?php namespace topGank\Http\Controllers;

class AlbumController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's "dashboard" for users that
    | are authenticated. Of course, you are free to change or remove the
    | controller as you wish. It is just here to get your app started!
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function getCrearAlbum()
    {
        return 'formulario de crear albums';
    }
    public function postCrearAlbum(){

        return 'Almacenando album';

    }
    public function getActualizarAlbum()
    {
        return 'formulario de actualizar albums';
    }
    public function postActualizarAlbum(){

        return 'Actualizando album';

    }
    public function getEliminarAlbum()
    {
        return 'formulario de actualizar albums';
    }
    public function postEliminarAlbum(){

        return 'Actualizando album';

    }
    public function missingMethod($parameters = array())
    {
        abort(404);
    }

}


