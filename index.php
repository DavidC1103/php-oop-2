<?php

require_once __DIR__ . '/models/categories/Food.php';
require_once __DIR__ . '/models/categories/Toys.php';
require_once __DIR__ . '/models/categories/Kennels.php';

$cani = [
    new Food('Cibo per cani', 'https://www.foodpet.it/wp-content/uploads/2022/02/luscious_lamb_pork_2160x.jpg', '12.99$', 'Cani', '12kg', 'Manzo'),
    new Toys('Giochi per cani', 'https://www.petfashionstore.it/wp-content/uploads/2021/12/rew1.jpg', '3.99$', 'Cani', 'Rosso','Silicone'),
    new Kennels('Cuccia per cani', 'https://croci.net/wp-content/uploads/2020/09/Cuccia_per_cani_Chalet.jpg', '19.99$', 'Cani', '130cm','Silicone'),
];
$cani[0]-> setWeight('12 kg');
$cani[0]-> setTaste('Manzo');
$cani[1]-> setColor('Rosso');
$cani[1]-> setMaterials('Silicone');
$cani[2]-> setHeight('130 cm');
$cani[2]-> setMaterials('Legno');

var_dump($cani[0]->getWeight());
var_dump($cani[0]->getTaste());
var_dump($cani[1]->getColor());
var_dump($cani[1]->getMaterials());
var_dump($cani[2]->getHeight());
var_dump($cani[2]->getMaterials());

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
    <title>PHP OOP 2</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center my-5">PHP OOP 2</h1>
        <span class="fs-3">Cani</span>
        <div class="row text-center g-5">
            <?php foreach($cani as $cane): ?>
                <div class="col-4 mt-5 border rounded-4 p-0">
                    <div class="fs-3"><?php echo $cane->name ?></div>
                   <img src="<?php echo $cane->poster ?>" alt="" class="w-25">
                   <ul style="list-style: none;" class="text-start">
                        <li><?php echo 'Peso: ' . $cane->getWeight()?></li>
                        <li><?php echo 'Gusto: ' . $cane->getTaste()?></li>
                        <li><?php echo 'Colore: ' . $cane->getColor()?></li>
                        <li><?php echo 'Materiale: ' . $cane->getMaterials()?></li>
                        <li><?php echo 'Altezza: ' . $cane->getHeight()?></li>
                        <li><?php echo 'Materiale: ' . $cane->getMaterials()?></li>
                   </ul> 
                </div>
            <?php endforeach; ?>
        </div>

    </div>

    
</body>
</html>