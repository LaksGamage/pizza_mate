<html>
    <head>
         <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
         <link rel="stylesheet" href="style.css">

         <link href="https://fonts.googleapis.com/css2?family=Funnel+Sans:ital,wght@0,300..800;1,300..800&family=Satisfy&display=swap" rel="stylesheet">

    </head>

<body>
    
    <?php
include("header.php");

?>




<p class="add text-[40px] text-4xl text-center m-[40]">Add a Pizza</p>


<form class="button text-black flex flex-col bg-[#f7a305ff] p-4 mb-50 my-[50px] mx-[400px] rounded-xl text-[30px] border border-black shadow-2xl" action="addpizza.php" method="POST">

    <label  class="p-2 pl-6" for="">Add order name</label>
    <input required class="bg-white border border-black text-[25px]" type="text" name="oname">
    <label class="p-2 pl-6" for="">Your Email</label>
    <input required class="bg-white border border-black text-[25px]" type="email" name="email">
    




    <label class="p-2 pl-6" for="">Pizza title</label>
        <select required class="bg-white border border-black text-[25px]" id="pizzat" name="title">
            <option value="Chilli Chicken Pizza">Chilli Chicken Pizza</option>
            <option value="Hot & Spicy Chicken">Hot & Spicy Chicken</option>
            <option value="Veggie Masala Pizza">Veggie Masala Pizza</option>
            <option value="Tandoori Chicken">Tandoori Chicken</option>
        </select>






    <label class="p-2 pl-6" for="">Ingredients</label>
    
     <label class="bg-white border border-black text-[25px] pl-[30]">
            <input type="checkbox" name="ingredients" value="Onions">
            Onions
        </label>
        
        <label class="bg-white border border-black text-[25px] pl-[30]">
            <input type="checkbox" name="ingredients" value="Green Chillies">
            Green Chillies
        </label>
        
        <label class="bg-white border border-black text-[25px] pl-[30]">
            <input type="checkbox" name="ingredients" value="Tomato">
            Tomato
        </label>
        
        <label class="bg-white border border-black text-[25px] pl-[30]">
            <input type="checkbox" name="ingredients" value="Cheese">
            Cheese
        </label>
    
    
    







    
    

    <input class="bg-[#e8000cff] text-white hover:bg-[#ffcd05ff] hover:text-black py-1 px-3 mt-3 rounded-xl" type="submit"  name="submit" value="submit">
   

    </form>


<div class="list">
<div class="bg-[#edd48aff] text-center m-[150px] p-20 border-[2]  rounded-xl border-black shadow-2xl">

    <p class="add text-6xl m-[50px] "> Your order</p>

<?php
    
    if(isset($_POST['submit'])) {

        if(empty($_POST['oname'])) {
            echo '*der name required!! <br/>';
        } else{
           
        }
        
        if(empty($_POST['email'])) {
            echo '*Email is required!! <br/>';
        } else{
            
            
        }

        if(empty($_POST['title'])) {
            echo '*title is required!! <br/>';
        } else{
             
            
        }

        if(empty($_POST['ingredients'])) {
            echo '*ingredients is required!! <br/>';
        } else{
            
            
        }
    }    

?>

    <div class="bg-[#f7a305ff] mx-60 border-[2] rounded-xl border-white shadow-2xl">
    
    <ul class="text-4xl ">
        <p>This is your order name</p>
        <li><font face="Satisfy"><?php echo $_POST['oname']; ?></font></li><br>
        <p>Your email</p>
        <li><font face="Satisfy"><?php echo $_POST['email']; ?></font></li><br>
        <p>Your pizza title</p>
        <li><font face="Satisfy"><?php echo $_POST['title']; ?></font></li><br>
        <p>added ingredients</p>
        <li><font face="Satisfy"><?php echo $_POST['ingredients']; ?></font></li><br>
    </ul>
    
    </div>

</div>
</div>


   <?php
include("footer.php");

?>


</body>
    </html>