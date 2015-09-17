<?php namespace topGank\Http\Controllers;

class FotoController extends Controller {

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
    public function getIndex()
    {
        return "mostrando fotos usuario";
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function getCrearFoto()
    {
        return 'formulario de crear fotos';
    }
    public function postCrearFoto(){

        return 'Almacenando foto';

    }
    public function getActualizarFoto()
    {
        return 'formulario de actualizar fotos';
    }
    public function postActualizarFoto(){

        return 'Actualizando foto';

    }
    public function getEliminarFoto()
    {
        return 'formulario de actualizar fotos';
    }
    public function postEliminarFoto(){

        return 'Actualizando foto';

    }
    public function missingMethod($parameters = array())
    {
        abort(404);
    }

}
