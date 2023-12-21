<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CRUDEP extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('CRUDESQL');
        $this->load->helper('url', 'form');
    }

    function Insertar()
    {
        $Errores = RulesForm($this);
        if ($Errores['ok'] == 2) {
            echo json_encode(
                array(
                    'ok' => false,
                    'Errors' => $Errores['Errors']
                ),
            );
            return false;
        } else {
            $data = array(
                'Nombre' => $this->input->post('Nombre'),
                'Apellido' => $this->input->post('Apellido'), //Paterno
                'Materno' => $this->input->post('Materno'),
                'Correo' => $this->input->post('Correo'),
                'Extension' => $this->input->post('Extension'),
                'Area' => $this->input->post('Area'),
                'Status' => $this->input->post('Status')
            );
            $respuesta = $this->CRUDESQL->InsertarDB($data);
            echo json_encode($respuesta);
        }
    }

    function Actualizar()
    {
        $Errores = RulesEdit($this);
        if ($Errores['ok'] == 2) {
            echo json_encode(
                array(
                    'ok' => false,
                    'Errors' => $Errores['Errors']
                ),
            );
            return false;
        } else {
            $id = $this->input->post('ID');
            $data = array(
                'Nombre' => $this->input->post('Nombre'),
                'Apellido' => $this->input->post('Apellido'), //Paterno
                'Materno' => $this->input->post('Materno'),
                'Correo' => $this->input->post('Correo'),
                'Extension' => $this->input->post('Extension'),
                'Area' => $this->input->post('Area'),
            );
            $respuesta = $this->CRUDESQL->ActualizarDB($id, $data);
            echo json_encode($respuesta);
        }
    }
}