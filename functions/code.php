<?php

session_start();
include('../config/dbcon.php');
include('myfunctions.php');



if(isset($_POST['add_category_btn']))
{
    $name=$_POST['name'];
    $slug=$_POST['slug'];
    $description=$_POST['description'];
    $image1=$_FILES['image1']['name'];
    $price=$_POST['price'];

    $path="../uploads";

    $image_ext1= pathinfo($image1, PATHINFO_EXTENSION);
    $filename1= time().'.'.$image_ext1;


    $cate_query="INSERT INTO categories (name,slug,description,image1,price) VALUES ('$name', '$slug', '$description', '$filename1', '$price')";

    $cate_query_run=mysqli_query($con, $cate_query);

    if($cate_query_run){
        move_uploaded_file($_FILES['image1']['tmp_name'], $path.'/'.$filename1);
        redirect("../add-category.php", "Category Added Successfully");
        $_SESSION['message']="Email already registered";
    }
    else{
        redirect("../add-category.php", "Something Went Wrong");
    }
}

else if(isset($_POST['delete_category_btn'])){
    $category_id=mysqli_real_escape_string($con, $_POST['category_id']);
    $category_query="SELECT *FROM categories WHERE id='$category_id'";
    $category_query_run=mysqli_query($con, $category_query);
    $category_data=mysqli_fetch_array($category_query_run);
    $image= $category_data['image'];
    
    $delete_query= "DELETE FROM categories WHERE id='$category_id' ";
    $delete_query_run= mysqli_query($con, $delete_query);
    
    if($delete_query_run){
        if(file_exists("uploads/".$image1)){
            unlink("uploads/".$image1);
        }
        redirect("../category.php", "Category Seleted Successfully");
    }
    else{
        redirect("../category.php", "Something Went Wrong");
    }
}

else if(isset($_POST['delete_category_btn_users'])){
    $category_id=mysqli_real_escape_string($con, $_POST['category_id']);
    $category_query="SELECT *FROM users WHERE id='$category_id'";
    $category_query_run=mysqli_query($con, $category_query);
    $category_data=mysqli_fetch_array($category_query_run);
    
    $delete_query= "DELETE FROM users WHERE id='$category_id' ";
    $delete_query_run= mysqli_query($con, $delete_query);
    
    if($delete_query_run){
        
        
        redirect("../users.php", "User Seleted Successfully");
    }
    else{
        redirect("../users.php", "Something Went Wrong");
    }
}



?>