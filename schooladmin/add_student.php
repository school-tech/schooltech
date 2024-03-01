<?php
include('include/header.php');

$id = $_SESSION['id'];
$data = mysqli_query($sql_con, "select * from schooladmin where id = '$id' ");
$row = mysqli_fetch_array($data);
 $schoolid = $row['school_id'];
 $school_name = $row['schoolname'];



if (isset($_POST['submit'])) {
    $school_id = $schoolid;
    $schoolname = $schoolid;
    $adm_no = $_POST['adm_no'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $bgroup = $_POST['bgroup'];
    $class = $_POST['class'];
    $homeaddress = $_POST['homeaddress'];
    $phonenumber = $_POST['contactnumber'];
    $emailaddress = $_POST['emailaddress'];
    $nin = $_POST['nin'];
    $religion = $_POST['religion'];
    $nationality = $_POST['nationality'];
    $disability = $_POST['disability'];
    $sick = $_POST['sick'];
    $date = $_POST['date'];
    $month = $_POST['month'];
    $year = $_POST['year'];
  
  
  
    $data = mysqli_query($sql_con, "INSERT INTO student(school_id, adm_no, schoolname, firstname, lastname, dob, gender, bgroup, class, homeaddress, phonenumber, emailaddress, nin, religion, nationality, disability, sick, date, month, year) VALUES ('$school_id','$adm_no','$schoolname','$firstname','$lastname','$dob','$gender','$bgroup','$class','$homeaddress','$phonenumber','$emailaddress','$nin','$religion','$nationality','$disability','$sick','$date','$month','$year')");
    if ($data) {
      echo"<script>alert('Student Added Successfully!!')</script>";
      echo"<script>window.location='students.php';</script>";
      } else {
      echo "Failed:" . mysqli_error($conn);
    }
  }

?>


<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col-sm-12">
<div class="page-sub-header">
<h3 class="page-title">Add Students</h3>
<ul class="breadcrumb">
<li class="breadcrumb"><a href="students.php">Student/</a></li>
<li class="breadcrumb-item active">Register Students</li>
</ul>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card comman-shadow">
<div class="card-body">
<form method="post">
<div class="row">
<div class="col-12">
<h5 class="form-title student-info">Student Information <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>First Name <span class="login-danger">*</span></label>
<input class="form-control" name="firstname" type="text" placeholder="Enter First Name">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Last Name <span class="login-danger">*</span></label>
<input class="form-control" name="lastname" type="text" placeholder="Enter Last Name">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Gender <span class="login-danger">*</span></label>
<select name="gender" class="form-control">
<option>Select Gender</option>
<option value="Female">Female</option>
<option value="Male">Male</option>
</select>
</div>
</div>
<div class="col-12 col-sm-4">
<!-- <div class="form-group local-forms calendar-icon"> -->
<label>Date Of Birth <span class="login-danger">*</span></label>
<input class="form-control" name="dob" type="date" placeholder="DD-MM-YYYY">
<!-- </div> -->
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Nin </label>
<input class="form-control" name="nin" type="text" placeholder="Enter Nin">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Blood Group</label>
<select class="form-control" name="bgroup">
<option>Select Blood Group </option>
<option value="B+">B+</option>
<option value="A+">A+</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
<option value="B-">B-</option>
<option value="A-">A-</option>
<option value="AB-">AB-</option>
<option value="AB+">AB+</option>
</select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Religion <span class="login-danger">*</span></label>
<select class="form-control" name="religion">
<option>Please Select Religion </option>
<option value="Islam">Islam</option>
<option value="Christianity">Christianity</option>
<option>Others</option>
</select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>E-Mail <span class="login-danger">*</span></label>
<input class="form-control"name="emailaddress" type="text" placeholder="Enter Email Address">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Class <span class="login-danger">*</span></label>
<select class="form-control" name="class" required>
<option>Please Select Class </option>
<option value="SSS1 Science">SSS1 Science</option>
<option value="SSS2 Science">SSS2 Science</option>
<option value="SSS3 Science">SSS3 Science</option>
<option value="SSS1 Commercial">SSS1 Commercial</option>
<option value="SSS2 Commercial">SSS2 Commercial</option>
<option value="SSS3 Commercial">SSS3 Commercial</option>
<option value="SSS1 Arts">SSS1 Arts</option>
<option value="SSS2 Arts">SSS2 Arts</option>
<option value="SSS3 Arts">SSS3 Arts</option>
</select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Nationality <span class="login-danger">*</span></label>
<select class="form-control" name="nationality">
<option>Please Select Nationality </option>
<option value="Sierra Leonean">Sierra Leonean</option>
<option value="Sierra Leonean">>A</option>
<option value="Sierra Leonean">>C</option>
</select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Admission ID </label>
<input class="form-control" name="adm_no" type="text" placeholder="Enter Admission ID">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Phone </label>
<input class="form-control" name="contactnumber" type="text" placeholder="Enter Phone Number">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Home Address </label>
<input class="form-control" name="homeaddress" type="text" placeholder="Enter Home Address">
</div>
</div>
<div class="col-12">
<h5 class="form-title student-info">Health Information <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
</div>

<div class="col-12 col-sm-4">
    <div class="form-group local-forms">
        <label>Sick? <span class="login-danger">*</span></label>
        <select class="form-control" name="sick" id="sick">
            <option>Select</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
    </div>
</div>

<div class="col-12 col-sm-4">
    <div class="form-group local-forms">
        <label>Are you Disabled? <span class="login-danger">*</span></label>
        <select class="form-control" name="disability" id="disability">
            <option>Select</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
    </div>
</div>



<div class="col-12 col-sm-4" id="sickTypeDiv" style="display:none;">
    <div class="form-group local-forms">
        <label>Sickness Type</label>
        <select class="form-control" name="sicknessType" id="sicknessType">
            <option>Select Sickness Type</option>
            <!-- Add other sickness options as needed -->
        </select>
    </div>
</div>

<div class="col-12 col-sm-4" id="disabilityTypeDiv" style="display:none;">
    <div class="form-group local-forms">
        <label>Disability Type</label>
        <select class="form-control" name="disabilityType" id="disabilityType">
            <option>Select Disability Type</option>
            <!-- Add other disability options as needed -->
        </select>
    </div>
</div>

<!-- <div class="col-12 col-sm-4">
<div class="form-group students-up-files">
<label>Upload Student Photo (150px X 150px)</label>
<div class="uplod">
<label class="file-upload image-upbtn mb-0">
Choose File <input type="file">
</label>
</div>
</div>
</div> -->
<input type="hidden" class="form-control" id="val-name" name="date"
                                                        value="<?php echo date("F j, Y"); ?>">
                                                    <input type="hidden" class="form-control" id="val-name" name="month"
                                                        value="<?php echo date("F"); ?>">
                                                    <input type="hidden" class="form-control" id="val-name" name="year"
                                                        value="<?php echo date("Y"); ?>">
<div class="col-12">
<div class="student-submit">
<button type="submit" name="submit" value="submit" class="btn btn-primary">Register</button>
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
<script>
    $(document).ready(function(){
        $('#sick').on('change', function(){
            if ($(this).val() == 'Yes') {
                $('#sickTypeDiv').show();
            } else {
                $('#sickTypeDiv').hide();
            }
        });

        $('#disability').on('change', function(){
            if ($(this).val() == 'Yes') {
                $('#disabilityTypeDiv').show();
            } else {
                $('#disabilityTypeDiv').hide();
            }
        });
    });
</script>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

</html>