<?php 
 function connection()
 {
    $conn = mysqli_connect("localhost","root","","online_shopping");  
  
    return $conn;

    // hostname,username,password,dbname
 }

 function deleteData($tbl,$where)
{
  $conn = connection(); 
  $sql = "DELETE from category $where";
  $res = mysqli_query($conn,$sql); 
  $ans = ($res==1)?"1":"0"; 
  return $ans;
 }
 function getData($tbl)
 {      
        $conn = connection();
        $sql = "SELECT * from $tbl";
        $res = mysqli_query($conn,$sql);
        // print_r($res);
 
        while($row  = mysqli_fetch_assoc($res))
        {
            $data[] = $row;
        } 

        return $data;
 }

 function getJoin()
 {      
        $conn = connection();
        $sql = "SELECT * FROM category INNER JOIN product";
        $res = mysqli_query($conn,$sql);
        // print_r($res);
 
        while($row  = mysqli_fetch_assoc($res))
        {
            $data[] = $row;
        } 

        return $data;
 }

 function adddata()
 {
              $conn=connection();
       $sql="insert into category ("$name","$description","$image");
       $res=mysqli_query($conn,$sql);

       While($row=mysqli_fetch_assoc($res))
       {
$data []=$row;
       }
       return $data;
}
?>