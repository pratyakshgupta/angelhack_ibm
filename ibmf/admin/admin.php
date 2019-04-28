<?php
  $conn = mysqli_connect("localhost", "root", "", "ibm_hack");
  $results = mysqli_query($conn, "SELECT * FROM road ORDER BY location");
  $road = mysqli_fetch_all($results, MYSQLI_ASSOC);
?>




<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Thermize</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="admin.css" rel="stylesheet" type="text/css">

</head>
<body>

    <div class="blog-card">
    <div class="meta">
      <div class="photo" style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg)"></div>
    </div>
    <div class="description">
      <h1>Name Surname</h1>
      <h2>Problem</h2>
      <p> Mobile: <br>Location:</p>
      <button class="btn btn-info but">Under Review</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-success but">Approve</button>
    </div>
  </div>
  
 




</body>
  </html>













  <!------------------------------->
