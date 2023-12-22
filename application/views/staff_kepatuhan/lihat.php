 <?php  $this->load->view('staff_kepatuhan/header'); ?>

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Lihat Data</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-20">
         
                          
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Calon Debitur</strong>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                 <tr>
                                      <th><center>NO</th>
                                      <th><center>NIK</th>
                                      <th><center>Nama Calon Debitur</th>
                                      <th><center>KTP</th>
                                      <th><center>KK</th>
                                      <th><center>Surat Nikah</th>
                                      <th><center>Slip Gaji</th>
                                      <th><center>Surat Jaminan</th>
                                      <th><center>Rek. Listrik</th>
                                      <th><center>NPWP</th>
                                      <th><center>Total</th>
                                      <th><center>Action</th>
                                    </tr>
                                  </thead> 
                                  <tbody>
                             <?php
                      $no = 1;
                        foreach($data->result() as $row) {
                    ?>
                <td><center><?php echo $no++; ?> </center></td>
                <td><center><?php echo $row->nik ; ?></center></td>
                <td><center><?php echo $row->nama ;?></center></td>
                <td><center><?php echo $row->ktp ;?></center></td>
                <td><center><?php echo $row->kk ;?></center></td>
                <td><center><?php echo $row->surat_nikah ;?></center></td>
                <td><center><?php echo $row->slip_gaji ;?></center></td>

                <td><center><?php echo $row->surat_jaminan ;?></center></td>
                <td><center><?php echo $row->rek_listrik ;?></center></td>
                <td><center><?php echo $row->npwp ;?></center></td>
                <td><center><?php echo $row->npwp+$row->rek_listrik+$row->surat_jaminan+$row->slip_gaji+$row->surat_nikah+ $row->kk+$row->ktp    ;?></center></td>

                
                <td><center><a href="<?php echo base_url()?>index.php/staff_kepatuhan/edit/<?php echo $row->nik; ?>"  class="btn btn-mini btn-primary">Edit</a>
                <a href="<?php echo base_url()?>index.php/staff_kepatuhan/delete/<?php echo $row->nik; ?>"  class="btn btn-mini btn-danger" onclick="return confirm('anda yakin mau menghapus data ini');" >Hapus</a>
                
                            </tr>
                    <?php } ?>
                                  </tbody>
                                   
                            </table>
                        </div>
                    </div>
                </div>

										
                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->

                    </div><!--/.col-->

                    </div>


        </div>
    </div>

     <?php  $this->load->view('staff_kepatuhan/footer'); ?>