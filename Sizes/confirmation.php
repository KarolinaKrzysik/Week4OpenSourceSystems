<?php 
    $total = 0;
    $value = 0;
    $size = $_COOKIE["select_size"];
    $quantity = $_COOKIE["select_quantity"];

    switch ($size){
        case "Small": $value = 15.75; break;
        case "Medium": $value = 16.75; break;
        case "Large": $value = 17.75; break;
        case "Extra Large": $value = 18.75; break;
        default: break;
    }
    $total = $quantity * $value;
    echo "<h2>Your order quantity is $quantity of $size size widgets</h2>";
    echo "<h2>and the selected colour is $_POST[selcolour].</h2><br/>";
    echo "<h2>The total for your order is £$total.</h2>";
?>