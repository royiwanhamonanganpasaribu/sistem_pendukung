 <?php  $this->load->view('marketing/header'); ?>

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
<form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/marketing/simpan" onsubmit="return cekform()">
    <div class="form-group has-success">
         <label for="cc-name" class="control-label mb-1">NIK Debitur : </label>
             <input id="nik" name="nik" value="<?php echo $marketing['nik']; ?>" <?php echo form_error('nik'); ?> type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name"> 
                 <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
      </div>
    <div class="form-group has-success">
         <label for="cc-name" class="control-label mb-1">Nama Debitur : </label>
             <input id="nama" name="nama" value="<?php echo $marketing['nama']; ?>" <?php echo form_error('nama'); ?> type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name"> 
                 <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
      </div>

    <div class="form-group has-success">
         <label for="cc-name" class="control-label mb-1">Tempat Lahir : </label>
             <input id="tempat" name="tempat" value="<?php echo $marketing['tempat']; ?>" <?php echo form_error('tempat'); ?> type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name"> 
                 <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
      </div>

    <div class="form-group has-success">
         <label for="cc-name" class="control-label mb-1">Tanggal Lahir : </label>
             <input id="tgl_lahir" name="tgl_lahir" value="<?php echo $marketing['tgl_lahir']; ?>" <?php echo form_error('tgl_lahir'); ?> type="date" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name"> 
                 <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
      </div>
          <div class="form-group has-success">
         <label for="cc-name" class="control-label mb-1">Alamat: </label>
             <input id="alamat" name="alamat" value="<?php echo $marketing['alamat']; ?>" <?php echo form_error('alamat'); ?> type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name"> 
                 <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
      </div>
    <div class="form-group has-success">
         <label for="cc-name" class="control-label mb-1">Pekerjaan : </label>
    <select name="pekerjaan" required>
        <option value="">Pilih</option>
        <option value="Guru" <?php if($marketing['pekerjaan'] == '1'){ echo 'selected'; } ?>>Guru </option> 
        <option value="Karyawan Swasta" <?php if($marketing['pekerjaan'] == 'Karyawan Swasta'){ echo 'selected'; } ?>>Karyawan Swasta</option> 
        <option value="Polisi" <?php if($marketing['pekerjaan'] == 'Polisi'){ echo 'selected'; } ?>>Polisi</option> 
        <option value="Tentara" <?php if($marketing['pekerjaan'] == 'Tentara'){ echo 'selected'; } ?>>Tentara</option> 
        <option value="Lainnya" <?php if($marketing['pekerjaan'] == 'Lainnya'){ echo 'selected'; } ?>>Lainnya</option> 
    </select>
    </div>
    <div class="form-group has-success">
         <label for="cc-name" class="control-label mb-1">Agama : </label>
       <select name="agama" required>
        <option value="">Pilih</option>
        <option value="Kristen Protestan" <?php if($marketing['agama'] == '1'){ echo 'selected'; } ?>>Kristen Protestan </option> 
        <option value="Katolik" <?php if($marketing['agama'] == 'Katolik'){ echo 'selected'; } ?>>Katolik</option> 
        <option value="Islam" <?php if($marketing['agama'] == 'Islam'){ echo 'selected'; } ?>>Islam</option> 
        <option value="Budha" <?php if($marketing['agama'] == 'Budha'){ echo 'selected'; } ?>>Budha</option> 
        <option value="Lainnya" <?php if($marketing['agama'] == 'Lainnya'){ echo 'selected'; } ?>>Lainnya</option> 
    </select>
      </div>
    <div class="form-group has-success">
         <label for="cc-name" class="control-label mb-1">Golongan Darah : </label>
       <select name="gol_darah" required>
        <option value="">Pilih</option>
        <option value="A" <?php if($marketing['gol_darah'] == '1'){ echo 'selected'; } ?>>A </option> 
        <option value="AB" <?php if($marketing['gol_darah'] == 'AB'){ echo 'selected'; } ?>>AB</option> 
        <option value="B" <?php if($marketing['gol_darah'] == 'B'){ echo 'selected'; } ?>>B</option> 
        <option value="O" <?php if($marketing['gol_darah'] == 'O'){ echo 'selected'; } ?>>O</option> 
        <option value="Lainnya" <?php if($marketing['gol_darah'] == 'Lainnya'){ echo 'selected'; } ?>>Lainnya</option> 
    </select>
      </div>
      <div class="form-group">
    <label for="checkbox" class="col-mb-1 control-label">Keterangan : </label>
        <input type="radio" name="ket" <?php if($marketing['ket'] == 'Memadai'){ echo 'checked';} ?> value="Memadai">Memadai   
            <input type="radio" name="ket" <?php if($marketing['ket'] == 'Tidak Memadai'){ echo 'checked';} ?> value="Tidak Memadai">Tidak Memadai   
    </td><?php echo form_error('ket'); ?>   
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
     <?php  $this->load->view('marketing/footer'); ?>