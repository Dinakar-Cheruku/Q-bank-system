<?php

include('connection.php');
require('fpdf184/fpdf.php');
// require('wordwrap.php');



if(isset($_POST["getpdf"])){
    $exam_name = $_POST['exam_name'];
    $date = $_POST['date'];
    $duration = $_POST['duration'];
    $max_marks = $_POST['max_marks'];
    $SC = $_POST['Subject_c'];
    $short=$_POST['Subject'];
  


$pdf = new FPDF('p','mm','A4');

$pdf->AddPage();
$pdf->Image("C:\Users\D C\Downloads\cmrit.png");

$pdf->SetFont('Arial','b',14);
//cell ( width,height,text,border,end line,align)

$pdf->Cell(190 ,7,$exam_name,1,1,'C');
$pdf->Cell(190 ,7,'Subject:- '.$SC,1,1,'C');//sub
$pdf->Cell(43 ,7,'Date:-'.$date,1,0);//date
$pdf->Cell(45 ,7,'Duration:- 90 mins',1,0);//dur
$pdf->Cell(38 ,7,'Max Marks:- 50',1,0);//marks
$pdf->Cell(26 ,7,'SEM :- 6',1,0);//sem
$pdf->Cell(38 ,7,'Branch :- CSE',1,1);//branch
$pdf->Cell(190 ,7,'',1,1);//note




$pdf->SetFont('Arial','',10);
$one=1;
$query=mysqli_query($conn,"SELECT * FROM $short WHERE selected=1 ");
$pdf->MultiCell(15,7,'S.No',1,0);
$pdf->MultiCell(130,7,'Question',1,0,'C');
$pdf->MultiCell(20,7,'Marks',1,0,'C');
$pdf->MultiCell(25,7,'CO - RBT',1,1,'C');



while($data=mysqli_fetch_array($query)){

    // $x=$pdf->WordWrap($data['question'],130);
    
    $pdf->Cell(15,7,$one,1,0);
    
    $pdf->MultiCell(130,7,$data['question'],0,1);
    $pdf->MultiCell(20,7,$data['marks'],0,0,'C');
    $pdf->MultiCell(25,7,$data['co']."-".$data['rbt'],0,1,'C');

    

    $one+=1;
}




$pdf->Output();
    
}





?>