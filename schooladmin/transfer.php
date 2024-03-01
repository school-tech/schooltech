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
<h3 class="page-title">Transfer Request</h3>
<ul class="breadcrumb">
<li class="breadcrumb"><a href="view_staff.php">Staff/</a></li>
<li class="breadcrumb-item active">Transfer</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card card-table">
<div class="card-body">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Hostel</h3>
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
<th>Block</th>
<th>Room No</th>
<th>Room Type</th>
<th>No of Beds</th>
<th>Cost per Bed</th>
<th>Availability</th>
<th class="text-end">Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>A Block</td>
<td>101</td>
<td>Medium</td>
<td>6</td>
<td>$10</td>
<td>
<span class="badge badge-danger">Full</span>
</td>
<td class="text-end">
<div class="actions ">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2 ">
<i class="feather-eye"></i>
</a>
<a href="edit-room.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>A Block</td>
<td>101</td>
<td>Medium</td>
<td>6</td>
<td>$10</td>
<td>
<span class="badge badge-success">Available</span>
</td>
<td class="text-end">
<div class="actions ">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2 ">
<i class="feather-eye"></i>
</a>
<a href="edit-room.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>A Block</td>
<td>102</td>
<td>Medium</td>
<td>6</td>
<td>$10</td>
<td>
<span class="badge badge-danger">Full</span>
</td>
<td class="text-end">
<div class="actions ">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2 ">
<i class="feather-eye"></i>
</a>
<a href="edit-room.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>B Block</td>
<td>104</td>
<td>Big</td>
<td>8</td>
<td>$10</td>
<td>
<span class="badge badge-danger">Full</span>
</td>
<td class="text-end">
<div class="actions ">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2 ">
<i class="feather-eye"></i>
</a>
<a href="edit-room.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>A Block</td>
<td>107</td>
<td>Medium</td>
<td>6</td>
<td>$10</td>
<td>
<span class="badge badge-success">Available</span>
</td>
<td class="text-end">
<div class="actions ">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2 ">
<i class="feather-eye"></i>
</a>
<a href="edit-room.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>A Block</td>
<td>108</td>
<td>Medium</td>
<td>6</td>
<td>$10</td>
<td>
<span class="badge badge-success">Available</span>
</td>
<td class="text-end">
<div class="actions ">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2 ">
<i class="feather-eye"></i>
</a>
<a href="edit-room.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>B Block</td>
<td>102</td>
<td>Medium</td>
<td>6</td>
<td>$10</td>
<td>
<span class="badge badge-warning">2 Available</span>
</td>
<td class="text-end">
<div class="actions ">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2 ">
<i class="feather-eye"></i>
</a>
<a href="edit-room.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>B Block</td>
<td>107</td>
<td>Small</td>
<td>6</td>
<td>$10</td>
<td>
<span class="badge badge-success">Available</span>
</td>
<td class="text-end">
<div class="actions ">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2 ">
<i class="feather-eye"></i>
</a>
<a href="edit-room.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>

<footer>
<p>Copyright © 2022 Dreamguys.</p>
</footer>

</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/datatables/datatables.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/template/hostel.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 19:53:49 GMT -->
</html>