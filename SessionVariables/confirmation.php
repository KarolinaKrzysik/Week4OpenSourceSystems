<?php 
    session_start();
    echo "<h2>Your order quantity is $_SESSION[select_quantity]</h2><br/>";
    echo "<h2>and the selected colour is $_POST[selcolour]</h2>";
?>