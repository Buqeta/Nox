<?php

$p = new ProductManagement();

$products = $p->getProducts();

print_r($products);

for($i = 0; $i < count($products); $i++){
    echo $products[$i]['ProductID'] .'<br>';
}
// echo "<br><br>";
// print_r($products[0]['ProductID']);

// echo $products[0]['ProductID'];