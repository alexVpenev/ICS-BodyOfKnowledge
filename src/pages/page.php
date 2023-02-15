<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        include("../components/navigation-pages.php");
    ?>
</head>
<body>


    <!-- <input id="utre"></input>
    <button id="baba">Inject</button> -->
    

    <!-- <form action='result.php' method='post'>  -->
    <form method='post'> 
        <input type="text" placeholder="Type here:" name="btn" id="btn" /><br /><br />
        <input type="submit" id="mes" name="mes"><br /><br />
    </form> 
    

    <?php 
        if(isset($_POST['mes'])){
            $var1 = $_POST['btn']; // create variables of your form elements
            $var2 = $_POST['mes']; 
        }
        else {
            $var1 = 'Default input'; // create variables of your form elements
            $var2 = "Default input"; 
        }

      

      echo $var1

?>

    


</body>
</html>