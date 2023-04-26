<?php include 'templates/header.php';
include '../dbconnection.php';

if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $price = $_POST['price'];
  
    
      $query = "INSERT INTO parts VALUES('','$name','$price','')";
    mysqli_query($conn, $query);

    
 echo '<script>alert("Vehicle parts inserted");
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
                        <h4 class="page-title">Add Parts</h4>
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
                                                    <label>Part Name</label>
                                                    <input type="text" class="form-control" name="name" required>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Price</label>
                                                    <input type="text" class="form-control" name="price" required>
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