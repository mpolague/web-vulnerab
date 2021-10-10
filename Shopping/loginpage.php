<!-- 
    home.php represents the home page where users must login/create account to view items.
-->

<?php
    require_once('php/component.php');
    require_once('php/CreateDb.php');
    require_once('php/CreateDb_userinfo.php');
    //Create instance of CreateDb class
    $database = new CreateDb("Productdb", "Producttb");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="upload/style.css">
</head>
<body style="background-color: #00000d;">

<img src="./upload/devcom_2.PNG" style="background-color: #808080;" alt="Devcom"> 
<div class = "login" style="float: right;">
    <input type="button" value="Issues? Contact Support" onclick="window.location.href='/ARMY_PDE_SHOPPING/Shopping/issues.php'" style="float: left;  margin-right:50px; margin-top:20px; bottom-margin: 20px;">
    <input type="button " value="Don't have an account? Create Account"  onclick="window.location.href='/ARMY_PDE_SHOPPING/Shopping/createaccount.php'" style="float: left;  margin-right:50px; margin-top:20px; bottom-margin: 20px;">

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>