<?php
  session_start();
  include ('pages/connection.php');
  if(!isset($_SESSION['username'])){
    header ('Location: pages/login/login.html');
  }
?>
<!DOCTYPE html>
<html lang="en">
<?php include"head-css.php"; ?>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
<?php include('navbar.php'); ?>
    <?php include('sidebar.php'); ?>
  <!-- Main content -->
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Reports</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Reports</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          </div>
          <!-- /.col -->
        </div>
        
        <div class="row">
          <div class="col-md-6">
            <!-- Line chart -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  User Population Chart
                </h3>
              </div>
              <div class="card-body">
                <div id="user-population" style="height: 338px;"></div>
              </div>
              <!-- /.card-body-->
            </div>
            <!-- /.card -->

            <!-- Area chart -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  MAAB Availments
                </h3>
              </div>
              <div class="card-body">
                <div id="Maab-Availments" style="height: 375px;" class="full-width-chart"></div>
              </div>
              <!-- /.card-body-->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->

          <div class="col-md-6">
            <!-- Bar chart -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Blood Chart
                </h3>
              </div>
              <div class="card-body">
                <div id="blood-population" style="height: 338px;"></div>
              </div>
              <!-- /.card-body-->
            </div>
            <!-- /.card -->

            <!-- Donut chart -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Trainings Chart
                </h3>
              </div>
              <div class="card-body">
                <div id="trainings-conducted" style="height: 338px;"></div>
              </div>
              <!-- /.card-body-->
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
  <!-- /.content-wrapper -->
   <?php include('footer.php'); ?>
</div>
<script>
     <?php 
        $staff = mysqli_query($con, "SELECT * from tblaccount where a_type = 'Staff' and status = 'Active'");
        $d1 = mysqli_num_rows($staff);

        $instructor = mysqli_query($con, "SELECT * from tblaccount where a_type = 'Instructor' and status = 'Active'");
        $d2 = mysqli_num_rows($instructor);

        $trainee = mysqli_query($con, "SELECT * from tblaccount where a_type = 'Trainee' and status = 'Active'");
        $d3 = mysqli_num_rows($trainee);

    ?>
<?php 
        $a1 = mysqli_query($con, "SELECT * from tbluserinfo where bloodtype = 'A-' || bloodtype = 'A+'");
        $a = mysqli_num_rows($a1);

        $b1 = mysqli_query($con, "SELECT * from tbluserinfo where bloodtype = 'B-' || bloodtype = 'B+'");
        $b = mysqli_num_rows($b1);

        $o1 = mysqli_query($con, "SELECT * from tbluserinfo where bloodtype = 'O-' || bloodtype = 'O+'");
        $o = mysqli_num_rows($o1);

        $ab1 = mysqli_query($con, "SELECT * from tbluserinfo where bloodtype = 'AB-' || bloodtype = 'AB+'");
        $ab = mysqli_num_rows($ab1);
    ?>
</script>
<script type="text/javascript">
  <?php 
        $jan = mysqli_query($con, "SELECT * from tblaccount where a_type = 'Staff' and status = 'Active'");
        $d1 = mysqli_num_rows($jan);

        $feb = mysqli_query($con, "SELECT * from tblaccount where a_type = 'Instructor' and status = 'Active'");
        $d2 = mysqli_num_rows($feb);

        $mar = mysqli_query($con, "SELECT * from tblaccount where a_type = 'Trainee' and status = 'Active'");
        $d3 = mysqli_num_rows($mar);
    ?>
Highcharts.chart('user-population', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'User Population'
    },
    xAxis: {
        categories: [
            'Staff',
            'Instructor',
            'Trainee'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'System User'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:1f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Population',
        data: [['Staff',<?php echo $d1; ?>],['Instructor',<?php echo $d2; ?>],['Trainee',<?php echo $d3; ?>]
        ]

    }]
});

<?php 
        $jan = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '01' and date_donated = YEAR(CURRENT_DATE())");
        $d1 = mysqli_num_rows($jan);

        $feb = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '02' and date_donated = YEAR(CURRENT_DATE())");
        $d2 = mysqli_num_rows($feb);

        $mar = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '03' and date_donated = YEAR(CURRENT_DATE())");
        $d3 = mysqli_num_rows($mar);

        $apr = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '04' and date_donated = YEAR(CURRENT_DATE())");
        $d4 = mysqli_num_rows($apr);

        $may = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '05' and date_donated = YEAR(CURRENT_DATE())");
        $d5 = mysqli_num_rows($may);

        $jun = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '06' and date_donated = YEAR(CURRENT_DATE())");
        $d6 = mysqli_num_rows($jun);

        $jul = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '07' and date_donated = YEAR(CURRENT_DATE())");
        $d7 = mysqli_num_rows($jul);

        $aug = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '08' and date_donated = YEAR(CURRENT_DATE())");
        $d8 = mysqli_num_rows($aug);

        $sep = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '09' and date_donated = YEAR(CURRENT_DATE())");
        $d9 = mysqli_num_rows($sep);

        $oct = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '10' and date_donated = YEAR(CURRENT_DATE())");
        $d10 = mysqli_num_rows($oct);

        $nov = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '11' and date_donated = YEAR(CURRENT_DATE())");
        $d11 = mysqli_num_rows($nov);

        $dec = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '12' and date_donated = YEAR(CURRENT_DATE())");
        $d12 = mysqli_num_rows($dec);

        /**/

        $jan = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '01' and date_donated = YEAR(CURRENT_DATE())-1");
        $b1 = mysqli_num_rows($jan);

        $feb = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '02' and date_donated = YEAR(CURRENT_DATE())-1");
        $b2 = mysqli_num_rows($feb);

        $mar = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '03' and date_donated = YEAR(CURRENT_DATE())-1");
        $b3 = mysqli_num_rows($mar);

        $apr = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '04' and date_donated = YEAR(CURRENT_DATE())-1");
        $b4 = mysqli_num_rows($apr);

        $may = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '05' and date_donated = YEAR(CURRENT_DATE())-1");
        $b5 = mysqli_num_rows($may);

        $jun = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '06' and date_donated = YEAR(CURRENT_DATE())-1");
        $b6 = mysqli_num_rows($jun);

        $jul = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '07' and date_donated = YEAR(CURRENT_DATE())-1");
        $b7 = mysqli_num_rows($jul);

        $aug = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '08' and date_donated = YEAR(CURRENT_DATE())-1");
        $b8 = mysqli_num_rows($aug);

        $sep = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '09' and date_donated = YEAR(CURRENT_DATE())-1");
        $b9 = mysqli_num_rows($sep);

        $oct = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '10' and date_donated = YEAR(CURRENT_DATE())-1");
        $b10 = mysqli_num_rows($oct);

        $nov = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '11' and date_donated = YEAR(CURRENT_DATE())-1");
        $b11 = mysqli_num_rows($nov);

        $dec = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '12' and date_donated = YEAR(CURRENT_DATE())-1");
        $b12 = mysqli_num_rows($dec);

        /***/

        $jan = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '01' and date_donated = YEAR(CURRENT_DATE())-2");
        $c1 = mysqli_num_rows($jan);

        $feb = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '02' and date_donated = YEAR(CURRENT_DATE())-2");
        $c2 = mysqli_num_rows($feb);

        $mar = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '03' and date_donated = YEAR(CURRENT_DATE())-2");
        $c3 = mysqli_num_rows($mar);

        $apr = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '04' and date_donated = YEAR(CURRENT_DATE())-2");
        $c4 = mysqli_num_rows($apr);

        $may = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '05' and date_donated = YEAR(CURRENT_DATE())-2");
        $c5 = mysqli_num_rows($may);

        $jun = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '06' and date_donated = YEAR(CURRENT_DATE())-2");
        $c6 = mysqli_num_rows($jun);

        $jul = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '07' and date_donated = YEAR(CURRENT_DATE())-2");
        $c7 = mysqli_num_rows($jul);

        $aug = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '08' and date_donated = YEAR(CURRENT_DATE())-2");
        $c8 = mysqli_num_rows($aug);

        $sep = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '09' and date_donated = YEAR(CURRENT_DATE())-2");
        $c9 = mysqli_num_rows($sep);

        $oct = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '10' and date_donated = YEAR(CURRENT_DATE())-2");
        $c10 = mysqli_num_rows($oct);

        $nov = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '11' and date_donated = YEAR(CURRENT_DATE())-2");
        $c11 = mysqli_num_rows($nov);

        $dec = mysqli_query($con, "SELECT * from tblblooddonation where MONTH(date_donated) = '12' and date_donated = YEAR(CURRENT_DATE())-2");
        $c12 = mysqli_num_rows($dec);
    ?>
Highcharts.chart('blood-population', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Donors Population'
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Number of Donors per Month'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:1f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: '<?php echo date('Y');?>',
        data: [['January',<?php echo $d1; ?>],['February',<?php echo $d2; ?>],['March',<?php echo $d3; ?>],['April',<?php echo $d4; ?>],['May',<?php echo $d5; ?>],['June',<?php echo $d6; ?>],['July',<?php echo $d7; ?>],['August',<?php echo $d8; ?>],['September',<?php echo $d9; ?>],['October',<?php echo $d10; ?>],['November',<?php echo $d11; ?>],['December',<?php echo $d12; ?>]
        ]

    },
    {
        name: '<?php echo date('Y')-1;?>',
        data: [['January',<?php echo $b1; ?>],['February',<?php echo $b2; ?>],['March',<?php echo $b3; ?>],['April',<?php echo $b4; ?>],['May',<?php echo $b5; ?>],['June',<?php echo $b6; ?>],['July',<?php echo $b7; ?>],['August',<?php echo $b8; ?>],['September',<?php echo $b9; ?>],['October',<?php echo $b10; ?>],['November',<?php echo $b11; ?>],['December',<?php echo $b12; ?>]
        ]

    },
    {
        name: '<?php echo date('Y')-2;?>',
        data: [['January',<?php echo $c1; ?>],['February',<?php echo $c2; ?>],['March',<?php echo $c3; ?>],['April',<?php echo $c4; ?>],['May',<?php echo $c5; ?>],['June',<?php echo $c6; ?>],['July',<?php echo $c7; ?>],['August',<?php echo $c8; ?>],['September',<?php echo $c9; ?>],['October',<?php echo $c10; ?>],['November',<?php echo $c11; ?>],['December',<?php echo $c12; ?>]
        ]

    }]
});


<?php 
        $jan = mysqli_query($con, "SELECT * from tblmaab where MONTH(effectivity) = '01' and effectivity = YEAR(CURRENT_DATE())");
        $d1 = mysqli_num_rows($jan);

        $feb = mysqli_query($con, "SELECT * from tblmaab where MONTH(effectivity) = '02' and effectivity = YEAR(CURRENT_DATE())");
        $d2 = mysqli_num_rows($feb);

        $mar = mysqli_query($con, "SELECT * from tblmaab where MONTH(effectivity) = '03' and effectivity = YEAR(CURRENT_DATE())");
        $d3 = mysqli_num_rows($mar);

        $apr = mysqli_query($con, "SELECT * from tblmaab where MONTH(effectivity) = '04' and effectivity = YEAR(CURRENT_DATE())");
        $d4 = mysqli_num_rows($apr);

        $may = mysqli_query($con, "SELECT * from tblmaab where MONTH(effectivity) = '05' and effectivity = YEAR(CURRENT_DATE())");
        $d5 = mysqli_num_rows($may);

        $jun = mysqli_query($con, "SELECT * from tblmaab where MONTH(effectivity) = '06' and effectivity = YEAR(CURRENT_DATE())");
        $d6 = mysqli_num_rows($jun);

        $jul = mysqli_query($con, "SELECT * from tblmaab where MONTH(effectivity) = '07' and effectivity = YEAR(CURRENT_DATE())");
        $d7 = mysqli_num_rows($jul);

        $aug = mysqli_query($con, "SELECT * from tblmaab where MONTH(effectivity) = '08' and effectivity = YEAR(CURRENT_DATE())");
        $d8 = mysqli_num_rows($aug);

        $sep = mysqli_query($con, "SELECT * from tblmaab where MONTH(effectivity) = '09' and effectivity = YEAR(CURRENT_DATE())");
        $d9 = mysqli_num_rows($sep);

        $oct = mysqli_query($con, "SELECT * from tblmaab where MONTH(effectivity) = '10' and effectivity = YEAR(CURRENT_DATE())");
        $d10 = mysqli_num_rows($oct);

        $nov = mysqli_query($con, "SELECT * from tblmaab where MONTH(effectivity) = '11' and effectivity = YEAR(CURRENT_DATE())");
        $d11 = mysqli_num_rows($nov);

        $dec = mysqli_query($con, "SELECT * from tblmaab where MONTH(effectivity) = '12' and effectivity = YEAR(CURRENT_DATE())");
        $d12 = mysqli_num_rows($dec);
    ?>

Highcharts.chart('Maab-Availments', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Availments'
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Number of Availments per Month'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:1f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Population for  <?php echo date('Y');?>',
        data: [['January',<?php echo $d1; ?>],['February',<?php echo $d2; ?>],['March',<?php echo $d3; ?>],['April',<?php echo $d4; ?>],['May',<?php echo $d5; ?>],['June',<?php echo $d6; ?>],['July',<?php echo $d7; ?>],['August',<?php echo $d8; ?>],['September',<?php echo $d9; ?>],['October',<?php echo $d10; ?>],['November',<?php echo $d11; ?>],['December',<?php echo $d12; ?>]
        ]

    }]
});

<?php 
$jan = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = '01'  and start = YEAR(CURRENT_DATE())");
$d1 = mysqli_num_rows($jan);

$feb = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = '02' and start = YEAR(CURRENT_DATE())");
$d2 = mysqli_num_rows($feb);

$mar = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = '03' and start = YEAR(CURRENT_DATE())");
$d3 = mysqli_num_rows($mar);

$apr = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = '04' and start = YEAR(CURRENT_DATE())");
$d4 = mysqli_num_rows($apr);

$may = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = '05' and start = YEAR(CURRENT_DATE())");
$d5 = mysqli_num_rows($may);

$jun = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = '06' and start = YEAR(CURRENT_DATE())");
$d6 = mysqli_num_rows($jun);

$jul = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = '07' and start = YEAR(CURRENT_DATE())");
$d7 = mysqli_num_rows($jul);

$aug = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = '08' and start = YEAR(CURRENT_DATE())");
$d8 = mysqli_num_rows($aug);

$sep = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = '09' and start = YEAR(CURRENT_DATE())");
$d9 = mysqli_num_rows($sep);

$oct = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = '10' and start = YEAR(CURRENT_DATE())");
$d10 = mysqli_num_rows($oct);

$nov = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = '11' and start = YEAR(CURRENT_DATE())");
$d11 = mysqli_num_rows($nov);

$dec = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = '12' and start = YEAR(CURRENT_DATE())");
$d12 = mysqli_num_rows($dec);

/**/

$past1 = Date('Y', -2);

$jan = mysqli_query($con,"SELECT * from tblevents where MONTH(start) = '01'  and start = YEAR(CURRENT_DATE())-1");
$b1 = mysqli_num_rows($jan);

$feb = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = '02' and start = YEAR(CURRENT_DATE())-1");
$b2 = mysqli_num_rows($feb);

$mar = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = '03' and start = YEAR(CURRENT_DATE())-1");
$b3 = mysqli_num_rows($mar);

$apr = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = '04' and start = YEAR(CURRENT_DATE())-1");
$b4 = mysqli_num_rows($apr);

$may = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = '05' and start = YEAR(CURRENT_DATE())-1");
$b5 = mysqli_num_rows($may);

$jun = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = '06' and start = YEAR(CURRENT_DATE())-1");
$b6 = mysqli_num_rows($jun);

$jul = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = '07' and start = YEAR(CURRENT_DATE())-1");
$b7 = mysqli_num_rows($jul);

$aug = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = '08' and start = YEAR(CURRENT_DATE())-1");
$b8 = mysqli_num_rows($aug);

$sep = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = '09' and start = YEAR(CURRENT_DATE())-1");
$b9 = mysqli_num_rows($sep);

$oct = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = '10' and start = YEAR(CURRENT_DATE())-1");
$b10 = mysqli_num_rows($oct);

$nov = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = '11' and start = YEAR(CURRENT_DATE())-1");
$b11 = mysqli_num_rows($nov);

$dec = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = '12' and start = YEAR(CURRENT_DATE())-1");
$b12 = mysqli_num_rows($dec);

/***/


$jan = mysqli_query($con,"SELECT * from tblevents where MONTH(start) = '01'  and start = YEAR(CURRENT_DATE())-2");
$c1 = mysqli_num_rows($jan);

$feb = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = '02' and start = YEAR(CURRENT_DATE())-2");
$c2 = mysqli_num_rows($feb);

$mar = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = '03' and start = YEAR(CURRENT_DATE())-2");
$c3 = mysqli_num_rows($mar);

$apr = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = '04' and start = YEAR(CURRENT_DATE())-2");
$c4 = mysqli_num_rows($apr);

$may = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = '05' and start = YEAR(CURRENT_DATE())-2");
$c5 = mysqli_num_rows($may);

$jun = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = '06' and start = YEAR(CURRENT_DATE())-2");
$c6 = mysqli_num_rows($jun);

$jul = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = '07' and start = YEAR(CURRENT_DATE())-2");
$c7 = mysqli_num_rows($jul);

$aug = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = '08' and start = YEAR(CURRENT_DATE())-2");
$c8 = mysqli_num_rows($aug);

$sep = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = '09' and start = YEAR(CURRENT_DATE())-2");
$c9 = mysqli_num_rows($sep);

$oct = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = '10' and start = YEAR(CURRENT_DATE())-2");
$c10 = mysqli_num_rows($oct);

$nov = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = '11' and start = YEAR(CURRENT_DATE())-2");
$c11 = mysqli_num_rows($nov);

$dec = mysqli_query($con, "SELECT * from tblevents where MONTH(start) = '12' and start = YEAR(CURRENT_DATE())-2");
$c12 = mysqli_num_rows($dec);

?>
Highcharts.chart('trainings-conducted', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Trainings Conducted'
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Trainings Conducted per Month'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:1f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: '<?php echo date('Y');?>',
        data: [['January',<?php echo $d1; ?>],['February',<?php echo $d2; ?>],['March',<?php echo $d3; ?>],['April',<?php echo $d4; ?>],['May',<?php echo $d5; ?>],['June',<?php echo $d6; ?>],['July',<?php echo $d7; ?>],['August',<?php echo $d8; ?>],['September',<?php echo $d9; ?>],['October',<?php echo $d10; ?>],['November',<?php echo $d11; ?>],['December',<?php echo $d12; ?>]
        ]

    },
    {
        name: '<?php echo date('Y')-1;?>',
        data: [['January',<?php echo $b1; ?>],['February',<?php echo $b2; ?>],['March',<?php echo $b3; ?>],['April',<?php echo $b4; ?>],['May',<?php echo $b5; ?>],['June',<?php echo $b6; ?>],['July',<?php echo $b7; ?>],['August',<?php echo $b8; ?>],['September',<?php echo $b9; ?>],['October',<?php echo $b10; ?>],['November',<?php echo $b11; ?>],['December',<?php echo $b12; ?>]
        ]

    },
    {
        name: '<?php echo date('Y')-2;?>',
        data: [['January',<?php echo $c1; ?>],['February',<?php echo $c2; ?>],['March',<?php echo $c3; ?>],['April',<?php echo $c4; ?>],['May',<?php echo $c5; ?>],['June',<?php echo $c6; ?>],['July',<?php echo $c7; ?>],['August',<?php echo $c8; ?>],['September',<?php echo $c9; ?>],['October',<?php echo $c10; ?>],['November',<?php echo $c11; ?>],['December',<?php echo $c12; ?>]
        ]

    }
    ]
});


    </script>
</body>
</html>
