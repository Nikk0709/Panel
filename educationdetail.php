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

    .edetail {
      display: flex;
      padding: 8px 20px;
      margin: 1rem;
    }

    .edetail a {
      font-weight: 600;
    }
  </style>
</head>

<body>
  <div class="btn">
    <button class="edetail"><a style="text-decoration:none; color:black;" href="profile.php">Personal Detail</a></button>
    <button class="edetail"><a>Educational Detail</a></button>
  </div>
  <table>
    <tr>
      <td><b>10th School Detail</b></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>


    <tr>
      <td>10th School name & Full Address:</td>
      <td><input type="text" class="schlfadd" required></td>
      <td>10th board:</td>
      <td><input type="text" class="board"></td>
    </tr>
    <tr>
      <td>10th year:</td>
      <td><input type="text" class="yr" required></td>
      <td>10th Roll No.:</td>
      <td><input type="text" class="rno"></td>
    </tr>
    <tr>
      <td>10th obtain Marks:</td>
      <td><input type="text" class="mrks" required></td>
      <td>10th total marks:</td>
      <td><input type="text" class="tmarks" required></td>
    </tr>
    <tr>
      <td>10th %:</td>
      <td><input type="text" class="prcnt"></td>
      <td>10th Cgpa:</td>
      <td><input type="text" class="cgpa"></td>
    </tr>
    <tr>
      <td>Result Status:</td>
      <td><input type="text" class="bgp"></td>
    </table>
  <table>
    <tr>
      <td><b>12th School Detail</b></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>

    <tr>
      <td>12th School Name & Full Address:</td>
      <td><input type="text" class="schladd" required></td>
      <td>12th board:</td>
      <td><input type="text" class="occu"></td>
    </tr>
    <tr>
      <td>12th year:</td>
      <td><input type="text" class="year" required></td>
      <td>12th Roll No.:</td>
      <td><input type="text" class="rno" required></td>
    </tr>
    <tr>
      <td>State:</td>
      <td><input type="text" class="state"></td>
      <td>Pin code:</td>
      <td><input type="text" class="pc"></td>
    </tr>
    <tr>
      <td>12th Obtain Marks:</td>
      <td><input type="text" class="obtnmrks" required></td>
      <td>12th Total marks:</td>
      <td><input type="text" class="totalmrks"></td>
    </tr>
    <tr>
      <td>12th %:</td>
      <td><input type="text" class="percent" required></td>
      <td>12th Cgpa:</td>
      <td><input type="text" class="cg-pa"></td>
    </tr>
    <tr>
      <td>stream/subject:</td>
      <td><input type="text" class="stremsub" required></td>
      <td>Additional Subjects:</td>
      <td><input type="text" class="addsub"></td>
    </tr>
    <tr>
      <td>Result Status:</td>
      <td><input type="text" class="result" required></td>
      <td>12th Center code:</td>
      <td><input type="text" class="cntrcode"></td>
    </tr>
      <td>12th Admit Card Id:</td>
      <td><input type="text" class="admitcard" required></td>
      <td>12th School Code:</td>
      <td><input type="text" class="thscode"></td>
    </tr>
  </table>
  <table> <tr><td><b>Graduation Detail:</b>(Select the field to fill only if you have taken admission in Post Graduation)</td></tr>
     </table>
  <table>
  <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>College Name & Address:</td>
      <td><input type="text" class="clgnadd" required></td>
      <td>University:</td>
      <td><input type="text" class="unvrsy"></td>
    </tr>
    <tr>
      <td>year:</td>
      <td><input type="text" class="grdtnyear"></td>
      <td>Roll No.:</td>
      <td><input type="text" class="oa"></td>
    </tr>
    <tr>
      <td>Obtain Marks:</td>
      <td><input type="text" class="obtnmrks"></td>
      <td>Total Marks:</td>
      <td><input type="text" class="totalmrks"></td>
    </tr>
    <tr>
      <td>% / CGPA :</td>
      <td><input type="text" class="prnctcgpa"></td>
      <td>Rank/Grade/Division/Result:</td>
      <td><input type="text" class="rgdr"></td>
    </tr>
    <tr>
      <td>Course / Stream:</td>
      <td><input type="text" class="crse"></td>
    </tr>
  </table>
  <table>
    <tr>
      <td colspan="4"><b>Graduation Semester / Year Wise Detail</b></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>Ist Sem/Year (% / SGPA):</td>
      <td><input type="text" class="sem1" required></td>
      <td>IInd Sem/Year (% / SGPA):</td>
      <td><input type="text" class="sem2" required></td>
      <td>IIIrd Sem/Year (% / SGPA):</td>
      <td><input type="text" class="sem3"></td>
      <td>IVth Sem/Year (% / SGPA):</td>
      <td><input type="text" class="sem4"></td>
    </tr>
    <tr>
      <td>Vth Sem/Year (% / SGPA):</td>
      <td><input type="text" class="year1"></td>
      <td>VIth Sem/Year (% / SGPA):</td>
      <td><input type="text" class="year2"></td>
      <td>VIIth Sem/Year (% / SGPA):</td>
      <td><input type="text" class="year3"></td>
      <td>VIIIth Sem/Year (% / SGPA):</td>
      <td><input type="text" class="year4"></td>
    </tr>
    <tr>
      <td>IXth Sem/Year (% / SGPA):</td>
      <td><input type="text" class="prnct1"></td>
      <td>Xth Sem/Year (% / SGPA):</td>
      <td><input type="text" class="prnct2"></td>
      <td>XIth Sem/Year (% / SGPA):</td>
      <td><input type="text" class="prnct3"></td>
      <td>XIIth Sem/Year (% / SGPA):</td>
      <td><input type="text" class="prnct4"></td>
    </tr>
    </table>
  <table>
    <tr>
      <td><b>Post Graduation Details</b></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>College Name & Address:</td>
      <td><input type="text" class="cna" required></td>
      <td>University:</td>
      <td><input type="text" class="uni" required></td>
    </tr>
    <tr>
      <td>Roll No.:</td>
      <td><input type="text" class="rnos"></td>
      <td>Year:</td>
      <td><input type="text" class="years"></td>
    </tr>
    <tr>
      <td>obtain marks:</td>
      <td><input type="text" class="obtnmrks"></td>
      <td>Total marks:</td>
      <td><input type="text" class="ttlmrks"></td>
    </tr>
    <tr>
      <td>% / CGPA:</td>
      <td><input type="text" class="prcntcgpa"></td>
      <td>Rank/Grade/Division/Result:</td>
      <td><input type="text" class="rgdr"></td>
    </tr>
    <tr>
      <td>Course / Stream:</td>
      <td><input type="text" class="rnos"></td>
    </tr>
  </table>
  <table>
    <tr>
      <td colspan="4"><b>Post Graduation Semester / Year Wise Detail</b></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <td>Ist Sem/Year(% / SGPA):</td>
    <td><input type="text" class="semyr1"></td>
    <td>IInd Sem/Year(% / SGPA):</td>
    <td><input type="text" class="semyr2"></td>
    <td>IIIrd Sem/Year(% / SGPA):</td>
    <td><input type="text" class="semyr3"></td>
    <td>IVth Sem/Year(% / SGPA):</td>
    <td><input type="text" class="semyr4"></td>
  <tr>
    <table>
    <tr>
      <td><b>Diploma Detail</b></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>

    <tr>
      <td>College Name & Address:</td>
      <td><input type="text" class="clgnameadd" required></td>
      <td>University:</td>
      <td><input type="text" class="university"></td>
    </tr>
    <tr>
      <td>year:</td>
      <td><input type="text" class="yrs" required></td>
      <td>Roll No.:</td>
      <td><input type="text" class="rollno" required></td>
    </tr>
    <tr>
      <td>Obtain marks:</td>
      <td><input type="text" class="obtainno"></td>
      <td>Total marks:</td>
      <td><input type="text" class="totalno"></td>
    </tr>
    <tr>
      <td>% / CGPA:</td>
      <td><input type="text" class="percentage" required></td>
      <td>Rank/Grade/Division/Result:</td>
      <td><input type="text" class="resultstatus"></td>
    </tr>
    <tr>
      <td>Course / Stream:</td>
      <td><input type="text" class="crsestream" required></td>
    </table>
    
    <table>
    <tr>
      <td colspan="4"><b>Diploma Semester / Year Wise Detail</b></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>

    <tr>
      <td>Ist Sem/Year (% / SGPA):</td>
      <td><input type="text" class="sgpayear1" required></td>
      <td>IInd Sem/Year (% / SGPA):</td>
      <td><input type="text" class="sgpayear2"></td>
      <td>IIIrd Sem/Year (% / SGPA)::</td>
      <td><input type="text" class="sgpayear3" required></td>
      <td>IVth Sem/Year (% / SGPA):</td>
      <td><input type="text" class="sgpayear4" required></td>
    </tr>
    <tr>
      <td>>Ist Sem/Year (% / SGPA):</td>
      <td><input type="text" class="sgpayear5"></td>
      <td>>Ist Sem/Year (% / SGPA):</td>
      <td><input type="text" class="sgpayear6"></td>
      <td>>Ist Sem/Year (% / SGPA):</td>
      <td><input type="text" class="sgpayear7" required></td>
      <td>>Ist Sem/Year (% / SGPA):</td>
      <td><input type="text" class="sgpayear8"></td>
    </tr>
  </table>
  <table>
  <tr>
      <td colspan="4"><b>Other Educational detail</b></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>College Name & Address:</td>
      <td><input type="text" class="clgaddname" required></td>
      <td>University:</td>
      <td><input type="text" class="euniversity"></td>
    </tr>
    <tr>
      <td>year:</td>
      <td><input type="text" class="eyear" required></td>
      <td>Roll No.:</td>
      <td><input type="text" class="srollno" required></td>
    </tr>
    <tr>
      <td>Obtain marks:</td>
      <td><input type="text" class="education"></td>
      <td>Total marks:</td>
      <td><input type="text" class="etmrks"></td>
    </tr>
    <tr>
      <td>% / CGPA:</td>
      <td><input type="text" class="percentcgpa" required></td>
      <td>Rank/Grade/Division/Result:</td>
      <td><input type="text" class="edurgdr"></td>
    </tr>
    <tr>
      <td>Course / Stream:</td>
      <td><input type="text" class="edustream" required></td>
    </table>

<table>
    <tr>
      <td><b>Qualified Exam Details</b></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>Qualified Exam Name:</td>
      <td><input type="text" class="qen"></td>
      <td>Qualified Exam Roll No.:</td>
      <td><input type="text" class="qer"></td>
    </tr>
    <tr>
      <td>Qualified Exam Rank:</td>
      <td><input type="text" class="qedr" required></td>
      <td>Quallified Exam Quota:</td>
      <td><input type="text" class="qeq"></td>
    </tr>
    <tr>
      <td>Qualified Exam Marks:</td>
      <td><input type="text" class="qem" required></td>
    </tr>
 </table>

 <table>
    <tr>
      <td><b>Othern Information</b></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>Backlog Count:</td>
      <td><input type="text" class="back"></td>
      <td>Backlog Hstory:</td>
      <td><input type="text" class="backlog"></td>
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
      <td colspan="4"><button style="font-size: 1.2rem">Previous</button></td>
    </tr>
    
  </table>
  

  <div class="button" style="background-color: #f8f9fc; margin-bottom: 1rem; margin-left: 28rem;">
    <button style=" padding: 15px 35px;"><a href="" class="ending" style="text-decoration:none; color:black;">Update Detail</a></button>
    <button style=" padding: 15px 35px;"><a href="dashboard.php" class="ending" style="text-decoration:none; color:black;">Exit</a></button>
  </div>
  
</body>
</html>