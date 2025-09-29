<?php
function appel($classe){
    require($classe.".class.php");
}

spl_autoload_register("appel");

$a1 = new Auteur("Stephen","King","1947-09-21");
$l1 = new Livre("Ca", 1138, 1986, 20, $a1);
$l2 = new Livre("Simetierre", 374, 1983, 15, $a1);
$l3 = new Livre("Le Fléau", 823, 1978, 14, $a1);
$l4 = new Livre("Shining", 447, 1977, 16, $a1);

$a1->afficheAge();
var_dump($l1);