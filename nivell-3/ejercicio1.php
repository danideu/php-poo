<?php
/* Crea un projecte Bancs, afegeix a el projecte una classe Account amb atributs per número de compte, nom i cognoms de el client i el saldo actual. Defineix en la classe els següents mètodes:

Constructor que inicialitzi els atributs.
Crea el mètode deposit($amount) que permet ingressar una quantitat al compte.
Crea el mètode withdraw($amount) que permet retirar una quantitat del compte sempre que hi hagi saldo, si no n'hi ha el mètode haurà de retornar un missatge d'error
Getters i Setters.
Crea una petita interfície amb ajuda d'HTML I CSS que permeti ingressar una quantitat i dipositar o retirar el saldo del compte.

Fes les validacions pertinents per assegurar que la quantitat ingressada per l'usuari és correcta. */

session_start();
$_SESSION['amount'] = 0;

class Account{
    private $cuenta;
    private $nombre;
    private $apellidos;
    private $saldo;

    public function __construct($cuenta, $nombre, $apellidos, $saldo){
        $this->cuenta = $cuenta;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->saldo = $saldo;

        echo '<h1>Cuenta Bancaria</h1>';
        echo '<strong>Número de Cuenta: ' . $this->cuenta . '</strong><br>';
        echo '<strong>Titular: ' . $this->nombre . $this->apellidos . '</strong><br>';
        echo '<strong>Saldo Actual: ' . $this->saldo . '</strong><br>';
        echo '<br><br>';
    }

    public function getSaldo() {
        return $this->saldo;
    }
    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    function deposit($ingreso){
        echo '->Ingresa: ' . $ingreso . '<br>';
        $_SESSION['amount'] += $ingreso;
        $acumulado = $this->saldo + $_SESSION['amount']; 
        echo 'El saldo acumulado es: ' . $acumulado . '<br>';
    }

    function withdraw($retira){
        if ($_SESSION['amount'] > $retira){
            echo '->Retira: ' . $retira . '<br>';
            $_SESSION['amount'] -= $retira;
            $acumulado = $this->saldo + $_SESSION['amount']; 
            echo 'El saldo acumulado es: ' . $acumulado . '<br>';
        }else{
            echo "<p style='color:red'>Lo sentimos, no hay suficiente saldo.</p>";
        }
    }
    
}

$miCuenta = new Account('0021', 'Dani', 'Deudero', 1000 );
$miCuenta->deposit(500);
$miCuenta->deposit(100);
$miCuenta->withdraw(2000);
$miCuenta->deposit(2300);

?>