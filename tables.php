<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
input[type=text] {
  width: 20%;
  padding: 5px 5=px;
  margin: 5px 0;
  color: #588c7e;
  box-sizing: border-box;
}
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
margin: 20px 0PX;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>

<form action="" method="post">
            ID:
            <input type=text name="t1" placeholder="enter your id">
            <br>
            <br>
            <input type=submit name="s">
            <?php
            
            
           
                
if(isset($_POST['s']))
{
    $a=$_POST['t1']; //accessing value from the text field
}
            ?>
        </form>
<table>
<tr>
<th>Id</th>
<th>name</th>
<th>Phone</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "trail");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, name, phone FROM office WHERE id=$a";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"] . "</td><td>"
. $row["phone"]. "</td></tr>";
}
echo "</table>";
} else  { echo "0 results"; }
$conn->close();
?>
<a href="addemp.PHP">CLICK HERE TO ADD A EMPLOYEE</a> 
<br>
<a href="editemp.PHP">CLICK HERE TO EDIT PREVIOUS EMPLOYEE</a> 

</table>
</body>
</html>