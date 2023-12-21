<?php

function RulesForm($formvalidation){

    $formvalidation->form_validation->set_rules('Nombre', 'Nombre', 'required|trim');

    $formvalidation->form_validation->set_rules('Apellido', 'Apellido', 'required|trim');

    $formvalidation->form_validation->set_rules('Materno', 'Materno', 'required|trim');

    $formvalidation->form_validation->set_rules('Correo', 'Correo', 'required|valid_email|is_unique[empleadojuventudes.Correo]',
    array('is_unique' => 'El correo que intenta ingresar ya esta en uso'));

    $formvalidation->form_validation->set_rules('Area', 'Area', 'required|trim');

    $formvalidation->form_validation->set_rules('Extension', 'Extension', 'required|trim');

    $valid = $formvalidation->form_validation->run();
    if($valid == false){
        $respuesta = array(
            'ok' => 2,
            'Errors' => array_merge($valid = $formvalidation->form_validation->error_array())
        );
        return ($respuesta);
    }else{
        $respuesta = array(
            'ok' => 1,
            'Errors' => array_merge($valid = $formvalidation->form_validation->error_array())
        );
        return ($respuesta);
    }
}

function RulesEdit($formvalidation){

    $formvalidation->form_validation->set_rules('Nombre', 'Nombre', 'required|trim');

    $formvalidation->form_validation->set_rules('Apellido', 'Apellido', 'required|trim');

    $formvalidation->form_validation->set_rules('Materno', 'Materno', 'required|trim');

    $formvalidation->form_validation->set_rules('Correo', 'Correo', 'required|valid_email');

    $formvalidation->form_validation->set_rules('Area', 'Area', 'required|trim');

    $formvalidation->form_validation->set_rules('Extension', 'Extension', 'required|trim');

    $valid = $formvalidation->form_validation->run();
    if($valid == false){
        $respuesta = array(
            'ok' => 2,
            'Errors' => array_merge($valid = $formvalidation->form_validation->error_array())
        );
        return ($respuesta);
    }else{
        $respuesta = array(
            'ok' => 1,
            'Errors' => array_merge($valid = $formvalidation->form_validation->error_array())
        );
        return ($respuesta);
    }
}
