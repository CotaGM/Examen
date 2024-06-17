<?php
require_once "tienda.php";
require_once "joyas.php";

//instanciacion objetos joyas

$joya1 = new Joya ("Carolina", 300, Tipo::pulsera, 30, Material::oro);
$joya2 = new Joya ("Ana", 500, Tipo::anillo, 50, Material::plata);
$joya3 = new Joya ("Marisol", 400, Tipo::pendientes, 100, Material::oro);
$joya4 = new Joya ("Bianca", 70, Tipo::reloj, 40, Material::oro);
$joya5 = new Joya ("Carmen", 50, Tipo::collar, 70, Material::oro);

//instanciacion tienda
$tienda = new Tienda();
//mejor hacerlo en una funcion 
$tienda -> inventario= [$joya1, $joya2, $joya3, $joya4, $joya5];

//llamada de metodos
echo $tienda -> getPrecioIgualMenor(300). "<br>";

echo $tienda -> getTipoJoya(Tipo::anillo);

?>