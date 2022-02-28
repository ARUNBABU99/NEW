<html>
<title>Insert Data and Display in Table </title>


 <form action="" method="post" name="form1">
<table width="25%" border="0">
 <tbody><tr> 
<td>ID</td>
<td><input type="text" name="id"></td>
</tr>
<tr> 
<td></td>
<td><input type="submit" name="Submit" value="Add"></td>
</tr
<?php
            
            
           
                
            if(isset($_POST['submit']))
            {
                $a=$_POST['id']; //accessing value from the text field
            }
                        ?>
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

    
}
</style>

<?php
$conn = mysqli_connect("localhost", "root", "", "trail");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, phone FROM office WHERE id=$a";

?>