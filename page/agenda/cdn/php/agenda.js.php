<?php

require_once "../../../../class/ConDB.class.php";

$angeda = new agenda;

print $angeda->Agendar($_POST['paciente'],$_POST['medico'],$_POST['usuario'],$_POST['data']);
