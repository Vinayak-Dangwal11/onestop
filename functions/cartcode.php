<?php

session_start();
include('../config/dbcon.php');
include('myfunctions.php');



if(isset($_POST['calculate']))
{
    <?php
                    $category=getAll("categories");

                    if(mysqli_num_rows($category)>0){
                        foreach($category as $item)
                        {
                            ?>
                            $sum=0;
                            $sum+=parseInt(document.getElementById('<?=$item['id'];?>').value())+parseInt(<?=$item['price'];?>); 
                        <?php
                        document.getElementById('amount_txn').innerHTML=$sum;

                        }
                    }
                    else{
                        echo "No Records Found";
                    }
                    ?>
}

?>