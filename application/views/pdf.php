<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
    
 
    .short{
      width: 50px;
    }
 
    .normal{
      width: 100px;
    }
 
    table{
      border-collapse: collapse;
      font-family: comic sans;
      color: black;
    }
 
    thead th{
      text-align: left;
      padding: 10px;
    }
 
    tbody td{
      border-top: 1px solid #e3e3e3;
      padding: 10px;
    }
 
  </style>
</head>
<body>

<img src="asset/img/logo.png" width="700" height="150" />
	<h1 align="center">DISPOSISI</h1><br>
	<div>
		<?php foreach ($tampil as $d): ?>
			<h2><label align="left">
				Jenis Surat :
				<?php echo $d->jenis_surat; ?>
			</label></h2>
		<table border="1" align="center" height="350px" width="700px">
			<thead>
				<tr class="normal">
					<th align="right">
					Tanggal Surat 		 :
					<?php echo $d->tgl_surat; ?>
					<br>
					Asal Surat 			 :
					<?php echo $d->dari; ?>
					<br>
					No. Surat  			 :
					<?php echo $d->no_surat; ?>
					<br>
					Perihal 			 :
					<?php echo $d->perihal; ?>
					</th>
					<th>
						Diterima Tanggal :
						<?php echo $d->diterima_tgl; ?>
						<br>
						Nomor Agenda 	 :
						<?php echo $d->kode_agenda; ?>
						<br>
						Pemberi Desposisi: 
						<?php echo $d->pemberi_despos; ?>
						<br>
						Untuk  			:
						<?php echo $d->untuk; ?>
					</th>
				</tr>
				<tr class="normal">
					<th>Isi Desposisi	:
					<?php echo $d->isi_despos; ?>
					</th>
					<th></th>
				</tr>
				<tr>
					<th>Diteruskan		:</th>
					  
					<th><?php echo $d->terusan; ?></th>
				</tr>
			</thead>
		</table>
			<?php endforeach ?>
	</div>
</body>
</html>