 <?php  $this->load->view('staff_kepatuhan/header'); ?>

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Edit Data</h1>
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
                            <div class="card-header">
                                <strong class="card-title">Informasi Debitur</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Informasi Calon Debitur</h3>
                                        </div>
                                        <hr>
<form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/informasi/simpan" onsubmit="return cekform()">
    <div class="form-group has-success">
         <label for="cc-name" class="control-label mb-1">NIK Debitur : </label>
             <input id="nik" name="nik" value="<?php echo $staff_kepatuhan['nik']; ?>" <?php echo form_error('nik'); ?> type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name"> 
                 <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
      </div>
    <div class="form-group has-success">
         <label for="cc-name" class="control-label mb-1">Nama Debitur : </label>
             <input id="nama" name="nama" value="<?php echo $staff_kepatuhan['nama']; ?>" <?php echo form_error('nama'); ?> type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name"> 
                 <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
      </div>

    <div class="form-group has-success">
         <label for="cc-name" class="control-label mb-1">Tempat Lahir : </label>
             <input id="tempat" name="tempat" value="<?php echo $staff_kepatuhan['tempat']; ?>" <?php echo form_error('tempat'); ?> type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name"> 
                 <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
      </div>

    <div class="form-group has-success">
         <label for="cc-name" class="control-label mb-1">Tanggal Lahir : </label>
             <input id="tgl_lahir" name="tgl_lahir" value="<?php echo $staff_kepatuhan['tgl_lahir']; ?>" <?php echo form_error('tgl_lahir'); ?> type="date" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name"> 
                 <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
      </div>
     <div class="form-group has-success">
         <label for="cc-name" class="control-label mb-1">Pekerjaan : </label>
             <input id="pekerjaan" name="pekerjaan" value="<?php echo $staff_kepatuhan['pekerjaan']; ?>" <?php echo form_error('pekerjaan'); ?> type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name"> 
                 <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
      </div>
    <div class="form-group has-success">
         <label for="cc-name" class="control-label mb-1">Agama : </label>
             <input id="agama" name="agama" value="<?php echo $staff_kepatuhan['agama']; ?>" <?php echo form_error('agama'); ?> type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name"> 
                 <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
      </div>
          <div class="form-group has-success">
         <label for="cc-name" class="control-label mb-1">Golongan Darah : </label>
             <input id="gol_darah" name="gol_darah" value="<?php echo $staff_kepatuhan['gol_darah']; ?>" <?php echo form_error('gol_darah'); ?> type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name"> 
                 <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
      </div>

<br>
<div>
     <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
            <span id="payment-button-amount">Ubah</span>
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
     <?php  $this->load->view('staff_kepatuhan/footer'); ?>