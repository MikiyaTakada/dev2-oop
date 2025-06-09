<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!-- Content Here -->
    <div class="card card-body bg-primary w-50 mx-auto  my-5">
        <h1 class="text-center">REGISTRATION</h1>
        <form action="" method="post">
            <label for="sname" class="form-label">Student's Name</label><br>
            <input type="text" name="sname" id="sname" class="form-control"><br>
            <label for="year" class="form-label">Year Level</label><br>
            <select name="year" class="form-control">
                <option value="" hidden>Choose your year level</option>
                <option value="1">1st</option>
                <option value="2">2st</option>
                <option value="3">3st</option>
                <option value="4">4st</option>
            </select>
            <br>
            <label for="units" class="form-check-label">Total Units</label><br>
            <input type="number" name="units" id="units" class="form-control" placeholder="Maximum of 23" max=23><br>
            <div class="d-flex justify-content-center">
                <div class="form-check form-check-inline mx-auto">
                    <input class="form-check-input" type="radio" name="choice" id="with" value="1" checked>
                    <label class="form-check-label" for="with">With lab</label>
                </div>
                <div class="form-check form-check-inline mx-auto">
                    <input class="form-check-input" type="radio" name="choice" id="without" value="2">
                    <label class="form-check-label" for="without">Without lab</label>
                </div>
            </div>
            <br>
            <button type="submit" name="btn_submit" class="bg-dark text-white mx-auto w-100">Submit</button>
        </form>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>

</html>

<?php
include 'School.php';
if (isset($_POST['btn_submit'])) {
    $sname = $_POST['sname'];
    $year = $_POST['year'];
    $units = $_POST['units'];
    $choice = $_POST['choice'];

    //Create an instance of class fare(object)
    $fare = new Fare;

    //set the value
    $fare->setValue($sname, $year, $units, $choice);
    ?>
    <div class="card mx-auto w-50 my-3">
        <div class="card-body">
            <?php
            echo "Student name: " . $fare->getSname() . "<br>";
            echo "Year level: " . $fare->getYear() . "<br>";
            echo "No. of units: " . $fare->getUnits(). "<br>";
            echo "Total Price: " . $fare->calculation();
            ?>
        </div>
    </div>

    <?php
}
?>