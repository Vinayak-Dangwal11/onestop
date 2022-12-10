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
    ?>


    
        
    <div class="container">
        
        <?php
                if(isset($_SESSION['message'])){
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Hey! </strong><?= $_SESSION['message']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                unset($_SESSION['message']);
                }
            ?>
        <form action="functions/code.php" method="POST" enctype="multipart/form-data">
            <div class="card">
                <div class="card-header">
                    <h1>Add Category</h1>
                </div>

                <div class="card-body">
                    <label>Name</label>
                    <input type="text" name="name" placeholder"" class="form-control">
                </div>
                <div class="card-body">
                    <label>Slug</label>
                    <input type="text" name="slug" placeholder"" class="form-control">
                </div>
                <div class="card-body">
                    <label>Description</label>
                    <br>
                    <textarea rows="6" name="description" placeholder"" class="form-control"></textarea>
                </div>
                <div class="card-body">
                    <label>Image1</label>
                    <input type="file" name="image1" placeholder"" class="form-control">
                </div>
                <div class="card-body">
                    <label>Price</label>
                    <input type="number" name="price" placeholder"" class="form-control">
                </div>
                <div class="card-body">
                    <button type="submit" class="btn" name="add_category_btn" >Save</button>
                </div>
            </div>  
    </form> 
    </div>

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

    <script>
        var LoginForm=document.getElementById("LoginForm");
        var RegForm=document.getElementById("RegForm");
        var Indicator=document.getElementById("Indicator");

        function register(){
            RegForm.style.transform= "translateX(0px)";
            LoginForm.style.transform= "translateX(0px)";
            Indicator.style.transform= "translateX(100px)";
        }

        function login(){
            RegForm.style.transform= "translateX(300px)";
            LoginForm.style.transform= "translateX(300px)";
            Indicator.style.transform= "translateX(0px)";
        }
    </script>

</body>
</html>