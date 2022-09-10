<?php
include('indexadmin.php');
include('connection.php');



if(isset($_POST["addsub"])){
    $sub = $_POST['subname'];
    $subcode = $_POST['subcode'];

    $sql = "CREATE TABLE [IF NOT EXISTS] $subcode LIKE UP";
    
    //$query=mysqli_query($conn,"CREATE TABLE [IF NOT EXISTS] $subcode LIKE UP");

    if ($conn->query($sql) === TRUE) {
        echo "Table MyGuests created successfully";
      } else {
        echo "Error creating table: " . $conn->error;
      }
      
      $conn->close();

}


?>

<form action="addsub.php" method="post">
    <p>
        <strong>NOTE:</strong>Should only add the subjects which are not already added and need to be a valid and existing subject code as per VTU REGULATIONS.
    </p>
    <input class="form-control form-control-lg" type="text" id="subname" placeholder="Enter the Subject name">
    <div></div>
    <input class="form-control form-control-lg" type="text" id="subcode" placeholder="Enter the Subject code">
    <div></div>
    <input type="button" value="Submit" name="addsub" class="btn btn-dark w-20">
</form>


