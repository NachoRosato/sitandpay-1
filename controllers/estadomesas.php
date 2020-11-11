<?php
require '../fw/fw.php';
require '../models/Mesas.php';
require '../views/ListadoMesas.php';

//traer todas las mesas de la DB
$m = new Mesas();
$mesas = $m->getTodos();

$me = new Menus();
$menus = $me->getTodos();

//crear el listado de mesas 
$e = new ListadoMesas();
$e->mesas = $mesas;
$e->render();
?>