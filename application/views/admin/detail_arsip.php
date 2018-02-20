<!doctype html>
<html lang="en">
<head>
	<?php include 'css.php'; ?>

</head>
<body>
<div class="wrapper">
    <?php include 'sidebar.php'; ?>
    <div class="main-panel">
    <?php include 'navigasi.php'; ?>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div>
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Agenda Surat Masuk</h4>
                              
                            </div>
                            
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>No</th>
                                    	<th>Tanggal</th>
                                    	<th>Kode Agenda</th>
                                    	<th>No Surat</th>
                                    	<th>Dari</th>
                                        <th>Perihal</th>
                                        <th>Pengelola</th>
                                        <th>Aksi</th>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no = 1;
                                            foreach ($detail as $p) {
                                         ?>
                                         <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $p->tgl_surat; ?></td>
                                            <td><?php echo $p->kode_agenda; ?></td>
                                            <td><?php echo $p->no_surat; ?></td>
                                            <td><?php echo $p->dari; ?></td>
                                            <td><?php echo $p->perihal; ?></td>
                                            <td><?php echo $p->pengelola; ?></td>
                                             <?php } ?>
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
</body>

  <?php include 'js.php'; ?>


</html>
