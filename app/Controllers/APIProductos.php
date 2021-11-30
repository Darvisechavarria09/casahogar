<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class APIProductos extends ResourceController
{
    protected $modelName = 'App\Models\Productomodelo';
    protected $format    = 'json';

    public function buscarProductos()
    {
        return $this->respond($this->model->findAll());
    }

    public function buscarProducto($id){

        return $this->respond($this->model->find($id));
    }

    public function agregarProductos(){

        $producto=$this->request->getPost("producto");
        $foto=$this->request->getPost("foto");
        $precio=$this->request->getPost("precio");
        $descripcion=$this->request->getPost("descripcion");
        $tipo=$this->request->getPost("tipo");

        if($this->validate('producto')){
            $datos=array(
                //3.se organizan los datos en un array
                //los naranjados(claves) deben coincidir
                //con el nombre de las columnas de BD
                "producto"=>$producto,
                "foto"=>$foto,
                "precio"=>$precio,
                "descripción"=>$descripcion,
                "tipo"=>$tipo
    
            );

            try{
                $this->model->insert($datos);
                $mensaje = array(
                    "mensaje"=>"Exito agregando el producto",
                    "estado"=>true
                ); 
                return $this->respond(json_encode($mensaje));

            }catch(\Exception $error)
            {
                $mensaje = array(
                    "mensaje"=>"Error agregando el producto",
                    "estado"=>false
                ); 
                return $this->respond(json_encode($mensaje));
            }
        }
        else{
            $mensaje = array(
                "mensaje"=>"Tienes datos pendientes, todos los campos son requeridos",
                "estado"=>false
            ); 
            return $this->respond(json_encode($mensaje));
        }


        /*//3. crear un arreglo asociativo con los datos del punto 1
        
        print_r($datos);//------------------------*/

    }


}
        

    // ...
