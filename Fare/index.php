<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fare</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="age" id="age" placeholder="Age" min="10" max="80">
        <br>
        <input type="number" name="distance" id="distance" placeholder="Distance(km)">
        <br>
        <button type="submit" name="btn_submit">Compute</button>
    </form>
</body>
</html>

<?php
include 'Fare.php';
if(isset($_POST['btn_submit'])){
    $age = $_POST['age'];
    $distance = $_POST['distance'];

    //Create an instance of class fare(object)
    $fare = new Fare;

    //set the value
    $fare->setValue($age,$distance);

    //get and display the values
    echo"Age: " . $fare->getAge() . "<br>";
    echo"Distance: ". $fare->getDistance() . "<br>";
    echo"Fare: ". $fare->calculation($age, $distance);
}
?>