<?php
Class Laporan_informasi extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('L','cm','Legal', 'C');
        $pdf->AddPage();
        $pdf->SetFont('Helvetica','',14, 'C');

        $pdf->SetFont('Arial','B',12, 'C');
        $pdf->Write(0.5, 'Laporan Kelayakan Calon Debitur');$pdf->Ln();
        $pdf->cell(33.5,2, 'LAPORAN NILAI CALON DEBITUR',1,0,'C');
        $pdf->Ln();
        
        $pdf->SetFont('Arial','B',10, 'C');
        $pdf->Cell(5,1,'NIK',1,0, 'C');
        $pdf->Cell(5.5,1,'Nama',1,0, 'C');
        $pdf->Cell(4,1,'Tempat Lahir',1,0, 'C');

        $pdf->Cell(3,1,'Tanggal Lahir',1,0, 'C');
        $pdf->Cell(4,1,'Alamat',1,0, 'C');
        $pdf->Cell(4,1,'Pekerjaan',1,0, 'C');

        $pdf->Cell(4,1,'Agama',1,0, 'C');
        $pdf->Cell(4,1,'Golongan Darah',1,0, 'C');

        $pdf->SetFont('Arial','',10, 'C');
     $pdf->Ln();
        $tbl_informasi = $this->db->get('tbl_informasi')->result();
        $no=0;
        foreach ($tbl_informasi as $row){
            
            $pdf->Cell(5,1,$row->nik,1,0, 'C');
            $pdf->Cell(5.5,1,$row->nama,1,0, 'C');
            $pdf->Cell(4,1,$row->tempat,1,0, 'C');

            $pdf->Cell(3,1,$row->tgl_lahir,1,0, 'C');
            $pdf->Cell(4,1,$row->alamat,1,0, 'C');
            $pdf->Cell(4,1,$row->pekerjaan,1,0, 'C');

            $pdf->Cell(4,1,$row->agama,1,0, 'C');
            $pdf->Cell(4,1,$row->gol_darah,1,0, 'C');
            $pdf->Ln();
        }
       

      
        $pdf->Ln();$no=0;
        $pdf->Ln();
        $pdf->SetFont('Helvetica','',12);
        $pdf->cell(0.5,0.5, 'Staff Kepatuhan');$pdf->cell(7);
        $pdf->cell(0.5,0.5, '');$pdf->cell(7);
        $pdf->cell(0.5,0.5, '');$pdf->cell(4);$pdf->Ln(1.5);$pdf->Ln(1.5);
        $pdf->cell(0.5,0.5, "Drs.");$pdf->cell(7);
        $pdf->Output();
    }
}