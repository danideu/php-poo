<?php
/* Crea una classe Employee defineix com a atributs el seu nom i sou. Definir un mètode initialize que rebi com a paràmetres el nom i sou. Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha o no pagar impostos (si el sou supera 6000 paga impostos). */

class Employee{
    private $nombre;
    private $sueldo;

    function initialize($nombre, $sueldo){
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    function print(){
        echo 'El nombre es: ' . $this->nombre . ' y tiene un sueldo de: ' . $this->sueldo . ' €<br>';
    }
}

$trabajador = new Employee;
$trabajador->initialize("Dani", 1000);
$trabajador->print();

$trabajador2 = new Employee;
$trabajador2->initialize("Luis", 1500);
$trabajador2->print();

?>