<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Animals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
   <!-- Content Here --> 
    <div class="card card-body border-primary w-50 mx-auto my-5 p-5">
        <h1 class="text-center text-primary">Animal Kingdom</h1>
        <form action="" method="post">
            <label for="name" class="form-label">Name</label>     
            <input type="text" class="form-control" name="name"><br>
            <div class="row">
                <div class="col">
                    <label for="species" class="form-label">Species:</label><br>    
                    <select name="species" id="species" class="form-control">
                        <option value="" hidden>Select a Species:</option>
                        <option value="dog">Dog</option>
                        <option value="cat">Cat</option>
                        <option value="bird">Bird</option>
                    </select>
                </div>
                <div class="col">
                    <label for="breed" class="form-label">Breed</label>     
                    <input type="text" class="form-control" name="breed">
                </div>
            </div>
            <br>
            <button type="submit" name="btn_submit" class="border-0 bg-primary text-white mx-auto w-100 p-2">Submit</button>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<?php
include 'Animals.php';
if(isset($_POST['btn_submit'])){
    $name = $_POST['name'];
    $species = $_POST['species'];
    $breed = $_POST['breed'];

    if($species == "dog"){
        $animal = new Dog($name, $species, $breed);
    } elseif($species == "cat"){
        $animal = new Cat($name, $species, $breed);
    } elseif($species == "bird"){
        $animal = new Bird($name, $species, $breed);
    } else {
        echo "<p class='text-danger'>Invalid species selected!</p>";
        exit;
    }

    ?>
    <div class="card card-body border-danger w-50 mx-auto my-5 p-5">
    <?php
    echo $animal->getName();
    echo $animal->introduce();
    echo $animal->speak();
    ?>
    </div>
<?php
}
?>