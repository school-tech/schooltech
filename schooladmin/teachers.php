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
<h3 class="page-title">Teachers</h3>
<ul class="breadcrumb">
<li class="breadcrumb"><a href="view_staff.php">Staff/</a></li>
<li class="breadcrumb-item active">Teachers</li>
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
<input type="text" class="form-control" placeholder="Search by Phone ...">
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
<h3 class="page-title">Teachers</h3>
</div>
<div class="col-auto text-end float-end ms-auto download-grp">
<a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
<a href="add-teacher.php" class="btn btn-primary"><i class="fas fa-plus"></i></a>
</div>
</div>
</div>

<div class="table-responsive">
<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
<thead class="student-thread">
<tr>
<th>ID</th>
<th>Name</th>
<th>Class</th>
<th>Gender</th>
<th>No. Of Subject</th>
<th>Faculty</th>
<th>Mobile Number</th>
<th>Address</th>
<th>Status</th>
<th class="text-end">Action</th>
</tr>
</thead>
<tbody>
<?php
                        $query = "select * from teacher, subject WHERE teacher.id = subject.teacher_id";
                    $result = mysqli_query($sql_con, $query);
                    ?>
 <tr>
                            <?php

                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                            <tr>

                                <td>
                                    <?php echo $row['id']; ?>
                                </td>
                                <td>
                                    <?php echo $row['firstname']; ?>
                                    <?php echo $row['lastname']; ?>
                                </td>
                                <td>
                                    <?php echo $row['class']; ?>
                                </td>
                                <td>
                                    <?php echo $row['gender']; ?>
                                </td>
                                <td>
                                    <?php echo '2'; ?>
                                </td>
                                <td>
                                    <?php echo $row['faculty']; ?>
                                </td>
                                
                                <td>
                                    <?php echo $row['phonenumber']; ?>
                                </td>
                                <td>
                                    <?php echo $row['homeaddress']; ?>
                                </td>
                                <td>
                                    <?php echo $row['status']; ?>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="sold.php?id=<?php echo $row['id']; ?>" data-tooltip="tooltip" title="View"
                                            data-target="#viewthreeModaldep" class="btn btn-sm bg-success-light me-2"><i
                                                class="fa fa-eye"></i></a>
                                        <a href="edit_teacher.php?id=<?php echo $row['id']; ?>" data-tooltip="tooltip" title="View"
                                            data-target="#viewthreeModaldep" class="btn btn-sm bg-danger-light"><i
                                            class="feather-edit"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </td>
                </tr>
                </tbody>
            </table>
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

<!-- Mirrored from preschool.dreamguystech.com/template/teachers.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 19:53:47 GMT -->
</html>