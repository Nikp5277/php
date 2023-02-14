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

 function getJoin($tbl ,$tbt)
 {
   $conn=connection();
   $sql= "SELECT $tbl.id,$tbt.p_id,$tbt.p_name
   FROM $tbl INNER JOIN $tbt
   ON $tbl.id = $tbt.p_id";
   $res= mysqli_qurey($conn,$sql);
           while($row = mysqli_fetch_assoc($res))
{
        $data[] = $row;
}
return $data;
}






 })

?>