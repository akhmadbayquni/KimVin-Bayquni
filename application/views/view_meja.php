<html>	<head>		<title><?php echo $title;?></title>		<?php include "com_library.php";?>		<script type="text/javascript" src="<?php echo base_url();?>assets/js/view_meja.js"></script>	</head>	<body>		<?php include "com_header.php"; ?>		<?php include "com_toolbar.php"; ?>		<div id="container">			<?php include "com_navigasi.php";?>			<div id="content">							<div id="button_list">					<a href="javascript:void(0)" id="tambah" class="btn"><img src="<?php echo base_url();?>assets/img/tambah.png" class="icon"/> Tambah Baru</a>					<a href="javascript:void(0)" id="refresh" class="btn"><img src="<?php echo base_url();?>assets/img/update.png" class="icon"/> Refresh</a>				</div>								<div class="table_data">					<table cellpadding="5" border="1">						<thead>							<tr class="tr_title">								<th colspan="6"><img src="<?php echo base_url();?>assets/img/meja.png" class="icon"/><?php echo $title;?></th>							</tr>							<tr align="center">								<th>No Meja</th>								<th>Booking</th>								<th>Waktu Booking</th>								<th>Tamu</th>								<th>Kapasitas</th>								<th align='center'>Action</th>							</tr>						</thead>						<tbody>						<?php if($data){							$no = $page+1;							foreach($data as $data){						?>							<tr align="center">								<td>Meja <?php echo $data->no_meja;?></td>								<?php									if($data->booking=='n'){										echo "<td><img src='".base_url('assets/img/hapus.png')."'/ class='icon'></td>";										echo "<td>--</td>";										echo "<td>--</td>";									}else{										echo "<td><img src='".base_url('assets/img/success.png')."'/ class='icon'></td>";										echo "<td>".$data->tanggal." ".$data->waktu."</td>";											echo "<td>".$data->tamu."</td>";										}								?>								<td><?php echo $data->kapasitas.' Orang';?></td>								<td>									<a href="javascript:void(0)" class="edit" id="<?php echo $data->no_meja;?>"><img src="<?php echo base_url();?>assets/img/fix.png" class="icon"/>Edit</a>									<a href="javascript:void(0)" class="hapus" id="<?php echo $data->no_meja;?>"><img src="<?php echo base_url();?>assets/img/hapus.png" class="icon"/>Hapus</a>								</td>							</tr>						<?php $no++; } } ?>							</tbody>					</table>										<div id="paging">						<?php echo $links;?>					</div>									</div>							<div id="form_submit">					<form id="form_data">						<input type="text" name="id" id="id" hidden="true"/>						<table cellpadding="5" border="0">							<tr>								<td>No Meja</td>								<td>:</td>								<td><input type="number" name="no_meja" id="no_meja" max=50 min=1 required/></td>							</tr>							<tr>								<td>Kapasitas</td>								<td>:</td>								<td><input type="number" name="kapasitas" id="kapasitas" required/></td>							</tr>							<tr>								<td colspan="3"><input type="submit" id="submit" class="btn"/></td>							</tr>						</table>					</form>				</div>											</div>		</div>		</body></html>	