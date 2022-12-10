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
        <?php include('header.php'); 
            include('functions/myfunctions.php');?>
            

            <div class="small-container cart-page">
                <div class="card-header">
                    <h1>Purchase History</h1>
                </div>
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
                <table>
                    <tr>
                        <th>Id</th>
                        <th>Transaction</th>
                        <th>Total</th>
                        <th>Purchase Time</th>
                        
                    </tr>
                    <?php
                    $category=getAll("purchase");

                    if(mysqli_num_rows($category)>0){
                        foreach($category as $item)
                        {
                            ?>
                            <tr>
                                <td>
                                        <?=$item['id']; ?>
                                </td>
                                <td>
                                        <?=$item['transaction_id']; ?>
                                </td>
                                <td>
                                        <?=$item['Total']; ?>
                                    
                                </td>
                                
                                <td>
                                        <?=$item['purchased_at']; ?>
                                    
                                </td>
                            </tr>
                        <?php

                        }
                    }
                    else{
                        echo "No Records Found";
                    }
                    ?>
                     
                </table>

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