<html>
<title>Insert Data and Display in Table </title>


 <form action="" method="post" name="form1">
<table width="25%" border="0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
 <tbody><tr> 
<td>ID</td>
<td><input type="text" name="pname"></td>
</tr>
<tr> 
<td>NAME</td>
<td><input type="text" name="pcode"></td>
</tr>
<tr> 
<td>PHONE</td>
<td><input type="text" name="pprice"></td>
</tr>
<tr> 
<td></td>
<td><input type="submit" name="Submit" value="Add"></td>
</tr>
			
        </tbody></table>
    </form>
    <style> 
input[type=text] {
  width: 100%;
  padding: 7px ;
  margin: 5px 0;
  border: 1px solid #000000;
  }
input[type=submit] {
  width: 50%;
  padding: 9px;
  margin: 5px 0;
  
  border: 2px solid #000000;
  outline: none;
   background-color:green;
   color:white;
    
}
	</style>
<?php
$conn = mysqli_connect("localhost", "root", "", "trail");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


$pname = $_POST['pname'];
$pcode = $_POST['pcode'];
$pprice = $_POST['pprice'];



$result = mysqli_query($conn, "INSERT INTO office(id,name,phone) VALUES('$pname','$pcode','$pprice')");
?>