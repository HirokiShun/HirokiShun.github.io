<?php

require_once('php/Model/ModProducto.php');

$Producto= new Producto();
$productList= $Producto->GetProducts();


?>