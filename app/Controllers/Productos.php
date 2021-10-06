<?php

namespace App\Controllers;

class Productos extends BaseController
{
    public function index(){
        return view('registroProductos');
    }

    public function registrar(){
        //1. recibo todos los datos enviados desde el formulario(vista)
        //lo que tengo entre getPost(") es el name de cada input
        $producto=$this->request->getPost("producto");
        $foto=$this->request->getPost("foto");
        $precio=$this->request->getPost("precio");
        $descripcion=$this->request->getPost("descripcion");
        $tipo=$this->request->getPost("tipo");

        //2. crear un arreglo asociativo con los datos del punto 1
        $datos=array(

            "producto"=>$producto,
            "foto"=>$foto,
            "precio"=>$precio,
            "descripcion"=>$descripcion,
            "tipo"=>$tipo

        );
        print_r($datos);

    }
}
