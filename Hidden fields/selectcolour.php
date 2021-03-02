<html>
    <head>
        <title>Select colour Page</title>
    </head>
    <body>
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
            <input type = "hidden" name = "hiddenqty" value = "<?php echo $_POST["selqty"]?>"/>
        </form>
    </body>
</html>