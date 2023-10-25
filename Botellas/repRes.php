<?php
require('mysql_table.php');

class PDF extends PDF_MySQL_Table
{
function Header()
{
		global $title;
	
		// Logo
		$this->Image('logo.png',0,-10,75);
		// Arial bold 15
		$this->SetFont('Arial','B',15);
		// Calculamos ancho y posici�n del t�tulo.
		$w = $this->GetStringWidth($title)+6;
		$this->SetX((210-$w)/2);
		// Colores de los bordes, fondo y texto
		$this->SetDrawColor(85,112,144);
		$this->SetFillColor(125,189,245);
		$this->SetTextColor(21,86,159);
		// Ancho del borde (1 mm)
		$this->SetLineWidth(1);
		// T�tulo
		$this->Cell($w,9,$title,1,1,'C',true);
		// Salto de l�nea
		$this->Ln(10);
	// Ensure table header is printed
	parent::Header();
}
}

// Connect to database
$link = mysqli_connect('localhost','root','','botellas');



$pdf = new PDF();

$title = 'Resumen informativo';
$pdf->SetTitle($title);

$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
// First table: output all columns
/* $pdf->Table($link,'SELECT * FROM `clientes`');
$pdf->AddPage(); */
// Second table: specify 3 columns
$pdf->Cell(40,10,'Pedidos Ordenados por cliente',0,1);
$pdf->AddCol('id',30,'Nro Pedido','C');
$pdf->AddCol('c_cli',30,'C.I del cliente');
$pdf->AddCol('cantidad',40,'Cntd de botellones','R');
$pdf->AddCol('fecha',40,'Fecha del pedido','');
$pdf->AddCol('hora',40,'Hora del pedido','');
$prop = array('HeaderColor'=>array(255,150,100),
			'color1'=>array(210,245,255),
			'color2'=>array(255,255,210),
			'padding'=>2);
$pdf->Table($link,'SELECT * FROM `historial` order by c_cli;',$prop);

$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Cantidad de pedidos por cliente',0,1);
$pdf->AddCol('pedidos',40,'Nro de pedidos','C');
$pdf->AddCol('cliente',40,'C.I del cliente');
$pdf->Table($link,'SELECT COUNT(c_cli) as `pedidos`, c_cli `cliente` FROM `historial` group by c_cli;',$prop);




$pdf->Output();
?>
