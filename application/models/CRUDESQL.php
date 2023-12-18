<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CRUDESQL extends CI_Model {

    function __construct()
    {
        $this->load->database();
    }

    function InsertarDB($data)
    {
        $this->db->Insert('empleadojuventudes', $data);
        return array(
            'ok' => ($this->db->affected_rows() != 1) ? false : true,
            'Errors' => ($this->db->affected_rows() != 1) ? $this->db->error() : '',
        );
    }

    function ActualizarDB($id,$data)
    {
        $this->db->where('ID', $id);
        $this->db->update('empleadojuventudes', $data);
        return array(
            'ok' => ($this->db->affected_rows() != 1) ? false : true,
            'Errors' => ($this->db->affected_rows() != 1) ? $this->db->error() : '',
        );
    }

    function getDatos($id)
    {
        $query = 'select * from empleadojuventudes where ID = '.$id;
        $resultado = $this->db->query($query);
        return $resultado->result_array();
    }
    
    // Esta función actualiza el estado de un empleado por su ID.
    public function actualizar_estado($ID, $data) {
        $this->db->where('ID', $ID);
        $this->db->update('empleadojuventudes', $data);

        // Verificar si la actualización fue exitosa
        if ($this->db->affected_rows() > 0) {
            echo 'Actualización exitosa';
        } else {
            echo 'La actualización no tuvo efecto';
        }
    }
}