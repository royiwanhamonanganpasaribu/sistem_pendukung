 <?php  $this->load->view('staff_kepatuhan/header'); ?>

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Entry Data Informasi Debitur</h1>
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
<h3 class="text-center">Entry Informasi Debitur</h3>
                                        </div>
                                        <hr>
<form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/informasi/simpan" onsubmit="return cekform()">
    <div class="form-group has-success">
        <label for="cc-name" class="control-label mb-1">NIK  Debitur : </label>
            <input name="nik" id="nik" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name">
            <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
    </div>

<div class="form-group has-success">
    <label for="cc-name" class="control-label mb-1">Nama Debitur : </label>
    <input  name="nama" id="nama"type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name">
    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
</div>
<div class="form-group has-success">
    <label for="cc-name" class="control-label mb-1">Tempat Lahir : </label>
    <input id="tempat" name="tempat" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name">
    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
</div>
<div class="form-group has-success">
    <label for="cc-name" class="control-label mb-1">Tanggal Lahir : </label>
    <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name">
    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
</div>
<div class="form-group has-success">
    <label for="cc-name" class="control-label mb-1">Alamat : </label>
    <input id="alamat" name="alamat" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name">
    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
</div>
<div class="form-group has-success">
    <label for="cc-name" class="control-label mb-1">Pekerjaan  </label>
    <select  name=pekerjaan>
   <option value="Guru">Guru</option>
   <option value="Petani">Petani</option>
   <option value="Karyawan Swasta">Karyawan Swasta</option>
   <option value="Polisi">Polisi</option>
   <option value="Tentara">Tentara</option>
   <option value="Lainnya">Lainnya</option>
</select >
    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
</div>
<div class="form-group has-success">
    <label for="cc-name" class="control-label mb-1">Aagama : </label>
  <select  name=agama>
   <option value="Kristen Protestan">Kristen Protestan</option>
   <option value="Katolik">Katolik</option>
   <option value="Islam">Islam</option>
   <option value="Budha">Budha</option>
   <option value="Lainnya">Lainnya</option>
</select >
    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
</div>
<div class="form-group has-success">
    <label for="cc-name" class="control-label mb-1">Golongan Darah: </label>
   <select  name=gol_darah>
   <option value="A">A</option>
   <option value="AV">AB</option>
   <option value="B">B</option>
   <option value="O">O</option>
</select >
    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
</div>
</div>

<div>
    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
        <span id="payment-button-amount">Tambah</span>
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
    <script>
  $(document).ready(function()
  {
    $("#nik").autocomplete({
      source : "<?php echo site_url('informasi/get_autocomplete') ?>",

      select: function(event, ui){
        $('[name="nik"]').val(ui.item.label);
        $('[name="nama"]').val(ui.item.nama);

      }
    });
});
</script>
     <?php  $this->load->view('staff_kepatuhan/footer'); ?>