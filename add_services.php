<?php include 'templates/header.php';
include '../dbconnection.php';

if(isset($_POST['submit'])) {
  $service_type = $_POST['service_type'];
  $vehicle_type = $_POST['vehicle_type'];
  $labour_hrs = $_POST['labour_hrs'];
  $price = $_POST['price'];
  $skill_id = $_POST['skill_id'];
  
    
      $query = "INSERT INTO services_offered VALUES('','$service_type','$vehicle_type','$labour_hrs', '$price', '$skill_id')";
    mysqli_query($conn, $query);

    
 echo '<script>alert("Services inserted");
</script>'; }

   

  


 ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
     
        <div class="page-wrapper">

            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
  
            <div class="page-breadcrumb">
                <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Add Services</h4>
                        <div class="d-flex align-items-center">

                        </div>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                   
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div><br>
                <div class="row">
                    <!-- Column -->
                        
                    <div class="col-12" style="margin-bottom: 220px;">
                        
                   
                        <div class="card">
                            
                            <form action="" method="POST" autocomplete="off">
        <div class="card-body">
                                      
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Service Type</label>
                                                    <input type="text" class="form-control" name="service_type" required>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Vehicle Type</label>
                                                    <input type="text" class="form-control" name="vehicle_type" required>
                                                </div>
                                            </div>
                                            <!--/span-->
                                             <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Labour Hours</label>
                                                    <input type="text" class="form-control" name="labour_hrs" >
                                                </div>
                                            </div>
                                            <!--/span-->
                                               <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Price</label>
                                                    <input type="text" class="form-control" name="price" required>
                                                </div>
                                            </div>
                                            <!--/span-->
                                               <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Skill Id</label>
                                                    <input type="text" class="form-control" name="skill_id" >
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        
                                    </div>
                                    <div class="form-actions">
                                        <div class="card-body">
                                            <button type="submit" class="btn btn-success" name="submit"> <i class="fa fa-check"></i> Submit</button>
                                           
                                        </div>
                                    </div>
                        </div>
                    </form>
                    </div>
                  
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
<?php include 'templates/footer.php' ?>