<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One Stop- Your one stop destination to football</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>
<body>
    <div class="header">
        <?php include('header.php'); ?>
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
        <?php
        if(isset($_SESSION['auth'])){
            ?>
            <div class="container">
            <div class="row">
                <div class="col-2">
                    <h1>Your <span>One Stop</span> destination <br>to Football.</h1>
                    <p>Dive into the world of the most popular sport on the planet with
                        endless goals, cheeky offsides, daring penalties, exquisite passes
                        and loads of football goodies ranging from shoes to jerseys- delivered right
                        to your home.
                    </p>
                    <a href="adminportal.php" class="btn">Explore Now</a>
                </div>
                <div class="col-2">
                    <img src="images/fb1.png">
                </div>
            </div>
        </div>
            <?php
        }
        else{
            ?>
            <div class="container">
            <div class="row">
                <div class="col-2">
                    <h1>Your <span>One Stop</span> destination <br>to Football.</h1>
                    <p>Dive into the world of the most popular sport on the planet with
                        endless goals, cheeky offsides, daring penalties, exquisite passes
                        and loads of football goodies ranging from shoes to jerseys- delivered right
                        to your home.
                    </p>
                    <a href="account.php" class="btn">Explore Now</a>
                </div>
                <div class="col-2">
                    <img src="images/fb1.png">
                </div>
            </div>
        </div>
            <?php
        }
        ?>
    </div> 
    
    <?php
    if(isset($_SESSION['auth'])){
        ?>
    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="prods.php">
                <img src="images/kit31.jpg">
                <h4>Aallookart Men's Barsa Home 2022-23 Football Jersey (Shorts)</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <p>₹999.0</p>
            </a>
            </div>
            
            <div class="col-4">
                <a href="prods.php">
                <img src="images/soc21.jpg">
                <h4>Nivia Plain Encounter Stockings (L, Black) - Polyester Blend, Unisex, Knee Length, Pack of 1 Pair</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>₹112.0</p>
            </a>
            </div>
            <div class="col-4">
                <a href="prods.php">
                <img src="images/shin41.jpg">
                <h4>Nivia 805S Wisdom-2018 Plastic Shin Guard, Small (White)</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>₹660.0</p>
            </a>
            </div>
        </div>
        <h2 class="title">Latest Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="prods.php">
                <img src="images/kit21.jpg">
                <h4>Real Madrid Away Replica Full Sleeves Football Jersey</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <p>₹324.0</p>
            </a>
            </div>
            
            <div class="col-4">
                <a href="prods.php.php">
                <img src="images/soc41.jpg">
                <h4>Just Care Sports Running Football Soccer Plain Long Socks Over Knee High Socks</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <p>₹177.0</p>
            </a>
            </div>
            <div class="col-4">
                <a href="prods.php.php">
                <img src="images/shin11.jpg">
                <h4>Benstar Hard Plastic Football Shin Guard Youth Size (Black)</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <p>₹168.0</p>
            </a>
            </div>
        </div>
    </div>
    <?php
    }
    else{
        ?>
        <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="prods.php">
                <img src="images/kit31.jpg">
                <h4>Aallookart Men's Barsa Home 2022-23 Football Jersey (Shorts)</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <p>₹999.0</p>
            </a>
            </div>
            
            <div class="col-4">
                <a href="prods.php">
                <img src="images/soc21.jpg">
                <h4>Nivia Plain Encounter Stockings (L, Black) - Polyester Blend, Unisex, Knee Length, Pack of 1 Pair</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>₹112.0</p>
            </a>
            </div>
            <div class="col-4">
                <a href="prods.php">
                <img src="images/shin41.jpg">
                <h4>Nivia 805S Wisdom-2018 Plastic Shin Guard, Small (White)</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>₹660.0</p>
            </a>
            </div>
        </div>
        <h2 class="title">Latest Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="prods.php">
                <img src="images/kit21.jpg">
                <h4>Real Madrid Away Replica Full Sleeves Football Jersey</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <p>₹324.0</p>
            </a>
            </div>
            
            <div class="col-4">
                <a href="prods.php">
                <img src="images/soc41.jpg">
                <h4>Just Care Sports Running Football Soccer Plain Long Socks Over Knee High Socks</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <p>₹177.0</p>
            </a>
            </div>
            <div class="col-4">
                <a href="prods.php">
                <img src="images/shin11.jpg">
                <h4>Benstar Hard Plastic Football Shin Guard Youth Size (Black)</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <p>₹168.0</p>
            </a>
            </div>
        </div>
    </div>
    <?php
    }
    ?>

    <?php
    if(isset($_SESSION['auth'])){
        ?>
        <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    
                    <img src="images/shoes41.jpg" class="offer-img">
                
                </div>
                <div class="col-2">
                    <p>Exclusively Available on One Stop.</p>
                    <h1>Vector X Football Shoes for Men's (Pearl White-Black) (Size-10)</h1>
                    <small>Vector X is one of the established sports brands who provide stylish and innovative sports gear to most of the aspiring sport players as well as others. As a brand they have 
                        produced thousands of spectacular gear which have been used by numerous renowned sport personalities. Football, volleyball, basketball, cricket, tennis, badminton and squash are 
                        the sports in whose accessories and gear they deal in regularly.</small><br>
                    <a href="prods.php" class="btn">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
        <?php
    }
    else{
        ?>
        <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    
                    <img src="images/shoes41.jpg" class="offer-img">
                
                </div>
                <div class="col-2">
                    <p>Exclusively Available on One Stop.</p>
                    <h1>Vector X Football Shoes for Men's (Pearl White-Black) (Size-10)</h1>
                    <small>Vector X is one of the established sports brands who provide stylish and innovative sports gear to most of the aspiring sport players as well as others. As a brand they have 
                        produced thousands of spectacular gear which have been used by numerous renowned sport personalities. Football, volleyball, basketball, cricket, tennis, badminton and squash are 
                        the sports in whose accessories and gear they deal in regularly.</small><br>
                    <a href="prods.php" class="btn">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
        <?php
    }
    ?>

    

    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>One Stop. truly is the GOAT when it comes to customer service and quality products. Really love the diversity of accessories available.</p>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <br><br>
                    <img src="images/user1.jpg">
                    <h3>Brad Pitt</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>I have been a regular buyer at this platform and I have all praises for the same. The delivery is on time and you get what you see. 100% recommended!</p>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <br>
                    <img src="images/user2.jpg">
                    <h3>Jennifer Lawrence</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>I have been buying Ronaldo jerseys and shoes for a while now and the product quality has been absolutely amazing. The payment is hassle-free and returns are safe too. Now I can really say SIIUUUUUUU!!</p>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <img src="images/user3.jpg">
                    <h3>Speed Sewy</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="images/logo_1.png">
                </div>
                <div class="col-5">
                    <img src="images/logo_2.png">
                </div>
                <div class="col-5">
                    <img src="images/logo_3.png">
                </div>
                <div class="col-5">
                    <img src="images/logo_4.png">
                </div>
            </div>
        </div>
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
</body>
</html>