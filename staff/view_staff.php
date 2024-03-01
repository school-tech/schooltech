<?php
include('include/header.php');

$id = $_SESSION['id'];
$data = mysqli_query($sql_con, "select * from teacher where id = '$id' ");
$row = mysqli_fetch_array($data);

?>


<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<div class="page-sub-header">
<h3 class="page-title">Welcome, Mr <span><?php echo $row['lastname'] ?></span></h3>
<ul class="breadcrumb">
<li class="breadcrumb"><a href="view_staff.php">Home/</a></li>
<li class="breadcrumb-item active">Teacher</li>
</ul>
</div>
</div>
</div>
</div>


<div class="row">
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-comman w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-info">
<h6>Total Classes</h6>
<h3>03</h3>
</div>
<div class="db-icon">
<img src="assets/img/icons/teacher-icon-01.svg" alt="Dashboard Icon">
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-comman w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-info">
<h6>Total Students</h6>
<h3>100</h3>
</div>
<div class="db-icon">
<img src="assets/img/icons/dash-icon-01.svg" alt="Dashboard Icon">
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-comman w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-info">
<h6>Total Subjects</h6>
<h3>3</h3>
</div>
<div class="db-icon">
<img src="assets/img/icons/teacher-icon-02.svg" alt="Dashboard Icon">
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-comman w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-info">
<h6>Total Periods</h6>
<h3>6</h3>
</div>
<div class="db-icon">
<img src="assets/img/icons/teacher-icon-03.svg" alt="Dashboard Icon">
</div>
</div>
</div>
</div>
</div>
</div>


<div class="row">
<div class="col-12 col-lg-12 col-xl-12">
<div class="row">
<div class="col-12 col-lg-8 col-xl-12 d-flex">
<div class="card flex-fill comman-shadow">
<div class="card-header">
<div class="row align-items-center">
<div class="col-6">
<h5 class="card-title">Today's Lesson</h5>
</div>
</div>
</div>
<div class="pt-3 pb-3">
<div class="table-responsive lesson">
<table class="table table-center">
<tbody>
<tr>
<td>
<div class="date">
<b>Chemistry</b>
<p>First Period</p>
<ul class="teacher-date-list">
<li><i class="fas fa-calendar-alt me-2"></i>SSS2 Science</li>
<li>|</li>
<li><i class="fas fa-clock me-2"></i>09:00 - 10:00 am</li>
</ul>
</div>
</td>
<td>
<div class="lesson-confirm">
</div>
</td>
</tr>
<tr>
<td>
<div class="date">
<b>Physics</b>
<p>Third Period</p>
<ul class="teacher-date-list">
<li><i class="fas fa-calendar-alt me-2"></i>SSS3 Science</li>
<li>|</li>
<li><i class="fas fa-clock me-2"></i>11:00 - 12:00 am</li>
</ul>
</div>
</td>
<td>
<div class="lesson-confirm">
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-12 col-lg-12 col-xl-12">
<div class="row">
<div class="col-12 col-lg-8 col-xl-12 d-flex">
<div class="card flex-fill comman-shadow">
<div class="card-header">
<div class="row align-items-center">
<div class="col-6">
<h5 class="card-title">Exams Date</h5>
</div>
</div>
</div>
<div class="pt-3 pb-3">
<div class="table-responsive lesson">
<table class="table table-center">
<tbody>
<tr>
<td>
<div class="date">
<b>Chemistry</b>
<p>SSS2 Science</p>
<ul class="teacher-date-list">
<li><i class="fas fa-calendar-alt me-2"></i>22<sup>nd</sup> March, 2024</li>
<li>|</li>
<li><i class="fas fa-clock me-2"></i>08:00 - 11:00 am</li>
</ul>
</div>
</td>
<td>
<div class="lesson-confirm">
</div>
</td>
</tr>
<tr>
<td>
<div class="date">
<b>Physics</b>
<p>SSS3 Science</p>
<ul class="teacher-date-list">
<li><i class="fas fa-calendar-alt me-2"></i>25<sup>th</sup> March, 2024</li>
<li>|</li>
<li><i class="fas fa-clock me-2"></i>11:00am - 2:00 pm</li>
</ul>
</div>
</td>
<td>
<div class="lesson-confirm">
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>


<div class="col-md-12">
<div class="card bg-white">
<div class="card-header">
<h5 class="card-title">Timetable Per Class</h5>
</div>
<div class="card-body">
<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
<li class="nav-item"><a class="nav-link active" href="#bottom-justified-tab1" data-bs-toggle="tab">SS1</a></li>
<li class="nav-item"><a class="nav-link" href="#bottom-justified-tab2" data-bs-toggle="tab">SS2</a></li>
<li class="nav-item"><a class="nav-link" href="#bottom-justified-tab3" data-bs-toggle="tab">SS3</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane show active" id="bottom-justified-tab1">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Timetable</h3>
</div>
<div class="col-auto text-end float-end ms-auto download-grp">
<a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
</div>
</div>
</div>

<div class="table-responsive">
<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
<thead class="student-thread">
<tr>
<th>Days</th>
<th> 1<sup>st</sup> Period</th>
<th>2<sup>nd</sup> Period</th>
<th> 3<sup>rd</sup> Period</th>
<th> 4<sup>th</sup> Period</th>
<th> 5<sup>th</sup> Period</th>
<th> 6<sup>th</sup> Period</th>
<th> 7<sup>th</sup> Period</th>
</tr>
</thead>
<tbody>
<tr>
<td><b>Time</b></td>
<td>
<h2>
<a><b>8:00-8:45</b></a>
</h2>
</td>
<td><b>8:45-9:30</b></td>
<td><b>9:30-10:15</b></td>
<td><b>10:15-11:00</b></td>
<td><b>11:30-12:20</b></td>
<td><b>12:20-1:15</b></td>
<td><b>1:15-2:00</b></td>
</tr>
<tr>
<td>Monday</td>
<td>Chemistry</td>
<td>Chemistry</td>
<td></td>
<td></td>
<td>Physics</td>
<td></td>
<td></td>
</tr>
<tr>
<td>Tuesday</td>
<td></td>
<td></td>
<td>Physics</td>
<td>Physics</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>Wednesday</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>Physics</td>
<td></td>
</tr>
<tr>
<td>Thursday</td>
<td></td>
<td>Physics</td>
<td></td>
<td></td>
<td>Chemistry</td>
<td>Chemistry</td>
<td></td>
</tr>
<tr>
<td>Friday</td>
<td></td>
<td>Chemistry</td>
<td>Chemistry</td>
<td></td>
<td></td>
<td></td>
<td>Physics</td>
</tr>
</tbody>
</table>
</div>

</div>
<div class="tab-pane" id="bottom-justified-tab2">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Timetable</h3>
</div>
<div class="col-auto text-end float-end ms-auto download-grp">
<a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
</div>
</div>
</div>

<div class="table-responsive">
<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
<thead class="student-thread">
<tr>
<th>Days</th>
<th> 1<sup>st</sup> Period</th>
<th>2<sup>nd</sup> Period</th>
<th> 3<sup>rd</sup> Period</th>
<th> 4<sup>th</sup> Period</th>
<th> 5<sup>th</sup> Period</th>
<th> 6<sup>th</sup> Period</th>
<th> 7<sup>th</sup> Period</th>
</tr>
</thead>
<tbody>
<tr>
<td><b>Time</b></td>
<td>
<h2>
<a><b>8:00-8:45</b></a>
</h2>
</td>
<td><b>8:45-9:30</b></td>
<td><b>9:30-10:15</b></td>
<td><b>10:15-11:00</b></td>
<td><b>11:30-12:20</b></td>
<td><b>12:20-1:15</b></td>
<td><b>1:15-2:00</b></td>
</tr>
<tr>
<td>Monday</td>
<td></td>
<td></td>
<td>Physics</td>
<td>Physics</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>Tuesday</td>
<td>Physics</td>
<td>Physics</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>Wednesday</td>
<td></td>
<td></td>
<td>Chemistry</td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>Thursday</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>Chemistry</td>
<td>Chemistry</td>
<td></td>
</tr>
<tr>
<td>Friday</td>
<td></td>
<td>Chemistry</td>
<td>Chemistry</td>
<td></td>
<td></td>
<td></td>
<td>Physics</td>
</tr>
</tbody>
</table>
</div>

</div>
<div class="tab-pane" id="bottom-justified-tab3">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Timetable</h3>
</div>
<div class="col-auto text-end float-end ms-auto download-grp">
<a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
</div>
</div>
</div>

<div class="table-responsive">
<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
<thead class="student-thread">
<tr>
<th>Days</th>
<th> 1<sup>st</sup> Period</th>
<th>2<sup>nd</sup> Period</th>
<th> 3<sup>rd</sup> Period</th>
<th> 4<sup>th</sup> Period</th>
<th> 5<sup>th</sup> Period</th>
<th> 6<sup>th</sup> Period</th>
<th> 7<sup>th</sup> Period</th>
</tr>
</thead>
<tbody>
<tr>
<td><b>Time</b></td>
<td>
<h2>
<a><b>8:00-8:45</b></a>
</h2>
</td>
<td><b>8:45-9:30</b></td>
<td><b>9:30-10:15</b></td>
<td><b>10:15-11:00</b></td>
<td><b>11:30-12:20</b></td>
<td><b>12:20-1:15</b></td>
<td><b>1:15-2:00</b></td>
</tr>
<tr>
<td>Monday</td>
<td>Chemistry</td>
<td>Chemistry</td>
<td></td>
<td></td>
<td>Physics</td>
<td></td>
<td></td>
</tr>
<tr>
<td>Tuesday</td>
<td></td>
<td></td>
<td>Physics</td>
<td>Physics</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>Wednesday</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>Physics</td>
<td></td>
</tr>
<tr>
<td>Thursday</td>
<td></td>
<td>Physics</td>
<td></td>
<td></td>
<td>Chemistry</td>
<td>Chemistry</td>
<td></td>
</tr>
<tr>
<td>Friday</td>
<td></td>
<td>Chemistry</td>
<td>Chemistry</td>
<td></td>
<td></td>
<td></td>
<td>Physics</td>
</tr>
</tbody>
</table>
</div>

</div>
</div>
</div>
</div>
</div>
</div>

</div>

<footer>
<p>Copyright © 2022 SchoolTech.</p>
</footer>

</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="assets/plugins/apexchart/chart-data.js"></script>

<script src="assets/plugins/simple-calendar/jquery.simple-calendar.js"></script>
<script src="assets/js/calander.js"></script>

<script src="assets/js/circle-progress.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/template/teacher-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 19:53:47 GMT -->
</html>