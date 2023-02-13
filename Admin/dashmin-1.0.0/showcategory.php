<?php
include 'header.php';
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
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Action</th>
                                          
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Chcolates</td>
                                            <td>1.png</td>
                                            <td>Chcolates</td>
                                           
                                            <td>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                            <button class='btn btn-info'>Update</button>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Pinapple</td>
                                            <td>2.png</td>
                                            <td>Pinapple</td>
                                           
                                            <td>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                            <button class='btn btn-info'>Update</button>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Ras Malai</td>
                                            <td>3.png</td>
                                            <td>Ras Malai</td>
                                           
                                            <td>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                            <button class='btn btn-info'>Update</button>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <?php include 'footer.php';?>