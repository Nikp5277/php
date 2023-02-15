<?php include 'header.php'; ?>


            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <!-- <h6 class="mb-4">Basic Form</h6> -->
                            <form Action="funnctions.php" method="post">
                                <div class="mb-3">
                                    <label for="exampleInputName" class="form-label">Name</label>
                                    <input type="text">
                                   
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputDescription" class="form-label">Description</label>
                                    <input type="text">
                                </div> 

                                <div class="mb-3">
                                    <label for="exampleInputimage" class="form-label">Image</label>
                                    <input type="file">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
                                </div>
                                <button type="submit" class="btn btn-primary">Add Category</button>
                            </form>
                        </div>
                    </div>
                   
                   
                  
                 
               
               
                </div>
            </div>
            <!-- Form End -->

<?php include 'footer.php';?>