<?php

namespace App\Controllers;

//se trae (importa) el modlo de datos
use App\Models\Animalmodelo;

class Animales extends BaseController
{
    public function index()
    {
        return view('registroAnimales');
    }

    public function registrar(){
        /*//1. recibo todos los datos enviados desde el formulario(vista)
        //lo que tengo entre getPost(") es el name de cada input*/
        $nombre=$this->request->getPost("nombre");
        $foto=$this->request->getPost("foto");
        $edad=$this->request->getPost("edad");
        $descripcion=$this->request->getPost("descripcion");
        $tipo=$this->request->getPost("tipo");

        //2.Valido que llego
        if($this->validate('animal')){
            $datos=array(
                //3.se organizan los datos en un array
                //los naranjados(claves) deben coincidir
                //con el nombre de las columnas de BD
                "nombre"=>$nombre,
                "foto"=>$foto,
                "edad"=>$edad,
                "descripción"=>$descripcion,
                "tipo"=>$tipo
    
            );

            try{

                $modelo=new AnimalModelo();
                $modelo->insert($datos);
                return redirect()->to(site_url('/animales/registro'))->with('mensaje',"Exito agregando el producto");

            }catch(\Exception $error)
            {
                return redirect()->to(site_url('/animales/registro'))->with('mensaje',$error->getMessage());
            }
        }
        else{

            $mensaje="TIENES DATOS PENDIENTES, TODOS LOS CAMPOS SON REQUERIDOS";
            return redirect()->to(site_url('/animales/registro'))->with('mensaje',$mensaje);
            //echo("TIENES DATOS PENDIENTES, TODOS LOS CAMPOS SON REQUERIDOS");
        }


        /*//3. crear un arreglo asociativo con los datos del punto 1
        
        print_r($datos);//------------------------*/

    }

    public function buscar(){
        try{

            $modelo=new AnimalModelo();
            $resultado=$modelo->findAll();
            $animales=array('animales'=>$resultado);
            return view('listaAnimales',$animales);
            
        }catch(\Exception $error)
        {
            return redirect()->to(site_url('/animales/registro'))->with('mensaje',$error->getMessage());
        }
    }

    public function eliminar($id){

        try{
            $modelo=new AnimalModelo();
            $modelo->where('id',$id)->delete();
            return redirect()->to(site_url('/animales/registro'))->with('mensaje',"Exito eliminando el producto");

        }catch(\Exception $error)
        {
            return redirect()->to(site_url('/animales/registro'))->with('mensaje',$error->getMessage());
        }
    }

    public function editar($id){
        try{
            //recibimos los datos
            $nombre=$this->request->getPost("nombre");
            $edad=$this->request->getPost("edad");
            $descripcion=$this->request->getPost("descripcion");
            

            //validación de datos

            //organizo los datos en un array asociativo
            $datos=array(
                "nombre"=>$nombre,
                "edad"=>$edad,
                "descripción"=>$descripcion,
            );
            //echo("estamos editando el producto".$id);
            //print_r($datos);
            
        }catch(\Exception $error)
        {
            return redirect()->to(site_url('/animales/registro'))->with('mensaje',$error->getMessage());
        }

        try{

            $modelo=new AnimalModelo();
            $modelo->update($id,$datos);
            return redirect()->to(site_url('/animales/registro'))->with('mensaje',"Exito editando el Animal");

        }catch(\Exception $error)
        {
            return redirect()->to(site_url('/animales/registro'))->with('mensaje',$error->getMessage());
        }
    }

    public function buscarperro(){
        try{

            $modelo=new AnimalModelo();
            $resultado=$modelo->findAll();
            $animales=array('animales'=>$resultado);
            return view('listarPerro',$animales);
            
        }catch(\Exception $error)
        {
            return redirect()->to(site_url('/animales/registro'))->with('mensaje',$error->getMessage());
        }
    }

    public function buscargato(){
        try{

            $modelo=new AnimalModelo();
            $resultado=$modelo->findAll();
            $animales=array('animales'=>$resultado);
            return view('listarGato',$animales);
            
        }catch(\Exception $error)
        {
            return redirect()->to(site_url('/animales/registro'))->with('mensaje',$error->getMessage());
        }
    }

    public function buscarave(){
        try{

            $modelo=new AnimalModelo();
            $resultado=$modelo->findAll();
            $animales=array('animales'=>$resultado);
            return view('listarAve',$animales);
            
        }catch(\Exception $error)
        {
            return redirect()->to(site_url('/animales/registro'))->with('mensaje',$error->getMessage());
        }
    }

    public function buscarreptil(){
        try{

            $modelo=new AnimalModelo();
            $resultado=$modelo->findAll();
            $animales=array('animales'=>$resultado);
            return view('listarReptil',$animales);
            
        }catch(\Exception $error)
        {
            return redirect()->to(site_url('/animales/registro'))->with('mensaje',$error->getMessage());
        }
    }

    public function buscarcaballo(){
        try{

            $modelo=new AnimalModelo();
            $resultado=$modelo->findAll();
            $animales=array('animales'=>$resultado);
            return view('listarCaballo',$animales);
            
        }catch(\Exception $error)
        {
            return redirect()->to(site_url('/animales/registro'))->with('mensaje',$error->getMessage());
        }
    }
}
