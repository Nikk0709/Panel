<!DOCTYPE html>
<html>
    <head>
        <title> Bus Stop </title>
        <link rel="stylesheet " href="busstop.css">
</head>
<body>
 <div class="busstopbox" style="width: 1300px;
    margin: 0 auto;
    padding: 40px;
    border: 2px solid f2f2f2;
    background-color: white; background-color: #f2f2f2;">
    <div class= "bustop">
        <h2>Bus Stops</h2>
  
       <input type="button" onclick="export_data()" value="export">
  </div>
<button id="myBtn">Add Bus Stop</button><br>
<div id="busstop" class="bus">
<div class="bus-content">
    <span class="close">&times;</span>
    <!-- <div class="addbus"> -->
    <form action="" method="post">
  <div class="heading">
  <h1>Add Bus Stop</h1>
  
  <div class="content">
    <div class="area">
  <label for="aname">Area name:</label><br>
  <input type="text" id="aname" name="aname" ><br>
  </div>
  <label for="bsname">Bus Stop name:</label><br>
  <input type="text" id="bsname" name="bsname"><br><br>
</div>
<label for="rmarks">Remarks:</label><br>
  <input type="text" id="rmarks" name="rmarks"><br><br>
<input name="submit" type="submit" >
  </div>
</form>
<!-- </div> -->

   </div>
</div>

<script>
var bus = document.getElementById("busstop");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick =function() {
  document.getElementById("myBtn").addEventListener("click", function() {
            // window.location.href = "addbusstop.php";
        });
bus.style.display = "block";
}
span.onclick = function() {
  bus.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == bus) {
    bus.style.display = "none";
  }
}
</script>

        <input type="text" name="myInput" id="myInput" onkeyup="myFunction()" placeholder="Search by area">
        <table class="mGrid" id="myTable" cellspacing="0" rules="all" border="1" id="ctl00_ContentPlaceHolder1_grdBusStop" style="width:100%;border-collapse:collapse;">
                <tr>
                    <th>Sr.</th>
                    <th>Area Name</th>
                    <th>Bus Stop Name</th>
                    <th>Remarks</th>
</tr>
<script>
        function GeneralInfo(){
                      <?php
                        $con= mysqli_connect('localhost', 'root','');
                        mysqli_select_db($con,'portal');
                        $q1="select * from busstop";
                        $result=mysqli_query($con,$q1);
                        $num1= mysqli_num_rows($result);
                        mysqli_close($con);
                        ?>  
                    }
                    </script>
                <?php 
                    for($i=0;$i<$num1;$i++)
                    {
                        $row=mysqli_fetch_array($result);
                    ?>
                    <tr>
                    <td><?php echo $row['Sr']; ?></td>
                        <td><?php echo $row['area_name']; ?></td>
                        <td><?php echo $row['bus_stop_name']; ?></td>
                        <td><?php echo $row['remarks']; ?></td>
                    </tr>
                        <?php
                    }
                    ?>
                    </table>
                    
                </div>
        
                </body>
                </html>
                <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.mini.min.js"></script>

<script>
function export_data(){
	let data=document.getElementById('myTable');
	var fp=XLSX.utils.table_to_book(data,{sheet:'book2'});
	XLSX.write(fp,{
		bookType:'xlsx',
		type:'base64'
	});
	XLSX.writeFile(fp, 'test.xlsx');
}
</script>