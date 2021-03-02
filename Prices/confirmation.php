<?php 
    $total = $_COOKIE["select_quantity"] * $_COOKIE["price"];
    echo "<h2>Your order quantity is $_COOKIE[select_quantity]</h2>";
    echo "<h2>and the selected colour is $_POST[selcolour].</h2><br/>";
    echo "<h2>The total for your order is £$total.</h2>";
?>