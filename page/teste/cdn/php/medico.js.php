<?php

require_once "../../../../class/ConDB.class.php";

$medico = new Medico;

print $medico->cadastrarMedico($_POST['nome']);
