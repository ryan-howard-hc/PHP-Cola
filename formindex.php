<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<main>
    <form action ="includes/formhandler.php" method = "post">
        
    <!-- <form action ="<?php echo $_SERVER["PHP_SELF"];?>" method = "post"> -->
        <!-- submit to same page youre inside of. NOT RECOMMENDED, XSS and hacking vulnerable -->
    
        <label for = "firstName"> First name: </label>
        <input id ="firstName" type='text' name = 'firstName' placeholder="...">

        <label for = "lastName"> Surname: </label>
        <input id ="lastName" type='text' name = 'lastName' placeholder="...">

        <label for= 'favoriteGame'>Favorite Game?</label>
        <select id = 'favoriteGame' name = 'favoriteGame'>
            <option value="none">None</option>
            <option value="forza">Forza Motorsports</option>
            <option value="callOfDuty">Call of Duty</option>
            <option value="fallout">Fallout Series</option>

        </select>

        <button type = "submit">Submit</button>
        <button type = "submit" name ="submit">Submit</button>

    </form>

</main>


</body>
</html>