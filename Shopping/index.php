<?php
    require_once('php/component.php');
    require_once('php/CreateDb.php');

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
    <input type="button" value="Issues? Contact Support" style="float: left;  margin-right:50px; margin-top:20px; bottom-margin: 20px;">
    <input type="button" value="Log In" style="float: right; right-margin: 20px; margin-right:20px; margin-top:20px;">

</div>

<!-- Helper to retrieve each row, saving it in an array -->
<?php
    $fir_array = array();
    $result = $database->getData();
    while ($row = mysqli_fetch_assoc($result)){
        $fir_array[] = $row;
    }
    
    $sec_array = array();
    $sec_array = $fir_array[1];
?>

<div class="container">
<h2 style=" text-align: right; color: #FFFFFF; font-size:25px;">Wallet Balance: $354.34</h2>
    <div class="row text-center py-5">
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
            <form action="index.php" method="post">
                <div class="card shadow">
                    <div>
                        <img src="./upload/2-raspberry-pi.jpg" alt="2 Raspberry Pis" class="img-fluid card-img-top">
                    </div>
                    <div class="card-body">

                        <h5 class = "card-title">
                            <?php
                                $first_prod_array = $fir_array[0];
                                print_r($first_prod_array['product_name']);
                                
                            ?>
                        </h5>

                        <h6> 
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </h6>
                        <p class="card-text">
                            This product is for two Raspberry Pis.
                        </p>
                        <h5>
                            <small><s class="text-secondary">$99</s></small>
                            <span class="price">                            
                                <?php
                                    print_r($first_prod_array['product_price']);
                                ?>
                            </span>
                        </h5>   

                        <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                    </div>
                </div>
            </form>
        </div>


        <div class="col-md-3 col-sm-6 my-3 my-md-0">
            <form action="index.php" method="post">
                <div class="card shadow">
                    <div>
                        <img src="./upload/aws-amazon.png" alt="AWS Amazon" class="img-fluid card-img-top">
                    </div>
                    <div class="card-body">
                        <h5 class = "card-title">
                            <?php
                                $second_prod_array = $fir_array[1];
                                print_r($second_prod_array['product_name']);
                            ?>
                        </h5>

                        <h6> 
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </h6>
                        <p class="card-text">
                            $300 worth of AWS software.
                        </p>
                        <h5>
                            <small><s class="text-secondary">$329</s></small>
                            <span class="price">
                                <?php
                                    print_r($second_prod_array['product_price']);
                                ?>
                            </span>
                        </h5>   

                        <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                    </div>
                </div>
            </form>
        </div>


        <div class="col-md-3 col-sm-6 my-3 my-md-0">
            <form action="index.php" method="post">
                <div class="card shadow">
                    <div>
                        <img src="./upload/type-c-cable.jpg" alt="Type C Cable" class="img-fluid card-img-top">
                    </div>
                    <div class="card-body">
                        <h5 class = "card-title">
                            <?php
                                $third_prod_array = $fir_array[2];
                                print_r($third_prod_array['product_name']);
                            ?>

                        </h5>
                        <h6> 
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </h6>
                        <p class="card-text">
                            One 10-ft Type C Cable.
                        </p>
                        <h5>
                            <small><s class="text-secondary">$23</s></small>
                            <span class="price">
                                <?php
                                    print_r($third_prod_array['product_price']);
                                ?>
                            </span>
                        </h5>   

                        <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                    </div>
                </div>
            </form>
        </div>


        <div class="col-md-3 col-sm-6 my-3 my-md-0">
            <form action="index.php" method="post">
                <div class="card shadow">
                    <div>
                        <img src="./upload/raspberry-pi.png" alt="Raspberry Pi" class="img-fluid card-img-top">
                    </div>
                    <div class="card-body">
                        <h5 class = "card-title">
                            <?php
                                $fourth_prod_array = $fir_array[3];
                                print_r($fourth_prod_array['product_name']);
                            ?>
                        </h5>
                        <h6> 
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </h6>
                        <p class="card-text">
                            One Raspberry Pi.
                        </p>
                        <h5>
                            <small><s class="text-secondary">$129</s></small>
                            <span class="price">
                                <?php
                                    print_r($fourth_prod_array['product_price']);
                                ?>
                            </span>
                        </h5>   

                        <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                    </div>
                </div>
            </form>
        </div>

        <button type="submit" class="btn btn-warning my-3" name="add">Checkout <i class="fas fa-shopping-cart"></i></button>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
<label for="fname" style = "color: #FFFFFF; float: left; right-margin: 20px; margin-right:20px; margin-top:20px;">What other products would you like for us to provide?</label>
<input type="text" style = "color: #FFFFFF; float: left; margin-bottom: 20px; margin-right:20px; margin-top:20px;" id="fname" name="fname">
<input type="submit" style = "float: left; margin-bottom: 20px; margin-right:20px; margin-top:20px;">


</body>
</html>