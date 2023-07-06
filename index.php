<?php

class Category {
    private $icon;
    private $name;

    public function __construct($icon, $name) {
        $this->setIcon($icon);
        $this->setName($name);
    }

    public function getIcon() {
        return $this->icon;
    }

    public function setIcon($icon) {
        $this->icon = $icon;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
}

class Product {
    private $name;
    private $weight;
    private $price;
    private $category;

    public function __construct($name, $weight, $price, Category $category) {
        $this->setName($name);
        $this->setWeight($weight);
        $this->setPrice($price);
        $this->setCategory($category);
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory($category) {
        $this->category = $category;
    }
}

class Food extends Product {
    private $expireDate;

    public function __construct($name, $weight, $price, Category $category, $expireDate) {
        parent:: __construct($name, $weight, $price, $category);
        $this->setExpireDate($expireDate);
    }

    public function getExpireDate() {
        return $this->expireDate;
    }

    public function setExpireDate($expireDate) {
        $this->expireDate = $expireDate;
    }
}

class Toy extends Product {
    private $color;
    private $age;

    public function __construct ($name, $weight, $price, Category $category, $color, $age) {
        parent:: __construct($name, $weight, $price, $category);
        $this->setColor($color);
        $this->setAge($age);
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($expcolorireDate) {
        $this->color = $color;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }
}

$dogCategory = new Category("dog", "cane");
$catCategory = new Category("cat", "gatto");
var_dump($dogCategory);

echo "<br>----------------------<br>";

$p1 = new Product("p1", 5, 20, $dogCategory);
var_dump($p1);

echo "<br>----------------------<br>";

$f1 = new Food("Cibo cane", 5, 30, $dogCategory, "10/10/2023");
var_dump($f1);

echo "<br>----------------------<br>";

$t1 = new Toy("Toy1", 1, 20, $catCategory, "green", "1-3");
var_dump($t1);