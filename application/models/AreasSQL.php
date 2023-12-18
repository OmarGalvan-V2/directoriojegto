<?php

class AreasSQL extends CI_Model
{

    function __construct()
    {
        $this->load->database();
    }

    function MostrarArea()
    {
        $query = $this->db->get('areajuventudes');
        if ($query->num_rows() > 0)
            return $query;
        else
            return false;
    }

    function MostrarIDArea($ID)
    {
        $this->db->where('ID', $ID);
        $query = $this->db->get('areajuventudes');
        if ($query->num_rows() > 0)
            return $query;
        else
            return false;
    }

    function getAreas()
    {
        $query = 'select * from areajuventudes';
        $resultado = $this->db->query($query);
        return $resultado->result_array();
    }


    function AreaJoin()
    {
        $query = 'SELECT empl.ID, empl.Nombre , empl.Apellido , empl.Materno, empl.Correo ,empl.Extension, empl.Status , Ar.Area 
                  from empleadojuventudes empl 
                  INNER JOIN areajuventudes Ar ON Ar.ID = empl.Area';

        $resultado = $this->db->query($query);
        return $resultado->result_array();
    }
}
