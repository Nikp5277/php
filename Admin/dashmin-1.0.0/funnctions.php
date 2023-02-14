<?php 
 function connection()
 {
    $conn = mysqli_connect("localhost","root","","online_shopping");  
  
    return $conn;

    // hostname,username,password,dbname
 }

 function getData($tbl)
 {      $conn = connection();
        $sql = "SELECT * from $tbl";
        $res = mysqli_query($conn,$sql);
        // print_r($res);

        while($row  = mysqli_fetch_assoc($res))
        {
            $data[] = $row;
        }

        return $data;
 }

 function getJoin($tbl)
 {
   $conn=connection();
   $sql= "SELECT category.id,product_table.p_id,product_table.p_name
   FROM category INNER JOIN product_table 
   ON catgory.id = product_table.p_id $tbl" ;
   $res= mysqli_qurey($conn,$sql);
           while($row = mysqli_fetch_assoc($res))
{
        $data[] = $row;
    

}
return $data;
}






 })

?>