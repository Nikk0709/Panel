<?php
// include 'index.php';
error_reporting(0);
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'portal');
$dte = $_POST['date'];
$sub = $_POST['subject'];
$det = $_POST['details'];
$attach = $_POST['attachments'];
$q ="insert into addnotice(date,subject,details,attachments)values('$dte','$sub','$det','$attach')";
$result = mysqli_query($con,$q);
if($result)
{

}
else{
  echo'operation failed';
}
?>
<div class="content">
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> News Notice </title>
<link rel="stylesheet" href="css/newsnotice.css">
</head>
<body>
 <div class="container">
  
		<div class="heading">
			<h3><span class="underline">News / Notices</span></h3>
            <button class="exit_button"><a href="dashboard.php" class="Exit">Exit</a></button>
            </div>
<button id="myBtn">Add News</button><br>
<div id="newsnotice" class="news">
<div class="news-content">
    <span class="close">&times;</span>

     <form action="" method="post">
  <div class="heading">
  <h1>Add News</h1>
  </div>
  <div class="content">
    <div class="dat">
  <label for="date">Date:</label><br>
  <input type="text" id="date" name="dat" ><br><br>
  </div>
  <label for="sub">Subject:</label><br>
  <input type="text" id="sub" name="sub"><br><br>
</div>
<label for="det">Details:</label><br>
  <input type="text" id="details" name="det"><br><br>
</div>
<label for="attach">Attachments:</label><br>
  <input type="text" id="attachments" name="attach"><br><br>
<input name="submit" type="submit" >
  </div>
</form>
</div> 


<script>
  var news = document.getElementById("newsnotice");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick =function() {
  document.getElementById("myBtn").addEventListener("click", function() {
          
        });
news.style.display = "block";
}
span.onclick = function() {
  news.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == news) {
    news.style.display = "none";
  }
}

</script>

			<table class="news/notice-box">
                <tr>
                   <th>Date</th>
                   <th>Subject</th>
                   <th>Descrription/Details</th>
                   <th>Attachments</th>
                </tr>
            </table>
      </div> 

                    <?php
            $con = mysqli_connect('localhost', 'root', '');
            mysqli_select_db($con, 'portal');
            $q1 = "select * from addnotice";
            $result = mysqli_query($con, $q1);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['date']}</td>";
                echo "<td>{$row['subject']}</td>";
                echo "<td>{$row['details']}</td>";
                echo "<td>{$row['attachments']}</td>";
                echo "</tr>";
            }
            mysqli_close($con);
        ?>


    </table>
</div>



</body>
</html>