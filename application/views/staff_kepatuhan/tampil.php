 <?php  $this->load->view('staff_kepatuhan/header'); ?>

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-22">
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
<tr>
<td>NIK</td>
<td>Nama</td>
<td>Aksi</td>
</tr>

<?php foreach($tampil as $row) : ?>

<tr>
<td> <?php print $row->nik; ?> </td>
<td> <?php print $row->nama; ?> </td>
 <td><center><a href="<?php echo base_url()?>index.php/report/<?php echo $row->nik; ?>"  class="btn btn-mini btn-primary">Cetak</a>
</tr>
<?php endforeach; ?>
</table>

<br>
<?php print 'Ketik NIK : ';?>
<br>
<form action="<?php print site_url();?>/pencarian/cari" method=POST>
<input type=text name=cari> <input type=submit value="cari">
</form>
                            </tr>
                   
                                  </tbody>
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

     <?php  $this->load->view('staff_kepatuhan/footer'); ?>