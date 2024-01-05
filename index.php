<?php
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'portal');
$q1 = "select * from registerat";
$result = mysqli_query($con, $q1);
$num1 = mysqli_num_rows($result);
mysqli_close($con);
?>
<html>
<?php session_start(); ?>

<head>
  <link rel="stylesheet" href="css/dashboard.css">
  <link rel="stylesheet" href="css/index.css">
  
</head>

<body>

  <div class="social-media col-12">
    <a href="#facebook"><img src="images/facebook.png" alt=""></a>
    <a href="#instagram"><img src="images/instagram.png" alt=""></a>
    <a href="#linkedin"><img src="images/linkedin.png" alt=""></a>
    <a href="#twitter"><img src="images/twitter.png" alt=""></a>
   <div class="ptag"> <b>Scholar Number: 
      <br><?php
                                            $row = mysqli_fetch_array($result); ?><?php echo $row['Scholarnumber']; ?>
                  </b>
                  <div class="image">
                    <img src="images/avatar.jpg" class="pcircle">
                    <?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?>  
                  </div> 
                  </div>
  </div>

  <div class="stable">
    <div class="col-2">
        <ul>
            <li><a href="dashboard.php" class="item active">Dashboard</a></li>
            <li><a href="addsession.php" class="item" >Add Session</a></li>
            <li><a href="addsemester.php" class="item" >Add Semester</a></li>
            <li><a href="addcourse.php" class="item" >Add Course</a></li>
            <li><a href="addsubject.php" class="item" >Add Subject</a></li>
          <li><a href="login.php" class="logoutbtn">Log Out</a></li>
        </ul>
    </div>
  </div>

  <!-- <div class="container" style="margin-left:200px; padding: 16px; margin-top:4rem;"> -->
        <!-- Content area -->
        <!-- <div class="content"> -->
            <!-- Initial content loaded here -->

        <!-- </div> -->
    <!-- </div> -->
    <script>
        // Function to load content using XMLHttpRequest
        function loadContent(url) {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                    document.querySelector('.content').innerHTML = xhr.responseText;
                }
            };
            xhr.open("GET", url, true);
            xhr.send();
       }
       
</script>
</body>

</html>