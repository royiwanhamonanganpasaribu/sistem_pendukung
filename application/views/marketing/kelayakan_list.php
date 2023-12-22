 <?php  $this->load->view('marketing/header_pencarian'); ?>

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="kelayakan m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Pencarian Data Calon Debitur</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="kelayakan m-0">
                    <div class="col-sm-20">
         
                           <div class="col-md-3 text-right">
                <form action="<?php echo site_url('pencarian/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('pencarian'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
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
                                      <th><center>Action</th>
                                    </tr>
                                  </thead> 
                                  <tbody>
                             <?php
                      $no = 1;
                    foreach ($kelayakan_data as $kelayakan) {
                    ?>
                <td><center><?php echo $no++; ?> </center></td>
                <td><center><?php echo $kelayakan->nik ; ?></center></td>
                <td><center><?php echo $kelayakan->nama ;?></center></td>

                 <td><center><a href="<?php echo base_url()?>index.php/Report/cetakkelayakan/<?php echo $kelayakan->nik; ?>"  class="btn btn-mini btn-primary">Cetak</a>
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

     <?php  $this->load->view('marketing/footer'); ?>