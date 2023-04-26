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
                        <h4 class="page-title">Services offered</h4>
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
                                                <th>id</th>
                                                <th>Service Type</th>
                                                <th>Vehicle Type</th>
                                                <th>Labour Hours</th>
                                                <th>Price</th>
                                                <th>Technician SSN</th>
                                                <th>Actions</th>
                                                <!-- <th>Salary</th> -->
                                            </tr>
 <?php
$query=mysqli_query($conn,"select services_offered.id,services_offered.service_type, services_offered.vehicle_type, services_offered.labour_hrs, services_offered.price, technician_skills.technician_ssn from services_offered join technician_skills on services_offered.skill_id=technician_skills.skill_id");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $cnt;?></td>
<td><?php echo $row['service_type'];?></td>
<td><?php echo $row['vehicle_type'];?></td>
<td><?php echo $row['labour_hrs'];?></td>
<td><?php echo $row['price'];?></td>
<td><?php echo $row['technician_ssn'];?></td>
<td><a class="btn btn-success" href="update_services.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
                                            </tr>
                                         <?php
$cnt=$cnt+1;
 } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                               <th>id</th>
                                                <th>Service Type</th>
                                                <th>Vehicle Type</th>
                                                <th>Labour Hours</th>
                                                <th>Price</th>
                                                <th>Technician SSN</th>
                                                <th>Actions</th>
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