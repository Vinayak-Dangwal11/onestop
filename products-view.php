<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - One Stop.</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>
<body>
    
<?php
            include('header.php');
            include('functions/myfunctions.php');

            $cat_slug=$_GET['category'];
            $cat_data=getSlugActive("categories", $cat_slug);
            $cat=mysqli_fetch_array($cat_data);
            $cid=$cat['id'];
    ?>


<?php
                    $category=getIDActive("categories", $cid);

                    if(mysqli_num_rows($category)>0){
                        foreach($category as $item)
                        {
                            ?>

<div class="small-container single-product">
            <div class="row">
                <div class="col-2">
                <img src="uploads/<?= $item['image1']; ?>" alt="<?= $item['name']; ?>" width="100%" id="product-img">
                    <div class="small-img-row">
                        <div class="small-img-col" >
                            <img src="uploads/<?= $item['image1']; ?>" alt="<?= $item['name']; ?>" class="small-img" >
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <h1><?=$item['name']; ?></h1>
                    <h4>₹<?=$item['price']; ?></h4>
                    <a href="cart.php" class="btn">Add To Cart</a>
                    <h3>Product Details <i class="fa fa-indent"></i></h3>
                    <br>
                    <p><?=$item['description']; ?></p>
                </div>
            </div>
        </div>
                
                            
                        
            

                        <?php

                        }
                    }
                    else{
                        echo "No Records Found";
                    }
                    ?>


        



    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and IOS mobile phones</p>
                    <div class="app-logo">
                        <img src="images/play-store.png">
                        <img src="images/app-store.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/temp2.png">
                    <p>Bringing in the football style as nothing else seen before!</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog</li>
                        <li>Return Policy</li>
                        <li>Jobs</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Instagram</li>
                        <li>Youtube</li>
                        <li>Twitter</li>
                        <li>Facebook</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2022 - Vinayak Dangwal</p>
        </div>
    </div>

    <script>
        var MenuItems=document.getElementById("MenuItems");
        MenuItems.style.maxHeight="0px";
        function menutoggle(){
            if(MenuItems.style.maxHeight=="0px"){
                MenuItems.style.maxHeight="200px";
            }
            else{
                MenuItems.style.maxHeight="0px";
            }
        }
    </script>

    <script>
        var productimg=document.getElementById("product-img");
        var smallimg=document.getElementsByClassName("small-img");
        smallimg[0].onclick=function(){
            productimg.src=smallimg[0].src;
        }
        smallimg[1].onclick=function(){
            productimg.src=smallimg[1].src;
        }
        smallimg[2].onclick=function(){
            productimg.src=smallimg[2].src;
        }
        smallimg[3].onclick=function(){
            productimg.src=smallimg[3].src;
        }
    </script>

</body>
</html>