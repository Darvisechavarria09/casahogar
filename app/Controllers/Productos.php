<?php

namespace App\Controllers;

//se trae (importa) el modlo de datos
use App\Models\Productomodelo;

class Productos extends BaseController
{
    public function index(){
        return view('registroProductos');
    }

    public function registrar(){
        /*//1. recibo todos los datos enviados desde el formulario(vista)
        //lo que tengo entre getPost(") es el name de cada input*/
        $producto=$this->request->getPost("producto");
        $foto=$this->request->getPost("foto");
        $precio=$this->request->getPost("precio");
        $descripcion=$this->request->getPost("descripcion");
        $tipo=$this->request->getPost("tipo");

        //2.Valido que llego
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

                $modelo=new ProductoModelo();
                $modelo->insert($datos);
                return redirect()->to(site_url('/productos/registro'))->with('mensaje',"Exito agregando el producto");

            }catch(\Exception $error)
            {
                return redirect()->to(site_url('/productos/registro'))->with('mensaje',$error->getMessage());
            }
        }
        else{

            $mensaje="TIENES DATOS PENDIENTES, TODOS LOS CAMPOS SON REQUERIDOS";
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);
        }


        /*//3. crear un arreglo asociativo con los datos del punto 1
        
        print_r($datos);//------------------------*/

    }

    public function buscar(){
        try{

            $modelo=new ProductoModelo();
            $resultado=$modelo->findAll();
            $productos=array('productos'=>$resultado);
            return view('listaProductos',$productos);
            
        }catch(\Exception $error)
        {
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$error->getMessage());
        }
    }

    public function eliminar($id){

        try{
            $modelo=new ProductoModelo();
            $modelo->where('id',$id)->delete();
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',"Exito eliminando el producto");

        }catch(\Exception $error)
        {
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$error->getMessage());
        }
    }

    public function editar($id){
        try{
            //recibimos los datos
            $producto=$this->request->getPost("producto");
            $precio=$this->request->getPost("precio");

            //validación de datos

            //organizo los datos en un array asociativo
            $datos=array(
                "producto"=>$producto,
                "precio"=>$precio
            );
            //echo("estamos editando el producto".$id);
            //print_r($datos);
            
        }catch(\Exception $error)
        {
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$error->getMessage());
        }

        try{

            $modelo=new ProductoModelo();
            $modelo->update($id,$datos);
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',"Exito editando el producto");

        }catch(\Exception $error)
        {
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$error->getMessage());
        }
    }
}
