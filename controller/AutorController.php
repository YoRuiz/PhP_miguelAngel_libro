<?php

require_once "Controller.php";


class AutorController extends Controller
{
    public function manageGetVerb(Request $request)
    {

        $listaAutores = null;
        $id = null;
        $response = null;
        $code = null;

        //if the URI refers to a libro entity, instead of the libro collection
        if (isset($request->getUrlElements()[4])) {
            $id = $request->getUrlElements()[4];
        }


        $listaAutores = AutorHandlerModel::getLibro($id);

        if ($listaAutores != null) {
            $code = '200';

        } else {

            //We could send 404 in any case, but if we want more precission,
            //we can send 400 if the syntax of the entity was incorrect...
            if (AutorHandlerModel::isValid($id)) {
                $code = '404';
            } else {
                $code = '400';
            }

        }

        $response = new Response($code, null, $listaAutores, $request->getAccept());
        $response->generate();

    }

}