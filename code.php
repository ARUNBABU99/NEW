<?php
session_start();
$con = mysqli_connect("localhost","root","","trail");

if(isset($_POST['update_stud_data']))
{
    

    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $query = "UPDATE office SET id='$id', name='$name', phone='$phone' WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Updated Successfully";
        header("Location: index.php");
    }
    else
    {
        $_SESSION['status'] = "Not Updated";
        header("Location: index.php");
    }
}
