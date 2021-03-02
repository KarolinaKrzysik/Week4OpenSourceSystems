<html>
    <head>
        <title>Select size Page</title>
    </head>
    <body>
        <?php 
            $cookie_name = "select_quantity";
            setcookie($cookie_name, $_POST["selqty"]);
        ?>
        <form action = "selectcolour.php" method = "POST">
            Select the size for the <?php echo $_POST["selqty"]?> widgets you are ordering
            <select name = "selsize">
                <option>Small</option>
                <option>Medium</option>
                <option>Large</option>
                <option>Extra Large</option>
            </select>
            <br/><br/>
            <input type = "submit" value = "Buy"/>
        </form>
    </body>
</html>