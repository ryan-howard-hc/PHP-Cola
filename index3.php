
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<p>html blah <?php echo "awesome";?> blah</p>
<?php if (true) { ?>
<!-- basic string-->
<p>html blah blah</p>

<?php } ?>

<?php 
$name = "Ryan Howard";
echo $name;
?>

<?php 
//scalar types
$string ='Ryan';
$int = 123;
$float = 2.232323232;
$bool=true;
//array types  
$array = ['ry', 'mark', 'jeff'];
$array = array('yes','no','maybe');
?>

</body>
</html>

