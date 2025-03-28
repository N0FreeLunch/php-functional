<?php

function getPrices1(array $products) {
  $prices = [];
  foreach($products as $p) {
    if($p->stock > 0) {
      $prices[] = $p->price;
    }
  }
  return $prices;
}

function getPrices2(array $products) {
  $prices = [];
  foreach($products as $p) {
    if($p->stock > 0) {
      $prices[] = $p->price;
    }
  }
  return $prices;
}

class Product
{
  public readonly int $price;
  public readonly int $stock;

  public function setRandomPrice(): self
  {
    $this->price = mt_rand(1000, 9999);
    return $this;
  }

  public function setRandomStock(): self
  {
    $this->stock = mt_rand(0, 100);
    return $this;
  }
}

$products = [
  (new Product)->setRandomPrice()->setRandomStock(),
  (new Product)->setRandomPrice()->setRandomStock(),
  (new Product)->setRandomPrice()->setRandomStock(),
  (new Product)->setRandomPrice()->setRandomStock(),
  (new Product)->setRandomPrice()->setRandomStock(),
];

$result1 = getPrices1($products);

var_dump($result1);

$result2 = getPrices2($products);

var_dump($result2);
