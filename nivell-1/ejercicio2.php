<?php
/* Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().

A l'arxiu main defineix dos objectes, un triangle i un rectangle i truca al mètode area de cadascun. */


/* Referencia: https://es.stackoverflow.com/questions/227689/uso-de-parent-construct-en-php-para-pasar-argumentos-adicionales-a-una-clas
Referencia2: http://programandolo.blogspot.com/2013/08/php-orientado-objetos-herencia.html */

class Shape{

    public $ancho;
    public $alto;

    function __construct($ancho, $alto){
        $this->ancho = $ancho;
        $this->alto = $alto;
    }
}

class Triangle extends Shape{
    public $calculo;

    function calcularArea(){  
        $calculo = ($this->ancho * $this->alto) / 2;
        echo "El area del triangulo es: " . $calculo . "<br>";
    }
}

class Rectangle extends Shape{
    public $calculo;

    function calcularArea(){  
        $calculo = $this->ancho * $this->alto;
        echo "El area del triangulo es: " . $calculo . "<br>";
    }
}

$triangulo = new Triangle(100,400);
$triangulo->calcularArea();

$rectangulo = new Rectangle(5,8);
$rectangulo->calcularArea();

?>