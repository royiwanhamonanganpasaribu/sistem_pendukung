<div class="sidebar-menu">
	
	<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
        <div class="menu">
			<ul id="menu" >
				<li><a href="index.html"><i class="fa fa-tachometer"></i> <span>Home</span></a></li>

				<li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Lihat Data</span> <span class="fa fa-angle-right" style="float: right"></span></a>

					<ul id="menu-academico-sub" >
						 <li id="menu-academico-avaliacoes" ><a href="<?php echo base_url(); ?>index.php/lihat_data_warna">Lihat Data Warna</a></li>
						<li id="menu-academico-avaliacoes" ><a href="<?php echo base_url(); ?>index.php/lihat_data_benang">Lihat Data Benang</a></li>
						<li id="menu-academico-boletim" ><a href="<?php echo base_url(); ?>index.php/lihat_data_dipakai">Lihat Data Yang Dipakai</a></li>
					</ul>
				</li>
				<li id="menu-academico" ><a href="#"><i class="lnr lnr-pencil"></i> <span> Tambah Data</span> <span class="fa fa-angle-right" style="float: right"></span></a>
					<ul id="menu-academico-sub" >
					 	<li id="menu-academico-avaliacoes" ><a href="<?php echo base_url(); ?>index.php/tambah_data_warna">Tambah Data Warna</a></li>
						 <li id="menu-academico-avaliacoes" ><a href="<?php echo base_url(); ?>index.php/tambah_data_benang">Tambah Data Benang</a></li>
						<li id="menu-academico-boletim" ><a href="<?php echo base_url(); ?>index.php/pakai">Tambah Data Yang Dipakai</a></li>
					</ul>
				</li>
				<li id="menu-academico" ><a href="<?php echo base_url(); ?>index.php/laporan"><i class="lnr lnr-book"></i> <span>Laporan</span></a></li>
				<li><a href="<?php echo base_url(); ?>"><i class="lnr lnr-power-switch"></i><span>Logout</span></a>				
								
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->