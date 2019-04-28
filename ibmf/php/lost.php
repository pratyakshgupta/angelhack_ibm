<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Lost Complaint</title>

    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all"><div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">


    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <link href="css/main.css" rel="stylesheet" media="all">
<body>

<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Lost Complaint</h2>
                </div>
                <div class="card-body">
<form action="" method="post" enctype="multipart/form-data">
<div class="form-row">
		<div class="name">Name</div>
        <div class="value">
            <div class="input-group">
                <input class="input--style-5" type="text" name="stu_name" id="name" required="required" placeholder="Please Enter Name"/>
            </div>
        </div>
    </div>
<div class="form-row">
		<div class="name">Mobile</div>
        <div class="value">
            <div class="input-group">
                <input class="input--style-5" type="text" name="stu_email" id="email" required="required" placeholder="Enter Mobile Number"/>
            </div>
        </div>
    </div>
    <div class="form-row">
		<div class="name">Lost Person name:</div>
        <div class="value">
            <div class="input-group">
                <input class="input--style-5" type="text" name="p_name" id="pname" required="required" placeholder="Please enter name"/>
            </div>
        </div>
    </div>
    <div class="form-row">
		<div class="name">Lost Person Mobile</div>
        <div class="value">
            <div class="input-group">
                <input class="input--style-5" type="text" name="p_email" id="pemail" required="required" placeholder="Enter Mobile Number"/>
            </div>
        </div>
    </div>

<div class="form-row">
		<div class="name">Location</div>
        <div class="value">
            <div class="input-group">
                <input class="input--style-5" type="text" name="stu_city" id="city" required="required" placeholder="Please Enter Your Area"/>
            </div>
        </div>
    </div>
<div class="form-row">
		<div class="name">Image of the person</div>
        <div class="value">
            <div class="input-group" style="margin-top: 20px;">
                <input type="file" name="imageUpload" id="imageUpload" required="required" placeholder="Please Upload Image"/><br/><br />
            </div>
        </div>
    </div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.9637280967045!2d80.24019871443336!3d12.974171790854157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525d71e9ae1101%3A0xd15a647020d514fa!2sCoWrks!5e0!3m2!1sen!2sin!4v1556344953807!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

<br><br><br>
<center><button class="btn btn--radius-2 btn--red" type="submit" name="submit">Submit</button></center>
</form>
</div>
<!-- Right side div -->
<div id="formget">

</div>

</div>


<?php
if(isset($_POST["submit"])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ibm_hack";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

   

    $image=basename( $_FILES["imageUpload"]["name"],".jpg");
$sql = "INSERT INTO person (name, mobile,person_name,person_mob,location,image)
VALUES ('".$_POST["stu_name"]."','".$_POST["stu_email"]."','".$_POST["p_name"]."','".$_POST["p_email"]."','".$_POST["stu_city"]."','$image')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}
?>
</div>
            </div>
        </div>
    </div>
</div>
<!-- Right side div -->

</div>
</body>
</html>