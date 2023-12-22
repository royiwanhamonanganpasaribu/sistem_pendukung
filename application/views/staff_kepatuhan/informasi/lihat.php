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
                            <strong class="card-title">Informasi Debitur</strong>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                 <tr>
                                      <th><center>NO</th>
                                      <th><center>NIK</th>
                                      <th><center>Nama Debitur</th>
                                      <th><center>Tempat Lahir</th>
                                      <th><center>Tanggal Lahir</th>
                                      <th><center>Alamat</th>
                                      <th><center>Pekerjaan</th>
                                      <th><center>Agama</th>
                                      <th><center>Golongan Darah</th>
                                      <th><center>Keterangan</th> 

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
                <td><center><?php echo $row->tempat ;?></center></td>
                <td><center><?php echo $row->tgl_lahir ;?></center></td>
                <td><center><?php echo $row->alamat ;?></center></td>
                <td><center><?php echo $row->pekerjaan ;?></center></td>

                <td><center><?php echo $row->agama ;?></center></td>
                <td><center><?php echo $row->gol_darah ;?></center></td>
                <td><center><?php echo $row->ket ;?></center></td>
                
            
                 </center></td><tr>
           
                    <?php 
                    
                  } 

                    ?>
                                  </tbody>
                                   <table class="table table-striped">
                                <thead>

                                 <tr>
                                      <th><center>Memadai : <?php echo $memadai;  ?></th><br>

                                      <th><center>Tidak Memadai : <?php echo $tidak_memadai;  ?></th><br>
                                  
                            </table>
                        </div>
                    </div>
                </div>

                    
                                    </div>
                                </div>

                            </div>
                        </div> 
                    </div>
                    </div>


        </div>
    </div>

     <?php  $this->load->view('marketing/footer'); ?>