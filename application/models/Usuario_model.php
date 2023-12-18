<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario_model extends CI_Model
{

    function Login($usuario, $password)
    {
        $Resultado = $this->db->query("select * from administraciongto where Usuario = '" . $usuario . "' and Password = '" . $password . "'");
        return $Resultado->result_array(); //Convierte el array en una consulta

    }
}
