<?php

namespace App\Controllers;

use App\Models\CrudModel;

class Crud extends BaseController
{
    public function index()
    {
        $mensaje = session('mensaje');
        $data = [
            "mensaje" => $mensaje
        ];
         return view('registro',$data);
    }

    public function crear(){
        $datos = [
            "nombre" => $_POST['nombre'],
            "apellido" => $_POST['apellido'],
            "rfc" => $_POST['rfc'],
            "email" => $_POST['email'],
            "telefono" => $_POST['telefono']
        ];

        $Crud = new CrudModel();
        $respuesta = $Crud->insertar($datos);

        if($respuesta > 0){
            return redirect()->to(base_url().'/')->with('mensaje','1');
        }else{
            return redirect()->to(base_url().'/')->with('mensaje','0');
        }


    }

    public function actualizar(){
        $datos = [
            "nombre" => $_POST['nombre'],
            "apellido" => $_POST['apellidos'],
            "rfc" => $_POST['rfc'],
            "email" => $_POST['email'],
            "telefono" => $_POST['telefono']
        ];
        $idNombre = $_POST['idNombre'];
        $Crud = new CrudModel();
        $res = $Crud->actualizar($datos,$idNombre);

        if($res){
            return redirect()->to(base_url().'/')->with('mensaje','2');
        }else{
            return redirect()->to(base_url().'/')->with('mensaje','3');
        }
    }

    public function consulta(){
        $Crud = new CrudModel();
        $datos = $Crud->listar();

        $data = [
            "datos" => $datos
        ];
        return view('consulta',$data);

    }

    public function obtenerNombre($idNombre){
        $data = ["idNombre" => $idNombre];
        $Crud = new CrudModel();
        $res = $Crud->obtenerNombre($data);
        $datos = ["datos" => $res];

        return view('actualizar',$datos);

    }



    public function eliminar($idNombre){

    }
}
