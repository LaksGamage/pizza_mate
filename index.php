<?php

include("config/db_connect.php");


//selecting all details needed form the table. title, Ingredients, id
$sql = 'SELECT id, title, email, Ingredients FROM pizza ORDER BY created_at';



//getting the results.
$results = mysqli_query($conn, $sql);

$pizzas = mysqli_fetch_all($results, MYSQLI_ASSOC);


//free results from memory
mysqli_free_result($results);

//close the application
mysqli_close($conn);


//print_r($pizzas);


?>




<html>

<head>
    <title>Pizza mart</title>
</head>

<body class="bg-top-right bg-[url(images/b5.jpg)]">
    <?php
    include("header.php");
    ?>

    <div>
        <div class="mx-60 my-20 " >
            <p class="add text-center mb-10 text-[40px] shadow-2xl">Pizza orders</p>
            <div class="grid grid-cols-3 gap-4">
                <?php foreach($pizzas as $pizza) { ?>
                    <div class="button bg-[#f7a305ff] border border-black rounded-xl shadow-2xl text-[18px] text-center p-10  font-bold">
                        <div class="bg-[white] mx-6 "><h5 class="text-[black]  underline mb-3"><?php echo htmlspecialchars($pizza['title']) ?></h5></div>
                        
                        <div class="bg-[#f7af4aff] shadow-xl  border border-white mb-2 text-center">
                        <h5 class="text-[black]"><?php echo htmlspecialchars($pizza['Ingredients']) ?></h5>
                        <h5 class="text-[#303030ff] mb-5"><?php echo htmlspecialchars($pizza['email']) ?></h5>
                        </div>

                        <div class="text-[13px]">
                            <a href="" ><p class="bg-[#f2d45cff] border border-black rounded-xl mx-24 mb-2">update </p> </a>
                            <a href="" ><p class="bg-[#f79496ff] border border-black rounded-xl mx-24">delete</p></div> </a>
                    </div>


                <?php
                }
                ?>
            </div>
        </div>
    </div>

    <?php
    include("footer.php");
    ?>
</body>
    </html>









