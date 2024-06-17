<?php
require_once "material.php";
require_once "tipo.php";

//recomendacion de private
//enum de tipo 
class Joya {

  private string $nombre;
  private float $precio;
  private Tipo $tipo;
  private float $peso;
  private Material $material;

  public function __construct(string $nombre, float $precio, Tipo $tipo, float $peso, Material $material ){
    $this -> nombre = $nombre;
    $this -> precio = $precio;
    $this -> tipo = $tipo;
    $this -> peso = $peso;
    $this -> material = $material;
  }

  public function getNombre():string{
    return $this ->nombre;
  }

  public function getPrecio():float{
    return $this ->precio;
  }

  public function getTipo():Tipo{
    return $this ->tipo;
  }

  public function getPeso():float{
    return $this ->peso;
  }

  public function getMaterial():Material{
    return $this ->material;
  }
}
?>