<?php
$insert = false;
if ($insert($_POST['name'])) {


    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("connection to this db failed due to" . mysqli_connect_error());
    }


    $name = $_POST['name'];
    $clgId = $_POST['clgId'];
    $sql = "INSERT INTO `travel_form_mu`.`travel` (`name`, `clg_Itravel_form_mud`) VALUES ( '$name', '$clgId');";
    echo $sql;



    if ($con->query($sql) == true) {
        echo "successfully inserted";

        // Flag for successful insertion
        $insert = true;
    } else {
        echo "ERROR : $sql <br> $con->error";
    };

    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
</head>

<body class="bg">
    <div class="container-header">
        <h2>
            Travel Form <br /><span class="clg-name"> Unveristy of Mumbai</span>
        </h2>
        <p>Explore our campus localted in Fort, Mumbai</p>
        <!-- <img src="./mu.jpg" class="img-fluid" alt="..." /> -->
    </div>
    <div class="container">
        <?php
        if ($insert == true) {
            echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
        }
        ?>
        <form action="index.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="name" class="form-control" id="name" name="name" aria-describedby="nameHelp" />
            </div>
            <div class="mb-3">
                <label for="clgId" class="form-label">Enter your college id</label>
                <input type="number" class="form-control" name="clgId" id="clgId" />
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br />
        <img src="./mu.jpg" class="img-thumbnail" id="mu-img" alt="..." />
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>

</html>