<?php
require_once 'models/Divers.php';
require_once 'template/header.php';

//$config = new Database();

$divers = new Divers();

var_dump($divers->findAllCities());

require_once 'template/footer.php';
?>



