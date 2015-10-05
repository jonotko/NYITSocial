<?php //add_event.php
require_once 'functions.php';
require_once 'header.php';
?>
<div class='container-fluid'>
<?php
if(isset($_GET['submitted'])){
    echo "<h1 class='messages'>Please Fill Out All Fields</h1>";
}
?>
<form class="form-horizontal" role="form" method="post" action="helperPages/insert.php">
    <div class='form-group'>
       <label class='col-xs-2'>Name:</label>
        <div class="col-xs-12">
        <input type='text'class="form-control" name='name' placeholder="Enter the Name of the event" />
        </div>
    </div>
    <div class="form-group">
        <label class='col-xs-2'>Description:</label>
        <div class="col-xs-12">
            <input type='text' class="form-control" name="description" placeholder="Enter a brief description here"  />
        </div>
        </div>
        <div class='form-group'>
        <label class='col-xs-2'>Date:</label>
        <div class="col-xs-12">
        <input type='date'class="form-control" name="date" placeholder="YYYY-MM-DD" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-2" >Time:</label>
        <div class="col-xs-12">
            <input type="time" class="form-control" name="time" placeholder="00:00 am/pm" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-2" >Location:</label>
        <div class="col-xs-12">
            <input type="text" class="form-control" name="location" placeholder="Enter Venue" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-6" >Event Type:</label>
        <div class="col-xs-12">
            <select class="form-control" name="event">
                <option name="party">party</option>
                <option name="club meeting" selected="selected">club meeting</option>
                <option name="campus event">campus event</option>
                <option name="greek mixer">greek mixer</option>
            </select>
        </div>
    </div>
    
    <div class="form-group">
    <div class="col-sm-10">
      <input type="submit" value="Add Event" />
    </div>
  </div>
    
</form>
</div>
<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>






