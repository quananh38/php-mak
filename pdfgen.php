<?php
// Repository: php-pdf-generator
// Description: Generate a PDF file using the FPDF library.

require_once('fpdf/fpdf.php');

class PDF extends FPDF {
    function Header() {
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Sample PDF Document', 0, 1, 'C');
    }

    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
    }
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, 'Hello, this is a sample PDF document.', 0, 1);
$pdf->Output('example.pdf', 'F');
echo "PDF generated successfully.";
?>
