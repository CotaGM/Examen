<?php
require_once "joyas.php";

class Tienda{

public array $inventario;

  public function __construct(){
    $this -> inventario =[]; 
  }
  
  //Método encontrar por precio un producto menor o igual al precio ingresado
  public function getPrecioIgualMenor(float $precio): string{
    foreach ( $this -> inventario as $producto){
      if ( $producto -> getPrecio() <= $precio){
      return "Según el precio ingresado se encontró el producto de nombre ". $producto -> getNombre();
      }  
    }
  return "no hay ningun producto según el precio ingresado";
  }
  
  //Método encontrar según tipo nombre de producto
  public function getTipoJoya(Tipo $objeto):string{
    foreach ( $this -> inventario as $producto){
      if ($producto -> getTipo() === $objeto){
      return "Según el tipo ingresado se ha encontrado el producto de nombre ". $producto -> getNombre();
      }
    }
  return "No se ha encontrado ningún producto del tipo ingresado";
  }
}
?>