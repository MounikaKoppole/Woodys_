<?php
// Include
include 'templates/header.php';
include "../dbconnection.php";
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE parts set  name='" . $_POST['name'] . "', price='" . $_POST['price'] . "'  WHERE id='" . $_POST['id'] . "'");
echo "<script>location.href='view_parts.php';</script>";
}
$result = mysqli_query($conn,"SELECT * FROM parts WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
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
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Part Name</label>
                                                    <input type="text" class="form-control" name="name" value="<?php echo $row["name"]; ?>">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Price</label>
                                                    <input type="text" class="form-control" name="price" value="<?php echo $row["price"]; ?>">
                                                </div>
                                            </div>
                                            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>"/>
                                            <!--/span-->
                                            <div class="col-md-4">
                                        
                                            <button type="submit" class="btn btn-success" name="submit" style="margin-top: 28px;"> <i class="fa fa-check"></i> Update</button>
                                           
                                      
                                    
                                            </div>
                                        </div>
                                        <!--/row-->
                                        
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