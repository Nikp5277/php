<?php 
include './funnctions.php';
$id = $_GET['id'];  
$tbl = $_GET['tbl'];
if($tbl == "cat")
{
    $where = " where id = '$id'";
    $ans = deleteData('category',$where); 
    header('Location:./showcategory.php');
} 

if($tbl == "product")
{
    $where = " where id = '$id'";
    $ans = deleteData('product',$where); 
    header('Location:./showproduct.php');
}


?>