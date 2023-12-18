<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Session extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Usuario_model');
        //$this->load->library('session');

    }

    // Función para validar los datos de inicio de sesión
    function ValidandoDatos()
    {
        $data = $this->input->post(); // Obtener los datos del formulario de inicio de sesión
        
        // Llamar a la función del modelo para verificar el inicio de sesión
        $resp = $this->Usuario_model->Login($data['Usuario'], $data['Password']);

        if (count($resp) > 0) {
            session_start();
            $_SESSION['datos'] = $resp; // Iniciar sesión y almacenar los datos del usuario en la sesión
        } else {
            echo "No se encontraron datos válidos."; // Mostrar un mensaje si no se encontraron datos válidos
        }
    }

    
    // Función para cambiar el estado de un usuario
    function CambiandoEstadoPersonal()
    {
        $id = $this->input->post('ID'); // Obtener el ID del usuario
        $estado = $this->input->post('Status'); // Obtener el nuevo estado

        // Crear un arreglo con el nuevo estado
        $data = array(
            'Status' => $estado
        );

        // Llamar a la función del modelo para actualizar el estado del usuario
        $this->CRUDESQL->actualizar_estado($id, $data);
    }


    function CerrarSesion()
    {
        session_start();
        session_destroy();
        redirect('Welcome/Login');
    }
}
