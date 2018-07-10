<?php

require_once "../../../../class/ConDB.class.php";

$medico = new Medico;

print $medico->cadastrarPaciente($_POST['medico']);

