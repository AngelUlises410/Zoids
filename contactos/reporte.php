<?php
require('./PDF/fpdf.php');

class PDF extends FPDF{
    private $primeraPagina;

    // Constructor
    function __construct(){
        parent::__construct();
        $this->primeraPagina = true;
    }

    // Cabecera de página
    function Header(){
        // Logo en la primera página
        if ($this->primeraPagina) {
            $this->Image('./img/logo9.png', 85, 19, 40); // Cambiar las coordenadas y el tamaño según sea necesario izqueirda/derecha/tamaño
            $this->SetFont('Arial','B',14); // Cambiar el tamaño y el tipo de letra del título según sea necesario
            $this->Cell(0,10,'Reporte Final',0,1,'C');  // Escribir el título centrado
            $this->Ln(40); // Salto de línea para dejar espacio antes de la tabla
        }

        // Después de la primera página, establecer la variable $primeraPagina como false
        $this->primeraPagina = false;
    }

    // Pie de página
    function Footer(){
        // Establecer la zona horaria a la de México
        date_default_timezone_set('America/Mexico_City');

        $this->SetY(-15);
        $this->SetFont('Arial','I',9);
        $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C'); // Texto de bajo de la tabla

        // Mostrar la fecha en el pie de página
        $this->Cell(0, 10, 'Fecha de impresion: '.date('d/m/Y H:i:s'), 0, 0, 'R');
    }
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

// Encabezados de tabla
$pdf->SetFillColor(120,200,120); //aqui cambiamos el color de la tabla superior con el numero de en medio
$pdf->SetTextColor(255,255,255);
$pdf->Cell(5,8,  'ID',1,0,'C',1);
$pdf->Cell(30,8, 'Nombre',1,0,'C',1);
$pdf->Cell(30,8, 'Apellido Paterno',1,0,'C',1);
$pdf->Cell(30,8, 'Apellido Materno',1,0,'C',1);
$pdf->Cell(16,8, 'Sexo',1,0,'C',1);
$pdf->Cell(43,8, 'Correo',1,0,'C',1);
$pdf->Cell(20,8, 'Telefono',1,1,'C',1);

include('../db/db.php');
require('../db/db.php');

$consulta = "SELECT * FROM contactos";
$resultado = mysqli_query($conexion, $consulta);

$pdf->SetFillColor(240,245,255);
$pdf->SetTextColor(0,0,0);

while($row = $resultado->fetch_assoc()){
    $pdf->Cell(5,8, $row['id'],1,0,'C',0);
    $pdf->Cell(30,8, $row['nombre'],1,0,'C',0);
    $pdf->Cell(30,8, $row['apellido_paterno'],1,0,'C',0);
    $pdf->Cell(30,8, $row['apellido_materno'],1,0,'C',0);
    $pdf->Cell(16,8, $row['sexo'],1,0,'C',0);
    $pdf->Cell(43,8, $row['correo'],1,0,'C',0);
    $pdf->Cell(20,8, $row['telefono'],1,1,'C',0);
}

$pdf->Output();
?>
