<?php
  function purchase( $id ){
    include '../../models/models.php';

    $buy = new Buy();
    $buy->purchase( $id );

    $message = 'Product purchased succesfully!';
    header("Location: ../../cart.php?message={$message}");
  }

  purchase( $_GET['id'] );
?>