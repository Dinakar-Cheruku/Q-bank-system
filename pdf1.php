<?php

// while (ob_get_level())
// ob_end_clean();
// header("Content-Encoding: None", true);


include('connection.php');
require('fpdf184/fpdf.php');
require('retrieve4.php');


class PDF extends FPDF {

    
    function Header() {

        if(isset($_POST["getpdf"])){
            $exam_name = $_POST['exam_name'];
            $date = $_POST['date'];
            $duration = $_POST['duration'];
            $max_marks = $_POST['max_marks'];
            // $SC = $_POST['Subject_c'];
            $subject = $_POST['Subject'];
        }
        
        $this->Image("C:\Users\D C\Downloads\cmrit.png");
        $this->SetFont('Arial','B',14);
        $this->Cell(50,10,'Date: '.$date,0,0,'L');
        $this->Cell(90,10,$exam_name,0,0,'C');
        $this->Cell(50,10,'     Duration: '.$duration.'minutes',0,0,'R');
        $this->Ln();
        $this->Cell(150,10,'Subject: '.$subject,0,0,'L');
        $this->Cell(40,10,'Maximum marks: '.$max_marks,0,0,'R');
        $this->Ln();
        $this->Cell(200,10,'Answer any of the FIVE questions',0,0,'C');
        // Line break
        $this->Ln(20);
    }

    function Footer()
    {

        $this->SetY(-15);

        $this->SetFont('Arial','I',8);

        $this->Cell(0,10,'Page ' .$this->PageNo(). '/{nb}',0,0,'C');
    }

}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',14);

if(isset($_POST["getpdf1"])){
    $sub = $_POST['Subject'];

for($i = 0; $i <= count($b) ;$i++){

    $sql9="SELECT * FROM $sub WHERE qid IN ($b[$i])";
    $result = $conn->query($sql9);
    if($result->num_rows > 0) {
$pdf->Cell(0,10, $row["question"],0,1);
$pdf->Ln();
    } 

}   
}

$pdf->Output();
?>
