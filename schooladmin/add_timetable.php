<?php
include('include/header.php');

$id = $_SESSION['id'];
$data = mysqli_query($sql_con, "select * from schooladmin where id = '$id' ");
$row = mysqli_fetch_array($data);

?>

<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Add Timetable</h3>
<ul class="breadcrumb">
<li class="breadcrumb"><a href="timetable.php">Timetable/</a></li>
<li class="breadcrumb-item active">Add Timetable</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<form>
<div class="row">
<div class="col-12">
<h5 class="form-title"><span>Timetable</span></h5>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Teacher Id <span class="login-danger">*</span></label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Name <span class="login-danger">*</span></label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Class <span class="login-danger">*</span></label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Section <span class="login-danger">*</span></label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Subject <span class="login-danger">*</span></label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms calendar-icon">
<label>Date <span class="login-danger">*</span></label>
<input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Start Time <span class="login-danger">*</span></label>
<input type="time" class="form-control">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>End Time <span class="login-danger">*</span></label>
<input type="time" class="form-control">
</div>
</div>
<div class="col-12">
<div class="student-submit">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

</html>