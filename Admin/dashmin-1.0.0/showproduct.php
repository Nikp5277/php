<?php
include 'header.php';
include './funnctions.php';
$data = getJoin('category','product_table');
// echo "<pre>";
//  print_r($data);
?>

            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                   
               
                   
                  
              
             
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <!-- <h6 class="mb-4">Responsive Table</h6> -->
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <!-- <th scope="col">#</th> -->
                                            <th scope="col">p_id</th>
                                            <th scope="col">p_name</th>
                                            <th scope="col">p_detail</th>
                                            <th scope="col">Action</th>
                                          
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                    <?php  foreach($data as $d)
                    {?>    <tr>
                         <td> <?php echo $d["p_id"]?>
                        <td> <?php echo $d["p_name"]?>  
                        <td> <?php echo $d["p_detail"]?>
                       
                    </td>                                       
                                            <td>
                                            <button type="button" class="btn btn-danger">Delete</button>


                                        <button class='btn btn-info'>Update</button>

                                        

                                            </td>
                                        </tr> 

                                        <?php } ?>
                                      
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <?php include 'footer.php';?>