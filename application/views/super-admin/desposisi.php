<!doctype html>
<html lang="en">
<head>
    <?php include 'css.php'; ?>

</head>
<body>
<!-- Modal -->
<div class="wrapper">
    <?php include 'sidebar.php'; ?>
    <div class="main-panel">
    <?php include 'navigasi.php'; ?>
    <div class="container-fluid">

                            <div class="header">
                                <h4 class="title"> DESPOSISI </h4>
                            </div>
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
                                            foreach ($ms as $u) {
                                         ?>
                                         <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $u->tgl_surat; ?>
                                            <input type="hidden" name="tgl" 
                                                    value="<?php echo $u->tgl_surat; ?>">
                                            </td>
                                            <td><?php echo $u->kode_agenda; ?>
                                            <input type="hidden" name="kode" 
                                                    value="<?php echo $u->kode_agenda; ?>">
                                            </td>
                                            <td><?php echo $u->no_surat; ?>
                                            <input type="hidden" name="nosur" 
                                                    value="<?php echo $u->no_surat; ?>">
                                            </td>
                                            <td><?php echo $u->dari; ?>
                                            <input type="hidden" name="dari" 
                                                    value="<?php echo $u->dari; ?>">
                                            </td>
                                            <td><?php echo $u->perihal; ?>
                                            <input type="hidden" name="perihal"
                                                    value="<?php echo $u->perihal; ?>">
                                            </td>
                                            <td><?php echo $u->pengelola; ?>
                                            <input type="hidden" name="pengelola" 
                                                    value="<?php echo $u->pengelola; ?>">
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url('index.php/Welcome/detail/').$u->id_masuk; ?>" class="btn btn-info">
                                                    <i class="fa fa-plus-circle"></i>
                                                </a>
                                                
                                            </td>

                                             <?php } ?>
                                         </tr>
                                    </tbody>
                                </table>
                                <br>
                                <br>
                                <table class="table table-bordered">
                                    <thead>
                                        <th>No</th>
                                        <th>Tanggal Surat</th>
                                        <th>Tanggal Diterima</th>
                                        <th>Asal Surat</th>
                                        <th>Perihal</th>
                                        <th>Terusan</th>
                                        <th>Aksi</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php 
                                            $no = 1;
                                            foreach ($posisi as $p) {
                                            ?>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $p->tgl_surat; ?></td>
                                            <td><?php echo $p->diterima_tgl; ?></td>
                                            <td><?php echo $p->asal_surat; ?></td>
                                            <td><?php echo $p->perihal; ?></td>
                                            <td><?php echo $p->terusan; ?></td>
                                            <td>
                                                <a href="<?php echo base_url('index.php/Welcome/laporan_pdf/').$p->id_despos; ?>" class="btn btn-success">PDF
                                                </a>
                                                <a href="<?php echo base_url('index.php/Welcome/kirim/').$u->id_masuk; ?>" class="btn btn-danger">
                                                    <i class="fa fa-save"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
    </div>
    </div>
    </div>
</body>

  <?php include 'js.php'; ?>


</html>