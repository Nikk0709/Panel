<?php
error_reporting(0);
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'portal');
    $xprnct = $_POST['xpercent'];
    $cgpx = $_POST['xcgpa'];
    $boardx = $_POST['xboard'];
    $yrpassx = $_POST['xpassyear'];
    $xschlname = $_POST['xschoolname'];
    $modeedux = $_POST['modexedu'];
    $cityx = $_POST['xcity'];
    $statex = $_POST['xstate'];
    $agapx = $_POST['academicgapafterx'];
    $xiiprnct = $_POST['xiipercent'];
    $cgpaxii = $_POST['xiicgpa'];
    $boardxii = $_POST['xiiboard'];
    $yrpassxii = $_POST['xiipassyear'];
    $xiischlname = $_POST['xiischoolname'];
    $streamxii = $_POST['xiistream'];
    $agapxii = $_POST['academicgapxii'];
    $gstream = $_POST['gradstream'];
    $gstate = $_POST['gradstate'];
    $gpassyr = $_POST['gradpassyr'];
    $gradmode = $_POST['modeofgrad'];
    $gapg = $_POST['gapgrad'];
    $pgstream = $_POST['pgradstream'];
    $pgsub = $_POST['pgradsub'];
    $pgprnct= $_POST['pgradp'];
    $pgcgpa = $_POST['pgradcgpa'];
    $pginsname = $_POST['pgradinsname'];
    $pguni = $_POST['pgraduni'];
    $pgct = $_POST['pgradct'];
    $pgstate = $_POST['pgradstate'];
    $pgpassyr = $_POST['pgradpassyr'];
    $pgmode = $_POST['modepostgradedu'];
    $query = "insert into placementgraduation(x_percent,x_cgpa,x_board,x_passyear,x_schoolname,mode_x_education,x_city,x_state,academicgap_x,xii_percent,xii_cgpa,xii_board,xii_passyear,xii_schoolname,xii_stream,academicgap_xii,grad_stream,grad_state,grad_passyear,modegradeducation,academicgap_grad,postgrad_stream,postgrad_subject_,postgrad_prcnt,postgrad_cgpa,postgrad_insname,postgrad_university,postgrad_city,postgrad_state,postgrad_passyear,modepostgrad_edu)values('$xprnct','$cgpax','$boardx','$yrpassx','$xschlname','$modeedux','$cityx','$statex','$agapx','$xiiprnct','$cgpaxii','$boardxii','$yrpassxii','$xiischlname','$streamxii','$agapxii','$gstream','$gstate','$gpassyr','$gradmode','$gapg','$pgstream','$pgsub','$pgprnct','$pgcgpa','$pginsname','$pguni','$pgct','$pgstate','$pgpassyr','$pgmode')";
    $result=mysqli_query($con, $query);
    if($result){
         echo '<script>alert("Register Successfully")</script>';
        // header('location:index.php');
    } else {
        echo 'operation failed';
        // header('location:http://localhost/Blood/Adminmain.php');
    }
    

?>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
      background-color: lightgrey;
    }

    td,
    th {
      text-align: left;
      padding: 8px;
      padding-bottom: 1rem;
      padding-top: 1rem;
    }
  </style>
</head>

<body>
    <form method="post">
  <h1 style="color: blue;">Placement Details</h1>
  <table style="border: .5px solid black;">
   
    <tr>
      <td>Xth Percentage %:</td>
      <td>Xth CGPA:</td>
      <td>Xth Board:</td>
    </tr>
    <tr>
      <td><input type="text" class="xpercent" name="xpercent" id="xpercent" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      <td><input type="text" class="xcgpa" name="xcgpa" id="xcgpa" style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      <td><input type="text" class="xboard" name="xboard" id="xboard" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
    </tr>
    <tr>
      <td>Xth Passing year:</td>
      <td>Xth School Name:</td>
      <td> Mode of Xth Education:</td>
    </tr>
    <tr>
      <td><input type="text" class="passyear" name="xpassyear" id="xpassyear" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      <td><input type="text" class="schlname" name="xschoolname" id="xschoolname" style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      <td><input type="text" class="edumode" name="modexedu" id="modexedu" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
    </tr>
    <tr>
      <td>Xth City:</td>
      <td>xth State:</td>
      <td>Academic Gap after 10th:</td>
    </tr>
    <tr>
      <td><input type="text" class="xcity" name="xcity" id="xcity" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      <td><input type="text" class="xstate" name="xstate" id="xstate" style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      <td><input type="text" class="gapafterx" name="academicgapafterx" id="academicgapafterx" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
    </tr>
    <tr>
      <td>XIIth Percentage %:</td>
      <td>XIIth CGPA:</td>
      <td>XIIth Board:</td>
    </tr>
    <tr>
      <td><input type="text" class="xiipercent" name="xiipercent" id="xiipercent" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      <td><input type="text" class="xiicgpa" name="xiicgpa" id="xiicgpa" style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      <td><input type="text" class="xiiboard" name="xiiboard" id="xiiboard" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
    </tr>
    <tr>
      <td>XIIth Passing Year:</td>
      <td>XIIth School Name:</td>
      <td>XIIth Stream:</td>
    </tr>
    <tr>
      <td><input type="text" class="xiipassyear" name="xiipassyear" id="xiipassyear" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      <td><input type="text" class="xiischlname" name="xiischoolname" id="xiischoolname" style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      <td><input type="text" class="stream" name="xiistream" id="xiistream" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
    </tr>
    <tr>
      <td>Academic Gap after 12th:</td>
    </tr>
    <tr>
      <td><input type="text" class="academic" name="academicgapxii" id="academicgapxii" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
    </tr>
    <tr>
      <td>Graduation Stream:</td>
      <td>Graduation State:</td>
      <td>Graduation Passing Year:</td>                                                                                                                                         
    </tr>
    <tr>
      <td><input type="text" class="gradstream" name="gradstream" id="gradstream" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      <td><input type="text" class="gradstate" name="gradstate" id="gradstate" style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      <td><input type="text" class="gradpassingyear" name="gradpassyr" id="gradpassyr" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
    </tr>
    <tr>
      <td>Mode of Graduation Education:</td>
      <td>Academic Gap after Graduation:</td>
    </tr>
    <tr>
      <td><input type="text" class="modeofedu" name="modeofgrad" id="modeofgrad" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      <td><input type="text" class="academicgap" name="gapgrad" id="gapgrad" style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
    </tr>
    <tr>
      <td>Post Graduation Stream:</td>
      <td>Post Graduation Subjects:</td>
      <td>Post Gaduation %:</td>
    </tr>
    <tr>
      <td><input type="text" class="postgradstream" name="pgradstream" id="pgradstream" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      <td><input type="text" class="postgradsub" name="pgradsub" id="pgradsub" style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      <td><input type="text" class="postgradpercent" name="pgradp" id="pgradp" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
    </tr>
    <tr>
      <td>Post Graduation CGPA:</td>
      <td>Post Graduation Institute's Name:</td>
      <td>Post Graduation University:</td>
    </tr>
    <tr>
      <td><input type="text" class="postgradcgpa" name="pgradcgpa" id="pgradcgpa" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      <td><input type="text" class="postgradinsname" name="pgradinsname" id="pgradinsname"  style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      <td><input type="text" class="postgradunivrsty" name="pgraduni" id="pgraduni" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
    </tr>
    <tr>
      <td>Post Graduation City:</td>
      <td>Post Graduation State:</td>
      <td>Post Graduation Passing Year:</td>
    </tr>
    <tr>
      <td><input type="text" class="postcity" name="pgradct" id="pgradct" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      <td><input type="text" class="poststate" name="pgradstate" id="pgradstate" style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      <td><input type="text" class="postpassingyear" name="pgradpassyr" id="pgradpassyr" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
    </tr>
    <tr>
      <td>Mode of post Graduation Education:</td>
    </tr>
    <tr>
      <td><input type="text" class="postgraduationedu" name="modepostgradedu" id="modepostgradedu" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
    </tr>
    <tr>
    <td><button type="Submit" style="background-color: #4e73df; padding: 4px 16px; margin-bottom: 1rem;"><a href="pedu.php" style="text-decoration: none; color:white;" class="next">Next</a></button></td>
  </tr>  
  
</table>
</form>
  </body>

</html>