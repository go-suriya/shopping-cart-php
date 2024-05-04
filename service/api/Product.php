<?php

class Product
{
  public $name = null;
  public $price = null;

  public function __construct($name, $price)
  {
    $this->name = $name;
    $this->price = $price;
  }

  public function showProduct()
  {
    echo "{$this->name} <br> {$this->price} <hr>";
  }
}

$product = new Product('ดินปลูกไม้น้ำ', 100);
$product2 = new Product('หินใหญ่แต่งตู้', 50);

$product->showProduct();
$product2->showProduct();
