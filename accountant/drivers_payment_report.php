<?php 
include 'expiredSession.php';
?>


<!DOCTYPE html>
<html lang="en">
  <?php include('../head.php'); ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


   
      <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav bold">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

      <div class="dropdown show nav-item d-none d-sm-inline-block" >
          <a class="btn btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-weight:bolder; color: steelblue;" onMouseOver="this.style.color='white'" onMouseOut="this.style.color='steelblue'">
            PICKUPS
          </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="load_delivered.php">Pickups Delivered</a>
              <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="vehicle_workload.php">Vehicles Workload</a>
          </div>
        </div>

           <div class="dropdown show nav-item d-none d-sm-inline-block" >
          <a class="btn btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLinkPayout" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-weight:bolder; color: steelblue;" onMouseOver="this.style.color='white'" onMouseOut="this.style.color='steelblue'">
            PAY-OUT
          </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkPayout">
            <a class="dropdown-item" href="due_payment.php">Due Payment</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="payrollPaid.php">Successful Payment</a>
          </div>
        </div>

        <div class="dropdown show nav-item d-none d-sm-inline-block" >
          <a class="btn btn-sm dropdown-toggle" href="#" id="dropdownMenuLinkReport" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-weight:bolder; color: steelblue;" onMouseOver="this.style.color='white'" onMouseOut="this.style.color='steelblue'">
            REPORT
          </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkReport">
            <a class="dropdown-item" href="registered_Expenditures.php">Expenditures</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="payout_report.php">Payout</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="vehicle_income.php">Vehicles Income</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="income_Generated.php">Company Income Generated</a>
          </div>
        </div>
      
    </ul>

    <!-- Right navbar links -->
<?php include 'singnout_edit_profile.php'; ?>

  </nav>
  <!-- /.navbar -->
<?php 

 $sql = "SELECT * FROM companyinfo"; 
 $query = mysqli_query($conn, $sql); 
 $row = mysqli_fetch_assoc($query);
?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">

      <span class="brand-text font-weight-light"><b class="name bold"><?php echo $row["name"];?></b>
        </span>
    </a>

<!-- Sidebar -->
     <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                DASHBOARD
              </p>
            </a>
          </li>                 
       
            <li class="nav-item">
                <a href="load_delivered.php" class="nav-link">
                  <i class="fas fa-check nav-icon"></i>
                  <p>Loads Delivered</p>
                </a>
              </li>

                <li class="nav-item">
                <a href="vehicle_workload.php" class="nav-link">
                  <i class="fa fa-tasks nav-icon"></i>
                  <p>Vehicles Workload</p>
                </a>
              </li>  



           <li class="nav-item">
            <a href="#" class="nav-link">
              <p class="font-size-17 bold">
                PAYMENT
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                <a href="due_payment.php" class="nav-link">
                  <i class="fa fa-money-check nav-icon"></i>
                  <p>Due Payment</p>
                </a>
              </li>

                <li class="nav-item">
                <a href="payrollPaid.php" class="nav-link">
                  <i class="fa fa-book nav-icon"></i>
                  <p>Successful Payment</p>
                </a>
              </li>


               <li class="nav-item">
                <a href="paid_pickups.php" class="nav-link">
                  <i class="fa fa-money-check nav-icon"></i>
                  <p>Paid Loads</p>
                </a>
              </li>
            </ul>
          </li>             

          <li class="nav-item  menu-open">
            <a href="#" class="nav-link active">
              <p class="font-size-17 bold">
                REPORT
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="registered_Expenditures.php" class="nav-link">
                  <i class="fa fa-money-check nav-icon"></i>
                  <p>Expenditures</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="payout_report.php" class="nav-link active">
                  <i class="fa fa-money-check nav-icon"></i>
                  <p>Pay-Out</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="vehicle_income.php" class="nav-link">
                  <i class="fa fa-money-check nav-icon"></i>
                  <p>Vehicles Income Generated</p>
                </a>
              </li>

               <li class="nav-item">
                <a href="income_Generated.php" class="nav-link">
                  <i class="fa fa-money-check nav-icon"></i>
                  <p>Company Income Generated</p>
                </a>
              </li>
            </ul>
          </li>
          <hr>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
     
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <!-- New row -->
          <div class="row">
          <div class="col">
              <h5 class="text-center"><b style="color:green;">DRIVERS PAYMENT REPORTS</b></h5>
                <form class="form" method="POST">
                  <div class="row">
                    <div class="col">
                      
                    </div>
                      <div class="col">
                        <div class="form-group">
                          <label>START</label>
                          <input type="date" name="startDate" class="form-control" placeholder="DD-MM-Y">
                        </div>
                      </div>

                     <div class="col">
                        <div class="form-group text-right">
                        <label>END</label>
                       <input type="date" name="endDate" class="form-control" placeholder="DD-MM-Y">
                      </div>
                    </div>
                    <div class="col"> 

                    </div>
                  </div>

                  <div class="row text-center">
                        <div class="col">
                        <div class="form-group">
                          <input type="submit" name="generate" class="btn btn-primary" value="Generate">
                        </div>
                      </div>
                  </div>
                </form>
            <div class="card card-primary card-outline">
              <div class="card-body">
                <table id="example1" class="table font-size-13">
                  <thead>
                   <tr>
                    <th>DRIVER ID</th>
                    <th>PAYMENT RANGE</th>
                    <th>AMOUNT PAID</th>
                    <th>DATE PAID</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php

                  if (isset($_POST["generate"])) {
                        $startDate = $_POST['startDate'];
                        $endDate = $_POST['endDate'];

                        $start = date('d-m-Y', strtotime($startDate));
                        $end = date('d-m-Y', strtotime($endDate));

                       $sql = "SELECT wages.amountPaid, wages.comment, wages.driver_id, wages.datePaid, wages.timePaid, wages.startDate, wages.endDate, users.id, users.name FROM wages 
                       INNER JOIN users 
                       ON wages.driver_id = users.id WHERE wages.datePaid BETWEEN '".$start."' AND '".$end."'";
                      $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

                      while ($row = mysqli_fetch_assoc($query)) {
                      ?>
                      <tr>
                          <td><?php echo $row['driver_id']; ?></td>
                         <td><?php echo $row['startDate']; ?> - <?php echo $row['endDate']; ?></td>
                        <td><?php echo $row['amountPaid']; ?> <sup style="color:green; font-weight: bolder;">USD</sup></td>
                        <td><?php echo $row['datePaid']; ?></td>
                        
                        <td>
                          <a class="btn btn-sm btn-success" data-toggle="modal" data-target="#drivers_all_loads<?php echo $row["id"];?>"><i class="fa fa-eye"></i> Report</a>                         
                        </td>

                      </tr>

                    <?php     
                     include 'drivers_all_load_pay_modal_report.php';                 
              
                      }
                    }

                     else{
                      $sql="SELECT wages.amountPaid, wages.comment, wages.driver_id, wages.datePaid, wages.timePaid, wages.startDate, wages.endDate, users.id, users.name FROM wages 
                       INNER JOIN users 
                       ON wages.driver_id = users.id";
                      $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

                      while ($row = mysqli_fetch_assoc($query)) {
                      ?>
                      <tr>
                          <td><?php echo $row['driver_id']; ?></td>
                         <td><?php echo $row['startDate']; ?> - <?php echo $row['endDate']; ?></a></td>
                          <td><?php echo $row['amountPaid']; ?><sup style="color:green; font-weight: bolder;">USD</sup></td>
                        <td><?php echo $row['datePaid']; ?></td>
                        
                        <td>
                          <a class="btn btn-sm btn-success" data-toggle="modal" data-target="#drivers_all_loads<?php echo $row["id"];?>"><i class="fa fa-eye"></i> Report</a>                        
                        </td>

                      </tr>

                    <?php 
                    include 'drivers_all_load_pay_modal_report.php';
                      }
                    }


                    ?>
              
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include('../footer.php'); ?>
<script src="../plugins/select2/js/select2.full.min.js"></script>


<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": false,
       "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  })
</script>
</body>
</html>
''