<?php

//connecting to the database
$conn = mysqli_connect('localhost','cyndi','00010234','pizzamate');


//checking the connection error
if(!$conn) {
    echo 'mysql error' . mysqli_connect_error();
}



//selecting all details needed form the table. title, Ingredients, id
$sql = 'SELECT id, title, email, Ingredients FROM pizza ORDER BY created_at';



//getting the results.
$results = mysqli_query($conn, $sql);

$pizzas = mysqli_fetch_all($results, MYSQLI_ASSOC);


//free results from memory
mysqli_free_result($results);

//close the application
mysqli_close($conn);


print_r($pizzas);


?>




<html>

<head>
    <title>Pizza mart</title>
</head>

<body>
    <?php
    include("header.php");
    ?>



    <?php
    include("footer.php");
    ?>
</body>
    </html>
