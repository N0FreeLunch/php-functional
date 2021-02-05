<?php
  function getPrices(array $products) {
    $prices = [];
    foreach($products as $p) {
      if($p->stock > 0) {
        $prices[] = $p->price;
      }
    }
    return $price;
  }

  function getPrices(array $products) {
    $prices = [];
    foreach($products as $p) {
      if($p -> stock > 0) {
        $prices[] = $p->price;
      }
    }
    return $prices;
  }

  function my_function ($parameter, $second_parameter) {

  }


  class SomeClass {
    private $some_property;

    public function some_function ()
    {

    }

    static protected function other_function ()
    {

    }
  }
 ?>
