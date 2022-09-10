<?php
include_once('connection.php');


if(isset($_POST["getpdf"])){
    $exam_name = $_POST['exam_name'];
    $date = $_POST['date'];
    $duration = $_POST['duration'];
    $max_marks = $_POST['max_marks'];
    $SC = $_POST['Subject_c']; //full name along with the code 
    $short=$_POST['Subject']; //up,adp....
    $note=$_POST['note'];


    $query=mysqli_query($conn,"SELECT * FROM $short WHERE selected=1 ");

  
}
?>
<style>
    *{
        max-width: 800px;
    }
    #header_table,#main_table{
        width: 800px;
    }
    #to_edit,#to_edit1{
        padding: 11px;
        text-align: center;
    }
    span{
        float: right;
        padding-top: 10px;
    }
    img{
        width: 15%;
        height: 10%;
    }
</style>

<figure>
    <img src="cmrit.png" alt="LOGO">
    <span>USN</span>
</figure>
<table id="header_table" border="3" >
    <caption><?php echo $exam_name?></caption>
    <tr>
        <th colspan="3">Sub: <?php echo $SC?></th>
        <th>Branch: CSE</th>
    </tr>
    <tr>
        <th>Date: <?php echo $date?></th>
        <th>Duration: <?php echo $duration?></th>
        <th>Max Marks: <?php echo $max_marks?></th>
        <th>Sem/Sec: 6th A,B,C</th>
        <th>OBE</th>
    </tr>
    <tr>
        <th colspan="5"></th>
    </tr>
    <tr>
        <td colspan="5"><strong>NOTE: <?php echo $note?></strong></td>
    </tr>
</table>
<table id="main_table" border="1">
    <tr>
        <th>S.NO</th>
        <th>Question</th>
        <th>Marks</th>
        <th>CO</th>
        <th>RBT</th>
    </tr>
    <?php
    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
            echo"<tr>";
            ?>
            <td><input type="textarea" id="to_edit"></td>
            <?php
            echo"<td>".$row["question"]."</td>";
            ?>
            <td><input type="textarea" id="to_edit1" placeholder="
            <?php
            echo $row["marks"]
            ?>
            "></td>
            <?php
            echo"<td>".$row["co"]."</td>"; 
		    echo"<td>".$row["rbt"]."</td>"; 
        }
    }
    ?>

</table>

<div style="height: 60px;"></div>
<div>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        CI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CCI 
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HOD</p>
</div>