<?php

class Contact extends AppModel
{
    var $name = 'Contact';
    var $useTable = false;

    var $validate = array(
        'name' => array(
            'rule' => 'notEmpty',
            'message' => 'Tienes que introducir tu nombre'
        ),
        'email' => array(
            'rule' => 'email',
            'message' => 'Tienes que introducir un email válido'
        ),
        'message' => array(
            'rule' => 'notEmpty',
            'message' => 'Tienes que escribir tu consulta para que podamos responderte'
        )
    );
}