<?php


/* 
Immaginiamo le classi per modellizzare un personal computer.
Un computer desktop é un computer.
Un computer portatile é un computer.
Creiamo la classe computer come parent class ed estendiamola per le classi desktop e laptop.
Creiamo un set di dati in forma di array di oggetti e stampiamoli a schermo in una card usando bootstrap.
Nella card, indichiamo anche che tipo di prodotto stiamo visualizzando (desktop, laptop) creando un apposito metodo poliforfo in ciascuna sottoclasse.
BONUS:
pensate a cosa compone un pc: 'ha un' monitor? 'ha una' mbo? 'ha una' keyboard? usate la composizione per indicare costruire appropriatamente le istanze.
aggiungere un metodo che stampi la stringa con tutte le info del dispositivo (oltre ai getter/setters necessari).
*/

require_once __DIR__ . '/Models/Computer.php';
require_once __DIR__ . '/Models/laptop.php';




$computer = new Computer('gf63', 'MSI', '500gb', 'Nvidia ge-force 1050x', 18);

$laptop = new Laptop('gf773', 'MSI', '1000gb', 'Nvidia ge-force 3050', 36,'18inch', 'qwerty mechanics', '1080p', '20000mah');

var_dump($computer);
var_dump($laptop);