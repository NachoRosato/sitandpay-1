<?php
require '../fw/fw.php';
require '../models/Mesas.php';
require '../models/Menus.php';
require '../models/Ordenes.php';
require '../views/ListadoMesas.php';

//traer todas las mesas de la DB
$m = new Mesas();
$mesas = $m->getTodos();

$me = new Menus();
$menus = $me->getTodos();

$o = new Ordenes();
$ordenes = $o->getTodos();
//crear el listado de mesas 
$e = new ListadoMesas();
$e->mesas = $mesas;  //hidratar ambas variables
$e->menus = $menus;
$e->ordenes = $ordenes;
$e->render();
?>