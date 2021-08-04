<?php

function component($product_name, $product_price, $product_image){
    echo '


    
    <html>
    
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
            <form action="index.php" method="post">
                <div class="card shadow">
                    <div>
                        <img src=$product_image alt="2 Raspberry Pis" class="img-fluid card-img-top">
                    </div>
                    <div class="card-body">
                        <h5 class = "card-title">$product_name</h5>
                        <h6> 
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </h6>
                        <p class="card-text">
                            This product is for two Raspberry Pis.
                        </p>
                        <h5>
                            <small><s class="text-secondary">$99</s></small>
                            <span class="price">$199</span>
                        </h5>   

                        <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                    </div>
                </div>
            </form>
        </div>
    HTML;';


}  

?>






