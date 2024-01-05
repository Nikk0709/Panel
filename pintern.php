<?php
error_reporting(0);
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'portal');
    $block = $_POST['yes'];
    $abacklog = $_POST['academicgap'];
    $history = $_POST['backhistory'];
    $s1 = $_POST['spec1'];
    $s2 = $_POST['spec2'];
    $qual = $_POST['addqual'];
    $icompgrad= $_POST['interncomp'];
    $iptopic = $_POST['iprotopic'];
    $idurg = $_POST['idurgrad'];
    $idomg = $_POST['idomaing'];
    $sumic = $_POST['sumicomp'];
    $sumdet = $_POST['sumidet'];
    $summode = $_POST['virtual'];
    $domainsu = $_POST['sumidomain'];
    $prodetsum = $_POST['sumiprodet'];
    $sumrnr= $_POST['sumirolesnresponse'];
    $y1 = $_POST['yes1'];
    $wedes = $_POST['wexpdes'];
    $wedur = $_POST['wexpdur'];
    $wecomp = $_POST['wexpcomp'];
    $crtct = $_POST['certificate'];
    $y2 = $_POST['yes2'];
    $y3 = $_POST['yes3'];
    $lnum = $_POST['licencenum'];
    $nismseries = $_POST['nseriesc'];
    $n8series = $_POST['nism8c'];
    $upcv = $_POST['choosefile'];
    $upphoto = $_POST['choosefile1'];
    $se1 = $_POST['sem1'];
    $se2 = $_POST['sem2'];
    $se3 = $_POST['sem3'];
    $se4 = $_POST['sem4'];
    $se5 = $_POST['sem5'];
    $se6 = $_POST['sem6'];
    $se7 = $_POST['sem7'];
    $se8 = $_POST['sem8'];
    $gptd = $_POST['gradptdate'];
    $pgptd = $_POST['pgptilldate'];
    $plandegc1 = $_POST['yimmchoice'];
    $plandegc2 = $_POST['planafterdeg'];
    $query = "insert into placementintern(backlog,academicbacklog,backloghistory,spec1,spec2,additional_qual,interncompany_grad,internproject_topic,internduration_grad,interndomain_grad,summintern_company,summintern_detail,modesummintern_virtual,summintern_domain,summinternprodet,summinternrolenresponse,workexperience,exp_designation,exp_duration,exp_company,certificate,vehicle,driving_licence,license_num,nism_series,nismseries_c,uploadcv,uploadphoto,sem1,sem2,sem3,sem4,sem5,sem6,sem7,sem8,gradprcnt_tilldate,postgprcnt_tilldate,planadegchoice1,planadegchoice2)values('$block','$abacklog','$history','$s1','$s2','$qual','$icompgrad','$iptopic','$idurg','$idomg','$sumic','$sumdet','$summode','$domainsu','$prodetsum','$sumrnr','$y1','$wedes','$wedur','$wecomp','$crtct','$y2','$y3','$lnum','$nismseries','$n8series','$upcv','$upphoto','$se1','$se2','$se3','$se4','$se5','$se6','$se7','$se8','$gptd','$pgptd','$plandegc1','$plandegc2')";
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
      <td>Is Any Backlog:</td>
      <td>If you have any academic backlog, mention the details:</td>
      <td>No. of History of Backlogs in Current Degree:</td>
    </tr>
    <tr>
      <td>
        <div style="display: flex; flex-direction:row;"><label> Yes </label><input type="checkbox" id="backlog" name="yes" value="yes" class="backlog" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></div>
      </td>
      <td><input type="text" class="academicbacklog" name="academicback" id="academicback" style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      <td><input type="text" class="historyofbl" name="backhistory" id="backhistory" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
    </tr>
    <tr>
      <td>Specialization 1:</td>
      <td>Specialization 2:</td>
    </tr>
    <tr>
      <td><input type="text" class="specone" name="spec1" id="spec1" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      <td><input type="text" class="spectwo" name="spec2" id="spec2" style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
    </tr>
    <tr>
      <td>Additional Qualification if any, mention the details:</td>
      <td>Internship Company during Graduation(if any):</td>
    </tr>
    <tr>
      <td><input type="text" class="addqualification" name="addqual" id="addqual" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      <td><input type="text" class="internship" name="interncomp" id="interncomp" style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
    </tr>
    <tr>
      <td>Internship Project Topic during Graduation (if any):</td>
      <td>Internship duration during Graduation (if any):</td>
      <td>Internship domain during Graduation:</td>
    </tr>
    <tr>
      <td><input type="text" class="internproject" name="iprotopic" id="iprotopic" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      <td><input type="text" class="internduration" name="idurgrad" id="idurgrad" style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      <td><input type="text" class="interndomain" name="idomaing" id="idomaing" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
    </tr>
    <tr>
      <td>Summer Internship Company:</td>
      <td>Summer Internship Details:</td>
      <td>Mode of Summer Internship:</td>
    </tr>
    <tr>
      <td><input type="text" class="summercompany" name="sumicomp" id="sumicomp" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      <td><input type="text" class="summerdomain" name="sumidet" id="sumidet" style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      <td>
        <div style="display: flex; flex-direction:row;"><label>Virtual</label><input type="checkbox" id="backlog" name="virtual" value="virtual" input type="text" class="modeofsummer" style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;">
      </td>
    </tr>
    <tr>
      <td>Summer Internship Domain:</td>
      <td>Summer Internship Project Details(If Any):</td>
      <td>Summer Internships Roles & Responsibilities:</td>
    </tr>
    <tr>
      <td><input type="text" class="suminterndomain" name="sumidomain" id="sumidomain" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      <td><input type="text" class="suminternproject" name="sumiprodet" id="sumiprodet" style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      <td><input type="text" class="suminternroles" name="sumirolesnresponse" id="sumirolesnresponse" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
    </tr>
    <tr>
      <td>Work Experience?:</td>
      <td>Work Experience if any mention the designation:</td>
      <td>Work Experience if any mention the duration:</td>
    </tr>
    <tr>
      <td>
        <div style="display: flex; flex-direction:row;"><label> Yes </label><input type="checkbox" id="backlog" name="yes1" value="yes" class="workexp" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></div>
      </td>
      <td><input type="text" class="expwork"  name="wexpdes" id="wexpdes" style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      <td><input type="text" class="mentiondur"  name="wexpdur" id="wexpdur" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
    </tr>
    <tr>
      <td>Work Experience if any mention the name of Company:</td>
      <td>Online Certification (mention only 1):</td>
    </tr>
    <tr>
      <td><input type="text" class="namecompany"  name="wexpcomp" id="wexpcomp" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      <td><input type="text" class="certificate"  name="certificate" id="certificate" style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
    </tr>
    <tr style="width:100vw;">
      <td>Do you have a Vehicle(Two Wheeler):</td>
      <td>Do you have Driving License:</td>
      <td>If you have a driving license Number:</td>
    </tr>
    <tr>
      <td>
        <div style="display: flex; flex-direction:row;"><label> Yes </label><input type="radio" id="backlog" name="yes2" value="yes" class="workexp" required style="border: .2px ; width:3rem; border-radius:.5rem; border-bottom:.5px solid black;"><label> No </label><input type="radio" id="backlog" name="yes" value="yes" class="workexp" required style="border: .2px ; width:3rem; border-radius:.5rem; border-bottom:.5px solid black;"></div>
      </td>
      <td>
        <div style="display: flex; flex-direction:row;"><label> Yes </label><input type="radio" id="backlog" name="yes3" value="yes" class="workexp" required style="border: .2px ; width:3rem; border-radius:.5rem; border-bottom:.5px solid black;"><label> No </label><input type="radio" id="backlog" name="yes" value="yes" class="workexp" required style="border: .2px ; width:3rem; border-radius:.5rem; border-bottom:.5px solid black;"></div>
      </td>
      <td><input type="text" class="drivinglicencenum" name="licencenum" id="licencenum" style="border: .2px ; width:17rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
     </tr>
    <tr>
      <td>NISM Series VA Certification (Completed/ Registered/ Not Registered):</td>
      <td>NISM series 8 Certification (Completed/ Registered/ Not Registered):</td>
    </tr>
    <tr>
      <td><input type="text" class="Nismseries"  name="nseriesc" id="nseriesc" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      <td><input type="text" class="Nism"  name="nism8c" id="nism8c" style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
    </tr>
    <tr>
      <td>Upload your latest CV (PDF Only):</td>
      <td>Upload your Passport size Photograph in formal attire* (Dimension 3.5cm x 1.5cm & WhatsApp images not allowed):</td>
    </tr>
    <tr>
      <td><input type="file" name="ChooseFile" id="choosefile" class="uploadcv" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      <td><input type="file" name="ChooseFile1" id="choosefile1" class="uploadpass" style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
    </tr>
  </table>
    <table class="abc" style="margin: 1rem; border: .5px solid black; width:92rem;">
      <tr>
        <th>Semester SGPA</th>
        <th>CGPA</th>
        <th>Backlof if Any</th>
        <th>Pending backlogs</th>
      </tr>
      <tr>
        <td>Semester1</td>
        <td><input type="text" class="semester1"  name="sem1" id="sem1" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      </tr>
      <tr>
        <td>Semester2</td>
        <td><input type="text" class="semester2"  name="sem2" id="sem2" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      </tr>
      <tr>
        <td>Semester3</td>
        <td><input type="text" class="semester3"  name="sem3" id="sem3" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      </tr>
      <tr>
        <td>Semester4</td>
        <td><input type="text" class="semester4"  name="sem4" id="sem4" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      </tr>
      <tr>
        <td>Semester5</td>
        <td><input type="text" class="semester5"  name="sem5" id="sem5" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      </tr>
      <tr>
        <td>Semester6</td>
        <td><input type="text" class="semester6"  name="sem6" id="sem6" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      </tr>
      <tr>
        <td>Semester7</td>
        <td><input type="text" class="semester7"  name="sem7" id="sem7" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      </tr>
      <tr>
        <td>Semester8</td>
        <td><input type="text" class="semester8"  name="sem8" id="sem8" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      </tr>
    </table>
    <table style="border: .5px solid black;">
    <tr>
      <td>Graduation Current % till date:</td>
      <td>Post Graduation Current % till date:</td>
    </tr>
    <tr>
      <td><input type="text" class="gradcurprcnt" name="gradptdate" id="gradptdate" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      <td><input type="text" class="postgradcur" name="pgptilldate" id="pgptilldate" style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
    </tr>
    <tr>
      <td>Your Immediate Choice / Plan after Current Degree (Choice 1):</td>
      <td>Your Immediate Choice / Plan after Current Degree (Choice 2):</td>
    </tr>
    <tr>
      <td><input type="text" class="degchoice1" name="yimmchoice" id="yimmchoice" required style="border: .2px ; width:20rem; border-radius:.5rem; border-bottom:.5px solid black;"></td>
      <td><input type="text" class="degchoice2" name="planafterdeg" id="planafterdeg" style="border: .2px ; width:20rem; border-radius: .5rem; border-bottom:.5px solid black;"></td>
    </tr>
    <tr>
    <td><button type="Submit" style="background-color: #4e73df; padding: 4px 16px; margin-bottom: 1rem;"><a href="pedu.php" style="text-decoration: none; color:white;" class="save">Save</a></button></td>
  </tr>
  </table>
</form>
  </body>

</html>