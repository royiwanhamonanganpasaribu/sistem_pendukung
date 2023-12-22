<?php
Class Laporan extends CI_Controller{
    
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
        $pdf->Cell(3,1,'KTP',1,0, 'C');

        $pdf->Cell(3,1,'KK',1,0, 'C');
        $pdf->Cell(4,1,'Surat Nikah',1,0, 'C');
        $pdf->Cell(3,1,'Slip Gaji',1,0, 'C');

        $pdf->Cell(3,1,'Surat Jaminan',1,0, 'C');
        $pdf->Cell(4,1,'Rek.Listrik',1,0, 'C');
        $pdf->Cell(3,1,'NPWP',1,1, 'C');

        $pdf->SetFont('Arial','',10, 'C');
    
        $tbl_kelayakan = $this->db->get('tbl_kelayakan')->result();
        $no=0;
        foreach ($tbl_kelayakan as $row){
            
            $pdf->Cell(5,1,$row->nik,1,0, 'C');
            $pdf->Cell(5.5,1,$row->nama,1,0, 'C');
            $pdf->Cell(3,1,$row->ktp,1,0, 'C');

            $pdf->Cell(3,1,$row->kk,1,0, 'C');
            $pdf->Cell(4,1,$row->surat_nikah,1,0, 'C');
            $pdf->Cell(3,1,$row->slip_gaji,1,0, 'C');

            $pdf->Cell(3,1,$row->surat_jaminan,1,0, 'C');
            $pdf->Cell(4,1,$row->rek_listrik,1,0, 'C');
            $pdf->Cell(3,1,$row->npwp,1,0, 'C');
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