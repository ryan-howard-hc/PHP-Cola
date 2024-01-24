<?php
// db connection
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mydatabase";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// checking connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// a function to get the users data from the database
function getUserData($userId) {
    global $conn;
    $sql = "SELECT * FROM users WHERE id = $userId";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}

// bs data
$userId = 1;
$userData = getUserData($userId);

// basic html output
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Interview Example</title>
</head>
<body>
    <h1>Hello, <?php echo $userData['name']; ?>!</h1>
    
    <p>Your age is <?php echo $userData['age']; ?>.</p>

    <h2>Colors:</h2>
    <ul>
        <?php
        //array example....
        $colors = array("red", "green", "blue");
        foreach ($colors as $color) {
            echo "<li>$color</li>";
        }
        ?>
    </ul>

    <h2>Car Details:</h2>
    <?php
    // class/object example...
    class Car {
        public $color;

        public function honk() {
            echo "Beep beep!";
        }
    }

    $myCar = new Car();
    $myCar->color = "blue";

    echo "<p>The car color is {$myCar->color}.</p>";
    ?>

    <h2>Current Date and Time:</h2>
    <?php
    // date/time example...
    $currentDateTime = date("Y-m-d H:i:s");
    echo "<p>Current date and time: $currentDateTime</p>";
    ?>

</body>
</html>

<?php
// close database connection
mysqli_close($conn);
?>