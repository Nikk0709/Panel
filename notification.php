<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
.container span{
    color: blue;
}

.underline{
    border-bottom: 6px solid #f5ce5b;
    font-size: 2rem;
}

.heading{
    padding: 2rem;
}

.Exit{
    font-size: 1rem;
    color: white;
    text-decoration: none;
    font-weight: 200;
}

table{
    border-collapse: collapse;
    width: 100%;
}

td,th{
    border: 1px solid black;
    text-align: left;
    padding: 8px;
}

tr{
    background-color: #dddddd;
}

</style>
</head>
<body>
    <div class="container">  
		<div class="heading">
			<h3><span class="underline">Notifications</span></h3>
            <button style="float: right; background-color: #4e73df; padding: 4px 16px; margin-bottom: 1rem;"><a href="dashboard.php" class="Exit">Exit</a></button>
</div>
			<table class="news/notice-box">
                <tr>
                   <th>Date</th>
                   <th>Subject</th>
                   <th>Descrription/Details</th>
                   <th>Attachments</th>
                </tr>
            </table>
      </div>
</body>
</html