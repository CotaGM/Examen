<?php

enum Material: string{

    case oro = "oro";
    case plata = "plata";
    case platino = "platino";

    public function getDescripcion(): string{
      return match($this){
        self::oro => "oro del Perú",
        self:: plata => "plata de Paraguay",
        self::platino => "platino de Asia"
      };
    }
}
?>