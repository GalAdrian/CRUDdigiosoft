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
        return view('registro', $data);
    }

    public function crear()
    {
        // Verificar si los campos necesarios están definidos y no están vacíos
        if (
            isset($_POST['nombre'], $_POST['apellido'], $_POST['rfc'], $_POST['email'], $_POST['telefono']) &&
            !empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['rfc']) &&
            !empty($_POST['email']) && !empty($_POST['telefono'])
        ) {

            // Si todos los campos necesarios tienen valores, proceder con la inserción
            $datos = [
                "nombre" => $_POST['nombre'],
                "apellido" => $_POST['apellido'],
                "rfc" => $_POST['rfc'],
                "email" => $_POST['email'],
                "telefono" => $_POST['telefono']
            ];

            $Crud = new CrudModel();
            $respuesta = $Crud->insertar($datos);

            if ($respuesta > 0) {
                return redirect()->to(base_url() . '/')->with('mensaje', '1');
            } else {
                return redirect()->to(base_url() . '/')->with('mensaje', '0');
            }
        } else {
            // Si algún campo está vacío, redirigir de vuelta con un mensaje de error
            return redirect()->to(base_url() . '/')->with('mensaje', '99');
        }
    }

    public function actualizar()
    {
        // Verificar si los campos necesarios están definidos y no están vacíos
        if (
            isset($_POST['nombre'], $_POST['apellidos'], $_POST['rfc'], $_POST['email'], $_POST['telefono']) &&
            !empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['rfc']) &&
            !empty($_POST['email']) && !empty($_POST['telefono'])
        ) {

            // Si todos los campos necesarios tienen valores, proceder con la actualización
            $datos = [
                "nombre" => $_POST['nombre'],
                "apellido" => $_POST['apellidos'],
                "rfc" => $_POST['rfc'],
                "email" => $_POST['email'],
                "telefono" => $_POST['telefono']
            ];

            $idNombre = $_POST['idNombre'];
            $Crud = new CrudModel();
            $res = $Crud->actualizar($datos, $idNombre);

            if ($res) {
                return redirect()->to(base_url() . '/')->with('mensaje', '2');
            } else {
                return redirect()->to(base_url() . '/')->with('mensaje', '3');
            }
        } else {
            // Si algún campo está vacío, redirigir de vuelta con un mensaje de error
            return redirect()->to(base_url() . '/')->with('mensaje', '98');
        }
    }

    public function consulta()
    {
        $Crud = new CrudModel();
        $datos = $Crud->listar();

        $data = [
            "datos" => $datos
        ];
        return view('consulta', $data);
    }

    public function obtenerNombre($idNombre)
    {
        $data = ["idNombre" => $idNombre];
        $Crud = new CrudModel();
        $res = $Crud->obtenerNombre($data);
        $datos = ["datos" => $res];

        return view('actualizar', $datos);
    }



    public function eliminar($idNombre)
    {
        $Crud = new CrudModel();
        $data = ["idNombre" => $idNombre];

        $res = $Crud->eliminar($data);

        if ($res) {
            return redirect()->to(base_url() . '/')->with('mensaje', '4');
        } else {
            return redirect()->to(base_url() . '/')->with('mensaje', '5');
        }
    }
}
