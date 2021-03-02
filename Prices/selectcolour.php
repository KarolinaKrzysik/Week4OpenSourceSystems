<html>
    <head>
        <title>Select colour Page</title>
    </head>
    <body>
        <?php 
            $cookie_name = "select_quantity";
            $cookie2_name = "price";
            setcookie($cookie_name, $_POST["selqty"]);
            setcookie($cookie2_name, $_POST["txtprice"]);
        ?>
        <form action = "confirmation.php" method = "POST">
            Select the colour for the <?php echo $_POST["selqty"]?> widgets you are ordering
            <select name = "selcolour">
                <option>white</option>
                <option>red</option>
                <option>yellow</option>
                <option>green</option>
                <option>blue</option>
            </select>
            <br/><br/>
            <input type = "submit" value = "Buy"/>
        </form>
    </body>
</html>