<?php

//connecting to the database
$conn = mysqli_connect('localhost','cyndi','00010234','pizzamate');


//checking the connection error
if(!$conn) {
    echo 'mysql error' . mysqli_connect_error();
}
?>