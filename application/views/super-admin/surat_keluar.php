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
                                <h4 class="title">Agenda Surat Keluar
                                    <a href="<?php echo base_url('index.php/suker/input_keluar'); ?>" class="btn btn-warning">Tambah</a>
                                </h4>
                              
                            </div>
                            
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>kode_Agenda</th>
                                        <th>No Surat</th>
                                        <th>Kepada</th>
                                        <th>Perihal</th>
                                        <th>Pengelola</th>
                                        <th>Aksi</th>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no = 1;
                                            foreach ($suker as $k) {
                                         ?>
                                         <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $k->tgl_surat; ?></td>
                                            <td><?php echo $k->kode_agenda; ?></td>
                                            <td><?php echo $k->no_surat; ?></td>
                                            <td><?php echo $k->kepada; ?></td>
                                            <td><?php echo $k->perihal; ?></td>
                                            <td><?php echo $k->pengelola; ?></td>
                                            <td>
                                                <a href="<?php echo base_url('index.php/suker/editsuker/').$k->id_keluar; ?>" class="btn btn-primary"><i class="fa fa-edit"></i>
                                                </a>
                                                <a href="<?php echo base_url('index.php/suker/delsuker/').$k->id_keluar; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
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
