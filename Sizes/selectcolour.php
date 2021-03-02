<html>
    <head>
        <title>Select colour Page</title>
    </head>
    <body>
        <?php 
            $cookie2_name = "select_size";
            setcookie($cookie2_name, $_POST["selsize"]);
        ?>
        <form action = "confirmation.php" method = "POST">
            Select the colour for the <?php echo $_COOKIE["select_quantity"];?> 
            <?php echo $_POST["selsize"]?> widgets you are ordering
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