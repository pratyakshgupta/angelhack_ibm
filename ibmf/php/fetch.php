<html>
<head>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Thermize</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="admin.css" rel="stylesheet" type="text/css">
<style >
	.button {
		font-size: 30px;
		
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button:hover {
  background-color: #4CAF50; /* Green */
  color: white;
}
</style>
</head>
<body>
<center>
   <h3>Enter Location</h3>
   <form action="fetch.php" method="POST">
      <input type="text" name="location" id="location">
      <br><br>
<input class="btn btn-success" type="submit" value=" Submit " name="submit"/><br><br><br>
     </form> 
 </center>
</body>

</html>
<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
  $location= isset($_POST['location']) ? $_POST['location'] : '';
   $sql = "SELECT name,mobile,dateprob,location FROM electric where location like '$location'";
   mysql_select_db('ibm_hack');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {	?>
    <div class="blog-card">
    <div class="meta">
      <div class="photo" style="text-align: center;"></div>
    </div>
    <div class="description">
      <h1><?php echo $row['name']; ?></h1>
      <h2>Problem:Electric</h2>
      <p> Mobile:<?php echo $row['mobile']; ?> <br>Location: <?php echo $row['location']; ?></p>
      
    </div>
  </div> 
 <?php }
   
   
   mysql_close($conn);
?>
<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
  $location= isset($_POST['location']) ? $_POST['location'] : '';
   $sql = "SELECT name,mobile,dateprob,location FROM water where location like '$location'";
   mysql_select_db('ibm_hack');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {	?>
    <div class="blog-card">
    <div class="meta">
      <div class="photo" style="text-align: center;"></div>
    </div>
    <div class="description">
      <h1><?php echo $row['name']; ?></h1>
      <h2>Problem:Water</h2>
      <p> Mobile:<?php echo $row['mobile']; ?> <br>Location: <?php echo $row['location']; ?></p>
      
    </div>
  </div> 
 <?php }
   
   
   mysql_close($conn);
?>

<?php
  $conn = mysqli_connect("localhost", "root", "", "ibm_hack");
  $results = mysqli_query($conn, "SELECT * FROM road");
  $road = mysqli_fetch_all($results, MYSQLI_ASSOC);
?>
<html><body>
 <?php foreach ($road as $user): 
   $location= isset($_POST['location']) ? $_POST['location'] : '';
if ($user['location']!=$location) {
   # code...
   continue;
}
   ?>


              
          
    <div class="blog-card">
    <div class="meta">
      <div class="photo" style="text-align: center;"><img src="<?php echo 'upload/' . $user['image'] ?>"></div>
    </div>
    <div class="description">
      <h1><?php echo $user['name']; ?></h1>
      <h2>Problem:Road</h2>
      <p> Mobile:<?php echo  $user['mobile']; ?> <br>Location: <?php echo $user['location']; ?></p>
      
    </div>
  </div> 
            <?php endforeach; ?>


<?php
  $conn = mysqli_connect("localhost", "root", "", "ibm_hack");
  $results = mysqli_query($conn, "SELECT * FROM person");
  $road = mysqli_fetch_all($results, MYSQLI_ASSOC);
?>
<html><body>
 <?php foreach ($road as $user): 
   $location= isset($_POST['location']) ? $_POST['location'] : '';
if ($user['location']!=$location) {
   # code...
   continue;
}
   ?>


              
          
    <div class="blog-card">
    <div class="meta">
      <div class="photo" style="text-align: center;"><img src="<?php echo 'upload/' . $user['image'] ?>" width="100%" height="100%"></div>
    </div>
    <div class="description">
      <h1><?php echo $user['name']; ?></h1>
      <h2>Problem:Missing Person</h2>
      <p> Mobile:<?php echo  $user['mobile']; ?> <br>Location: <?php echo $user['location']; ?></p>
      
    </div>
  </div> 
  
            <?php endforeach; ?>     
            <a class="btn btn-info" href="../html css js/indexmain.php" style="margin-left: 50px;">Back</a>   
         </body></html>
<br>
<?php
  $conn = mysqli_connect("localhost", "root", "", "ibm_hack");
  $results = mysqli_query($conn, "SELECT * FROM person");
  $road = mysqli_fetch_all($results, MYSQLI_ASSOC);
?>