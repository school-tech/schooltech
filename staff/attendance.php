<?php
include('include/header.php');

$id = $_SESSION['id'];
$data = mysqli_query($sql_con, "select * from teacher where id = '$id' ");
$row = mysqli_fetch_array($data);

?>


<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Attendance</h3>
<ul class="breadcrumb">
<li class="breadcrumb"><a href="view_staff.php">Staff/</a></li>
<li class="breadcrumb-item active">Attendance</li>
</ul>
</div>
</div>
</div>

<div class="student-group-form">
<div class="row">
<div class="col-lg-3 col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search by ID ...">
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search by Name ...">
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search by Year ...">
</div>
</div>
<div class="col-lg-2">
<div class="search-student-btn">
<button type="btn" class="btn btn-primary">Search</button>
</div>
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
<h3 class="page-title">Attendance</h3>
</div>
<div class="col-auto text-end float-end ms-auto download-grp">
<a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
<a href="add-department.php" class="btn btn-primary"><i class="fas fa-plus"></i></a>
</div>
</div>
</div>

<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
<thead class="student-thread">
<tr>
<th>
<div class="form-check check-tables">
<input class="form-check-input" type="checkbox" value="something">
</div>
</th>
<th>ID</th>
<th>Name</th>
<th>HOD</th>
<th>Started Year</th>
<th>No of Students</th>
<th class="text-end">Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<div class="form-check check-tables">
<input class="form-check-input" type="checkbox" value="something">
</div>
</td>
<td>PRE2209</td>
<td>
<h2>
<a>Computer Science Engg</a>
</h2>
</td>
<td>Aaliyah</td>
<td>1995</td>
<td>180</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-department.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
<div class="col-xl-6">
<div class="card">
<div class="card-body">

<div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<div class="text-center mt-2 mb-4">
<div class="auth-logo">
<a href="index.html" class="logo logo-dark">
<span class="logo-lg">
<img src="assets/img/logo.png" alt height="42">
</span>
</a>
</div>
</div>
<form class="px-3" action="#">
<div class="mb-3">
<label for="username" class="form-label">Name</label>
<input class="form-control" type="email" id="username" required placeholder="Michael Zenaty">
</div>
<div class="mb-3">
<label for="emailaddress" class="form-label">Email address</label>
<input class="form-control" type="email" id="emailaddress" required placeholder="john@deo.com">
</div>
<div class="mb-3">
<label for="password" class="form-label">Password</label>
<input class="form-control" type="password" required id="password" placeholder="Enter your password">
</div>
<div class="mb-3">
<div class="form-check">
<input type="checkbox" class="form-check-input" id="customCheck1">
<label class="form-check-label" for="customCheck1">I accept <a href="#">Terms and Conditions</a></label>
</div>
</div>
<div class="mb-3 text-center">
<button class="btn btn-primary" type="submit">Sign Up Free</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</td>
</tr>
<tr>
<td>
<div class="form-check check-tables">
<input class="form-check-input" type="checkbox" value="something">
</div>
</td>
<td>PRE2213</td>
<td>
<h2>
<a>Mechanical Engg</a>
</h2>
</td>
<td>Malynne</td>
<td>1999</td>
<td>240</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-department.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>
<div class="form-check check-tables">
<input class="form-check-input" type="checkbox" value="something">
</div>
</td>
<td>PRE2143</td>
<td>
<h2>
<a>Electrical Engg</a>
</h2>
</td>
<td>Levell Scott</td>
<td>1994</td>
<td>163</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-department.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>
<div class="form-check check-tables">
<input class="form-check-input" type="checkbox" value="something">
</div>
</td>
<td>PRE2431</td>
<td>
<h2>
<a>Civil Engg</a>
</h2>
</td>
<td>Minnie</td>
<td>2000</td>
<td>195</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-department.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>
<div class="form-check check-tables">
<input class="form-check-input" type="checkbox" value="something">
</div>
</td>
<td>PRE1534</td>
<td>
<h2>
<a>MCA</a>
</h2>
</td>
<td>Lois A</td>
<td>1992</td>
<td>200</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-department.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>
<div class="form-check check-tables">
<input class="form-check-input" type="checkbox" value="something">
</div>
</td>
<td>PRE2153</td>
<td>
<h2>
<a>BCA</a>
</h2>
</td>
<td>Calvin</td>
<td>1992</td>
<td>152</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-department.html" class="btn btn-sm bg-danger-light">
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

<!-- Mirrored from preschool.dreamguystech.com/template/Class.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 19:53:47 GMT -->
</html>