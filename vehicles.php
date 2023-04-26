<?php include 'templates/header.php';

    include '../dbconnection.php'

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
                        <h4 class="page-title">Vehicles Data</h4>
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
                        
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- <h4 class="card-title">Zero Configuration</h4> -->
                                <!-- <h6 class="card-subtitle">DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function:<code> $().DataTable();</code>. You can refer full documentation from here <a href="https://datatables.net/">Datatables</a></h6> -->
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>VIN</th>
                                                <th>Color</th>
                                                <th>Manufacturer</th>
                                                <th>Model</th>
                                                <th>Year</th>
                                                <th>Type/th>
                                                <th>Customer</th>
                                                <!-- <th>Salary</th> -->
                                            </tr>
 <?php
$query=mysqli_query($conn,"select vehicle.VIN, customer_data.name, vehicle.COLOR, vehicle.MANUFACTURER, vehicle.MODEL, vehicle.YEAR, vehicle.TYPE from vehicle join customer_data on vehicle.customer_id = customer_data.id");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                
<td><?php echo $row['VIN'];?></td>
<td><?php echo $row['COLOR'];?></td>
<td><?php echo $row['MANUFACTURER'];?></td>
<td><?php echo $row['MODEL'];?></td>
<td><?php echo $row['YEAR'];?></td>
<td><?php echo $row['TYPE'];?></td>
<td><?php echo $row['name'];?></td>
                                            </tr>
                                         <?php
$cnt=$cnt+1;
 } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>VIN</th>
                                                <th>Color</th>
                                                <th>Manufacturer</th>
                                                <th>Model</th>
                                                <th>Year</th>
                                                <th>Type/th>
                                                <th>Customer</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
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