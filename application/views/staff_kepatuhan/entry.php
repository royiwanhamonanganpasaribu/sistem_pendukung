<?php  $this->load->view('staff_kepatuhan/header'); ?>
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Entry Data</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-10">
                        <div class="card">
                         
                                <strong class="card-title">Calon Debitur</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
<div class="card-body">
    <div class="card-title">
<h3 class="text-center">Entry Calon Debitur</h3>
    </div>
    <hr> 

      <form class="form-horizontal" role="form" action="<?php echo base_url(). 'index.php/staff_kepatuhan/simpan' ?>" method="post" enctype="multipart/form-data">


<div class="form-group has-success">
   <label for="cc-name" class="control-label mb-1">NIK Calon Debitur : </label>
   <input id="nik" name="nik" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name">
   <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
</div>
<div class="form-group has-success">
   <label for="cc-name" class="control-label mb-1">Nama Calon Debitur : </label>
   <input id="nama" name="nama" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name">
   <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
</div>
<div class="form-group">
	<label for="checkbox" class="col-mb-1 control-label">KTP : </label>
	<label><input type="radio" name="ktp" value="24"> Sesuai : </label>
	<label><input type="radio" name="ktp" value="1">Tidak Sesuai : </label>
</div>
<div class="form-group">
	<label for="checkbox" class="col-mb-1 control-label">KK : </label>
	<label><input type="radio" name="kk" value="21"> Sesuai : </label>
	<label><input type="radio" name="kk" value="1">Tidak Sesuai : </label>
</div>
<div class="form-group">
	<label for="checkbox" class="col-mb-1 control-label">Surat Nikah : </label>
	<label><input type="radio" name="surat_nikah" value="20"> Ada : </label>
	<label><input type="radio" name="surat_nikah" value="1">Tidak Ada : </label>
</div>
<div class="form-group">
	<label for="checkbox" class="col-mb-1 control-label">Slip Gaji/Rekening Koran : </label>
	<label><input type="radio" name="slip_gaji" value="10"> Ada : </label>
	<label><input type="radio" name="slip_gaji" value="1">Tidak Ada : </label>
</div>
<div class="form-group">
	<label for="checkbox" class="col-mb-1 control-label">Surat Jaminan : </label>
	<label><input type="radio" name="surat_jaminan" value="9"> Ada : </label>
	<label><input type="radio" name="surat_jaminan" value="1">Tidak Ada : </label>
</div>
<div class="form-group">
	<label for="checkbox" class="col-mb-1 control-label">Rekening Listrik : </label>
	<label><input type="radio" name="rek_listrik" value="8"> Ada : </label>
	<label><input type="radio" name="rek_listrik" value="1">Tidak Ada : </label>
</div>
<div class="form-group">
	<label for="checkbox" class="col-mb-1 control-label">NPWP : </label>
	<label><input type="radio" name="npwp" value="8"> Ada : </label>
	<label><input type="radio" name="npwp" value="1">Tidak Ada : </label>
</div>
 
       </div>
<div>
   <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
       <span id="payment-button-amount">Entry</span>
   </button>
</div><br>
</form>
</div>
                                </div>

                            </div>
                        </div> <!-- .card -->

                    </div><!--/.col-->

                    </div>


        </div>
    </div>
     <?php  $this->load->view('staff_kepatuhan/informasi/footer'); ?>