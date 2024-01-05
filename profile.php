<!DOCTYPE html>
<html>

<head>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      text-align: left;
      padding: 8px;
      padding-bottom: 1rem;
      padding-top: 1rem;
    }

    tr {
      border: 1px solid black;
    }

    .btn {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .pdetail {
      display: flex;
      padding: 8px 20px;
      margin: 1rem;
    }

    .pdetail a {
      font-weight: 600;
    }
  </style>
</head>

<body>
  <div class="btn">
    <button class="pdetail"><a>Personal Detail</a></button>
    <button class="pdetail"><a>Educational Detail</a></button>
  </div>
  <table>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>

    <tr>
      <td>Student's Name: </td>
      <td><input type="text" class="name" required></td>
      <td>Enrollment Number: </td>
      <td><input type="text" class="eno"></td>
    </tr>
    <tr>
      <td>Scholar Number: </td>
      <td><input type="text" class="sno"></td>
      <td>Roll Number: </td>
      <td><input type="text" class="rno"></td>
    </tr>
    <tr>
      <td>Class: </td>
      <td><input type="text" class="cls" required></td>
      <td>Section: </td>
      <td><input type="text" class="sec" required></td>
    </tr>
    <tr>
      <td>Date of Birth: </td>
      <td><input type="date" class="dob"></td>
      <td>Place of Birth: </td>
      <td><input type="text" class="pob"></td>
    </tr>
    <tr>
      <td>Blood Group:</td>
      <td><input type="text" class="bgp"></td>
      <td>Mother's Tongue: </td>
      <td><input type="text" class="eno"></td>
    </tr>
    <tr>
      <td>Nationality:</td>
      <td><input type="text" class="nation" required></td>
      <td>Religion:</td>
      <td><input type="text" class="rg" required></td>
    </tr>
    <tr>
      <td>Samagra Id:</td>
      <td><input type="text" class="si"></td>
      <td>Gender:</td>
      <td><input type="text" class="g" required></td>
    </tr>
    <tr>
      <td>Marital status</td>
      <td><input type="text" class="ms" required></td>
      <td>Aadhar No.:</td>
      <td><input type="text" class="an"></td>
    </tr>
    <tr>
      <td>Student Mobile:</td>
      <td><input type="text" class="sm" required></td>
      <td>Student E-mail:</td>
      <td><input type="text" class="se" required></td>
    </tr>
    <tr>
      <td>Person with disabiity class:</td>
      <td><input type="text" class="pwdc"></td>
      <td>Type of Disability class:</td>
      <td><input type="text" class="todc"></td>
    </tr>
    <tr>
      <td>Madhya Pradesh Domicile:</td>
      <td><input type="text" class="mpd"></td>
      <td>Class/ Samvarg:</td>
      <td><input type="text" class="cs"></td>
    </tr>
    <tr>
      <td>Category:</td>
      <td><input type="text" class="c" required></td>
    </tr>
  </table>
  <table>
    <tr>
      <td><b>Father's Information</b></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>

    <tr>
      <td>Father's Name:</td>
      <td><input type="text" class="fn" required></td>
      <td>Occupation:</td>
      <td><input type="text" class="occ" required></td>
    </tr>
    <tr>
      <td>Designation:</td>
      <td><input type="text" class="dn"></td>
      <td>Office Address:</td>
      <td><input type="text" class="oa"></td>
    </tr>
    <tr>
      <td>Education:</td>
      <td><input type="text" class="e"></td>
      <td>E-mail:</td>
      <td><input type="text" class="em"></td>
    </tr>
    <tr>
      <td>mobile No.:</td>
      <td><input type="text" class="mn" required></td>
      <td>Office Phone:</td>
      <td><input type="text" class="op"></td>
    </tr>
    <tr>
      <td>Annual Income:</td>
      <td><input type="text" class="ai"></td>
    </tr>
  </table>
  <table>
    <tr>
      <td><b>Mother's Information</b></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>

    <tr>
      <td>Mother's Name:</td>
      <td><input type="text" class="fn" required></td>
      <td>Occupation:</td>
      <td><input type="text" class="occ"></td>
    </tr>
    <tr>
      <td>Designation:</td>
      <td><input type="text" class="dn"></td>
      <td>Office Address:</td>
      <td><input type="text" class="oa"></td>
    </tr>
    <tr>
      <td>Education:</td>
      <td><input type="text" class="e"></td>
      <td>E-mail:</td>
      <td><input type="text" class="em"></td>
    </tr>
    <tr>
      <td>mobile No.:</td>
      <td><input type="text" class="mn"></td>
      <td>Office Phone:</td>
      <td><input type="text" class="op"></td>
    </tr>
    <tr>
      <td>Annual Income:</td>
      <td><input type="text" class="ai"></td>
    </tr>
  </table>
  <table>
    <tr>
      <td><b>Local/Correspondence Address</b></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>Guardian Name:</td>
      <td><input type="text" class="gn" required></td>
      <td>Address:</td>
      <td><input type="text" class="ad" required></td>
    </tr>
    <tr>
      <td>city:</td>
      <td><input type="text" class="city"></td>
      <td>State:</td>
      <td><input type="text" class="state"></td>
    </tr>
    <tr>
      <td>Pin No.:</td>
      <td><input type="text" class="pin"></td>
      <td>STD Code:</td>
      <td><input type="text" class="std"></td>
    </tr>
    <tr>
      <td>Phone No.:</td>
      <td><input type="text" class="phone"></td>
      <td>Mobile No:</td>
      <td><input type="text" class="mbn"></td>
    </tr>
  </table>
  <table>
    <tr>
      <td><b>Student Bank Details</b></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>Bank Name:</td>
      <td><input type="text" class="bank" required></td>
      <td>Branch Name:</td>
      <td><input type="text" class="brn" required></td>
    </tr>
    <tr>
      <td>A/C No.:</td>
      <td><input type="text" class="account"></td>
      <td>IFSC:</td>
      <td><input type="text" class="ifsc"></td>
    </tr>
  </table>
  <table>
    <tr>
      <td><b>Document Submission</b></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <td>Document Name:</td>
    <td><input type="text" class="document"></td>
    <td>Upload file:</td>
    <td><input type="text" class="upload"></td>
  <tr>
<table>
  <tr>
    <p style="color: red;">Note:- Photograph and signature standards are as follows : A. The same photograph which you upload here,will be seen on your Marksheets & Degree,which you will have to submit for job interviews. So upload neat sober passport size photo. mobile selfies not allowed.<br><br>

B. Colour photo and signature with white background.<br><br>

C. Photograph should be clicked from front so both ears should be visible clearly.<br>

D. Photograph size of 150 KB maximum and and signature of 100 KB maximum. It should not be exceeded from a given size.<br><br>

E. Dimensions of photograph should not exceed Height 350 PX Width 300 PX (maximum) and should not be less than Height 100 PX Weight 100 PX (Minimum).<br><br>

F. Dimensions of signature should not exceed Height 120 PX Width 300 PX (maximum) and should not be less than Height 60 PX Width 90 PX (Minimum)</p>
  </tr>
</table>
<table>
    <tr>
      <td><b></b></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>Student Photo:</td>
      <td>Student Sign:</td>
     <tr>
     <td><p style="color:red;">Note: If Sign and photo are not clear on admit card,you will not be allowed for exam.</p></td>
     <td><p style="color:red; margin-left: 2rem;">Note: The sign should be on blank white paper & properly cropped.</p></td>
  </tr>
    </tr>
  </table>
    <table>  
  <tr>
      <button style="float: left; background-color: #f8f9fc; padding: 8px 28px; margin-bottom: 1rem;"><a href="" class="Next">Next</a></button>
  
  </table>
  <table>
  </tr>
  <tr><p style="color: red;">Remarks: No change or editing is possible one the page is approved.</p></tr>
  </table>
</tr>
  </table>

  <div class="button" style="background-color: #f8f9fc; margin-bottom: 1rem; margin-left: 28rem;">
    <button style=" padding: 15px 35px;"><a href="" class="ending" style="text-decoration:none; color:black;">Update Detail</a></button>
    <button style=" padding: 15px 35px;"><a href="dashboard.php" class="ending" style="text-decoration:none; color:black;">Exit</a></button>
  </div>
  
</body>
</html>
