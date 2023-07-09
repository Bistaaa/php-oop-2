<?php

require_once("./models/Category.php");
require_once("./models/Product.php");
require_once("./models/Food.php");
require_once("./models/Toy.php");

$dogCategory = new Category("dog", "Cane");
$catCategory = new Category("cat", "Gatto");

$foods = [
    $f1 = new Food("Cibo cane", 5, 30, $dogCategory, "10/01/2024"),
    $f2 = new Food("Cibo gatto", 1, 20, $catCategory, "10/01/2024"),
];

$toys = [
    $t1 = new Toy("Gioco 1", 1, 20, $catCategory, "blue", "1-3"),
    $t2 = new Toy("Gioco 2", 2, 40, $dogCategory, "green", "3-5")
];