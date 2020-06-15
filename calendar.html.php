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
  <section class="content">
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Calendar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Calendar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!--Modal-->
            <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
            <form class="form-horizontal" method="POST" action="add-event.php" id="Add-Event">
            
              <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Add Event</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                
                  <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-10">
                      <input type="text" name="title" class="form-control" id="title" placeholder="Title" required="">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Venue</label>
                    <div class="col-sm-10">
                      <input type="text" name="venue" class="form-control" id="venue" placeholder="Venue" required="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="description" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                      <textarea type="text"  name="description" class="form-control" id="description" placeholder="Description" required=""></textarea> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="color" class="col-sm-2 control-label">Category</label>
                    <div class="col-sm-10">
                      <select name="color" class="form-control" id="color" required="">
                          <option value="">Choose</option>
                          <?php 
                        
                                          $stat = mysqli_query($con, "SELECT * from tblcategory");
                                            while($row_stat = mysqli_fetch_array($stat))
                                            {
                                                 if($row['color'] == $row_stat['color'])
                                                 {
                                                    echo '
                                                    <option value="'.$row_stat['color'].'"  selected="selected"> '.$row_stat['cat_name'].'</option>
                                                    ';
                                                 }
                                                 else
                                                 {
                                                    echo '
                                                    <option value="'.$row_stat['color'].'" > '.$row_stat['cat_name'].'</option>
                                                    ';
                                                 }
                                            }
                        ?>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="start" class="col-sm-3 control-label">Start date</label>
                    <div class="col-sm-10">
                      <input type="date" name="start" class="form-control" id="start">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="end" class="col-sm-3 control-label">End date</label>
                    <div class="col-sm-10">
                      <input type="date" name="end" class="form-control" id="end">
                    </div>
                  </div>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
              </div>
            </form>
            </div>
          </div>
        </div>

      

          <!--ADD  CATEGORY-->
            <div id="addCategory" class="modal fade">
            <form method="post" >
             <div class="modal-dialog modal-md">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                    <div class="modal-body" style="width: 100%;">
                        
                        <div class="row" >
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Category Name :</label>
                                    <input required name="cat_name" id="cat_name" class="form-control input-sm" type="text" placeholder="Input Name"  />
                                </div>
                                <div class="form-group">
                                    <label>Category Color :</label>
                                    <input required name="color" id="color" class="form-control input-sm" type="color" placeholder="Input Name"  />
                                </div>
                            </div>    
                        </div>
                        
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn waves-effect waves-light pull-right" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn waves-effect waves-light btn-danger pull-right" id="btn_add_cat" name="btn_add_cat" >Add</button>
                    </div>
                    <?php include"AddFunction.php"; ?>

                </div>
              </div>
              </form>

            </div>
            <div class="modal fade" id="editEvent" role="dialog" aria-labelledby="eventFormLabel" aria-hidden="true" data-persist="false">
        <div class="modal-dialog modal-md">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Event Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <form class="form-horizontal" method="post">

                    <div class="modal-body">
                        <input type="hidden" name="hidden_id" id="hidden_id"/>
                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="editTitle" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="venue" class="col-sm-2 control-label">Venue</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="editVenue" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" id="editDescription" readonly></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        
                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>

          <!--/Modal-->
          <div class="col-md-3">
            <div class="sticky-top mb-3">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title"><b>Calendar Management</b></h4>
                </div>
                <div class="card-body">
                  <!-- the events -->
                  <div id="external-events">
                     <div>Color Coding:</div>
                      <div class="box-body">

                        <?php 
                              
                                  $stat = mysqli_query($con, "SELECT * from tblcategory");
                                    while($row_stat = mysqli_fetch_array($stat))
                                    {
                                         echo '<div class="color-palette-set">
                                            <div  style="color:'.$row_stat['color'].';">&#9724; '.$row_stat['cat_name'].'
                                            </div>
                                         </div>';
                                         
                                    }
                              ?>
                          
                    </div>
                    <hr>
                    <?php 
                                    if(($_SESSION['role'] == "Chapter Administrator")||($_SESSION['role'] == "System Administrator")) {
                                      echo'
                                    
 
                    <div class="pull-right text-right">
                      Add Category <button class="btn btn-primary" data-toggle="modal" data-target="#addCategory"><i class="fa fa-plus"></i></button>
                    </div>';
                    }
                    ?>

                     <div class="pull-right text-right">
                      Add Event Data<button class="btn btn-primary" data-toggle="modal" data-target="#ModalAdd"><i class="fa fa-plus"></i></button>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
           
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-primary">
              <div class="card-body p-0">
                <!-- THE CALENDAR -->
                <div id="calendar"></div>
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
   <?php include('footer.php'); ?>
</div>
<!-- Page specific script -->
<script type="text/javascript">
      function myFunction(){
          var x = document.getElementsById("date_start").min;
      }
  </script>
<script>
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }
    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()

    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendarInteraction.Draggable;
    var calendarEl = document.getElementById('calendar');

    // initialize the external events
    // -----------------------------------------------------------------

   ;

    var calendar = new Calendar(calendarEl, {
      plugins: [ 'bootstrap', 'interaction', 'dayGrid', 'timeGrid' ],
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      'themeSystem': 'bootstrap',
      events: "Calendar-Fetch-Event.php",
      editable  : false,
      eventLimit: false, // allow "more" link when too many events
      
    });

    calendar.render();
  })
</script>
</body>
</html>
