<?php
  include_once "../../config.php";
  get_file("models/models");

  function updateController(){
    $product = new Product();
    $product->update();
  }

  updateController();
?>
