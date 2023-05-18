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
require_once __DIR__ . '/Models/Laptop.php';
require_once __DIR__ . '/Models/Desktop.php';


$computers = [
  

  new Laptop('Laptop', 'gf773', 'MSI', '1000gb', 'Nvidia ge-force 3050', 36,'18inch', 'qwerty mechanics', '1080p', '20000mah'),

  new Desktop('Desktop', 'model-X', 'tesla', '500tb', 'Nvidia ge-force gtx5000', 100, 'Asus ROG 750w', 'corsair 4000-D', 20)

];





?>

<!DOCTYPE html>
<html lang="en">
<head>
   <style>
              header{
            background-color: red;
            box-shadow: 0 0 20px black;
            height: 100px;
            position: sticky;
             top: 0;
             left: 0;
             z-index: 100;

       
        }
      
        .my_card{
            box-shadow: 0 5px 15px black;
           
        }
        .my_head{
            font-weight: 900;
             color: black;
             
        }
        .my_img{
         height: 300px;
         width: 300px;
        }
   
   </style>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>

</head>
<body>


   <header class="py-5 d-flex">

      <h1 class="my_head text-center align-self-center ms-5">PC BOOL-SHOP</h1>

   </header>

   <main>
        <div class="container">
            <div class="row row-cols-3 justify-content-evenly ">
               

            <?php foreach ($computers as $computer) : ?>  
                  <div class="card my_card mt-5 d-flex flex-column gap-2">
                  
                    <div class="card-header my_card_header d-flex justify-content-center">
                    <img class="my_img" src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body d-flex flex-column gap-2">
                      <h3 class="card-title"><?= $computer->model; ?>  </h3>
                      <h5 class="card-subtle"><?= $computer->manufacturer; ?> </h5>
                      <h6 class="card-subtle"><?= $computer->type; ?> </h6>
                      <p class="card-text">Storage Capacity:<?= $computer->storage_capacity; ?></p>
                      <p class="card-text">GPU:<?= $computer->gpu; ?></p>
                      <p class="card-text">RAM:<?= $computer->ram; ?></p>
                      <?php if ($computer->type === 'Laptop') : ?>
                      <p class="card-text">Monitor Size:<?= $computer->monitor_size; ?></p>
                      <p class="card-text">Keyboard:<?= $computer->keyboard; ?></p>
                      <p class="card-text">Cam:<?= $computer->cam; ?></p>
                      <p class="card-text">Battery Capacity:<?= $computer->battery_capacity; ?></p>
                     
                     <?php else : ?>
                        <p class="card-text">Power Supply:<?= $computer->power_supply; ?></p>
                      <p class="card-text">Case Model:<?= $computer->case_model; ?></p>
                      <p class="card-text">Weight:<?= $computer->weight; ?></p>
                      <?php endif; ?>
                    </div>
                   
                  </div>
                  <?php endforeach; ?>
               
            </div>
        </div>

   </main>

   
</body>
</html>