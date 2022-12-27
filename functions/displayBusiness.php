<?php
require_once("../controllers/business_controller.php");

function showAllBusiness_fnc($department_name)
{
    $data = business_data_ctr($department_name);
    foreach($data as $product) {
        $product_id = $product['product_id'];
        $productName = $product['product_name'];
        $productPrice = $product['product_price'];
        $productImage = $product['product_image'];
        showSingleBusiness($product_id,$productName,$productPrice,$productImage);
            

            
        }
   
}



function showSingleBusiness($product_id,$productName,$productPrice,$productImage)
{

    echo "
                <div class='col-lg-4 col-md-6 text-center strawberry'>
					<div class='single-product-item'>
						<div class='product-image'>
							<a href='single-product.php'><img src='$productImage' alt=''></a>
						</div>
						<h3>$productName</h3>
						<p class='product-price'><span>Per Kg</span> $productPrice GHC </p>";

                        if(isset($_SESSION['userLogin'])){
						    echo "<a href='cart.php?pid=$product_id' class='cart-btn'><i class='fas fa-shopping-cart'></i> Add to Cart</a>";
                        }else{
                            echo "<a href='cart.php?pid=$product_id' class='cart-btn'><i class='fas fa-shopping-cart'></i> Login to Add to Cart</a>";
                        }
					
                    echo"    </div>
				</div>
    ";
}

?>