<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
<!-- css -->
  <title>TechNetics | Admin</title>

<link rel="stylesheet" href="../css/style.css"> 
<style>
   .top-area
{
  background-color: #3FBBC0;
}
table{
  text-align: center;
  font-family: 'Open Sans', sans-serif;
    width: 85%;
    border-collapse: collapse;
  border: 4px solid black;
    padding: 3px;

}

th{
    font-size: 20px;
    font-weight: bold;
border: 2px solid black;
  background-color: #3FBBC0;
    color: white;
  text-align: center;
  padding: 8px;
}
tr,td{
 font-family: 'Open Sans', sans-serif;
  border: 2px solid black;
  background-color: white;
    color: black;
     padding: 5px;
}
td
{
    font-size: 15px;
}
h2
{
  font-size: 22px;
}
</style>

</head>
<body>
        <header class="site-header">
            <div style="background-color: #fafafa; width: 100%; height: 20px"></div>
            <nav>
                <div class="logo">
                    <h1>
                        <span style="font-size: 35px">T</span>ech<span
                            style="font-size: 35px">N</span>etics
                    </h1>
                </div>
                <div class="menu" >
          <ul>
            <a href="index.php">
              <li>Logout</li>
            </a>
          </ul>
        </div>
            </nav>
        </header>
 
<center><h1 style="font-size: 30px; font-weight: bolder; text-decoration: underline;">SHOW USERS</h1><hr>
<?php
session_start();
include("../includes/config.php");
$sql="SELECT * FROM users order by id ASC";
$result = mysqli_query($con,$sql);
echo "<br><h2 style='color: black;'>TOTAL USERS IN DATABASE=<b>".mysqli_num_rows($result)."</b></h2><br>";
echo "<table>
<tr>
<th>ID</th>
<th>Register No</th>
<th> Name</th>
<th>Email</th>
<th>Status</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
	echo "<td>" . $row['id'] . "</td>";
    echo "<td> " . $row['register_no'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
	echo "<td>" . $row['status'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>