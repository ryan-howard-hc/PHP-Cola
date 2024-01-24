
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Cola: The Refresher</title>
</head>
<body>

<!-- <p>html blah <?php echo "awesome";?> blah</p> -->
<?php if (true) { ?>
<!-- basic string-->
<!-- <p>html blah blah</p> -->

<?php } ?>

<!-- <?php 
$name = "Ryan Howard";
echo $name;
$test = $name;
?> -->

<?php 
//scalar types
// $string ='Ryan';
// $int = 123;
// $float = 2.232323232;
// $bool=true;
// //array types  
// $array = ['ry', 'mark', 'jeff'];
// $array = array('yes','no','maybe');
//object types
// $object = new Car();
// $object = null;
?>
<!-- <p>Hi my name is <?php echo $name ?>, and im refreshing my PHP knowledge. yeye</p> -->

<?php  
// echo $_SERVER["DOCUMENT_ROOT"];
// echo "<br>";
// echo $_SERVER["PHP_SELF"];
// echo "<br>";
// echo $_SERVER["SERVER_NAME"];
// echo "<br>";
// echo $_SERVER["REQUEST_METHOD"];
?>

<?php

//SUPERGLOBALZ

// echo $_GET["name"];
// echo "<br>";
// echo $_GET["eyecolor"];
// accessing data inside URL which couldve been submitted

// echo $_POST[""];

//echo $_REQUEST[""];

// echo $_FILES['name'];
//allow for us to grab information about files  that user submitted using an html form  

// echo $_COOKIE['name'];
// embedded file in users pc,  bunc hof info stored on users pc,,, ofc ofc

// $_SESSION ["username"] = "Howie";
// echo $_SESSION['username'];
// storing info about user inside this session which is on the server side
// ie , if i close down browser, and close down session, it will forget about this session variable
//Unless i set it again inside the website

// $_ENV[""];
//very sensitive data that you want to have inside particular env that user's working in
//ie data that should not be accessible to the user or other environments...

// $_GLOBAL[""];
//way for us to gain access to variables we created from any sort of scope in our code
?>



</body>
</html>

