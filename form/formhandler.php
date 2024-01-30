<?php

// var_dump($_SERVER["REQUEST_METHOD"]);
//

//checks if something has been set currently
//checks for post superglobal. Not the best way to do it though...
// if(isset($_POST["submit"])) {  
// }



//everytime you submit data, you want to run this condition, bc it has to be checked eveyr single time
if($_SERVER["REQUEST_METHOD"] == "POST") {  
    //grab the data from the data
    //however this is an insecure way

    // $firstname = $_POST["firstName"];
    //we ALWAYS want to sanitize data in case of cross site scripting (inject javascriptm, etc)
    //rule of thumb: never trust data submitted by user
    


    $firstName = htmlspecialchars($_POST["firstName"]);
    // sends it as html entities rather than code
    $lastName = htmlspecialchars($_POST["lastName"]);
    $favoriteGame = htmlspecialchars($_POST["favoriteGame"]);

    if (empty($firstName)) {
        exit();
    }
    if (empty($lastName)) {
        exit();
    }

    echo "This is the data that the user submitted:";
    echo "<br>";
    echo $firstName;
    echo "<br>";
    echo $lastName;
    echo "<br>";
    echo $favoriteGame;

    header("Location: ../formindex.php");
} else {
    header("Location: ../formindex.php");
    //else is kind of a failsafe if the if statement is false. 
}

?>


<!-- get, ofc, typically for showing something to show user etc etc -->
<!-- post typically for submit data -->


<!-- form folder ofc, in practice, supposed to be a private directory in server -->