<?php
//Programa para imprimir mensaje de Bienvenida
//Creado por Airis Vianey Villalobos Sosa
//Fecha: 09/09/2025
//appweb1.php
class texto
{
    public $texto1=" Bienvenidos a Programacion de App Web";
    public function imprimirtexto()
    {
        echo $this->texto1."<br>";
        print $this->texto1;
    }
}
$obj1=new texto; //crea una copia de clase que tiene texto y lo imprime
$obj1->imprimirtexto();
?>