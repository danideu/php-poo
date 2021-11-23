<?php

/* Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures: As, K, Q, J, 7 i 8.
Crea el mètode throw que no fa altra cosa que tirar el dau, és a dir, genera un valor aleatori per a l'objecte a què se li aplica el mètode.
Crea també el mètode shapeName, que digui quina és la figura que ha sortit en l'última tirada de el dau en qüestió.
Crea finalment el mètode getTotalThrows que ha de mostrar el nombre total de tirades entre tots els daus.
Realitza una aplicació que permeti tirar cinc daus de pòquer alhora. */

session_start();
$_SESSION['tiradas'] = 0; 

class PokerDice{
    public $dados = ['AS','K','Q','J','7','8'];
    public $jugadas = array();
    public $tirar;
    public $jugada_completa;

    function __construct(){
        $this->tiradas=$_SESSION['tiradas'];
    }

    function throw(){
        $this->tirar = $this->dados[array_rand($this->dados)];
        $this->tiradas += 1;
    }

    function shapeName(){
        array_push($this->jugadas,$this->tirar);
    }

    function getTotalThrows(){
        $this->jugada_completa = implode('- ', $this->jugadas);
        echo 'La tirada completa ha sido: ' . $this->jugada_completa . '<br>';
        echo 'Se han realizado ' . $this->tiradas . ' tiradas<br>';
    }
}

$jugar = new PokerDice();
$jugar->throw();
$jugar->shapeName();
$jugar->throw();
$jugar->shapeName();
$jugar->throw();
$jugar->shapeName();
$jugar->throw();
$jugar->shapeName();
$jugar->throw();
$jugar->shapeName();
$jugar->getTotalThrows();


?>