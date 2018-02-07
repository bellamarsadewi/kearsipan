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
                                <h4 class="title">ARSIP</h4>
                            </div>
                            
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>No</th>
                                        <th>Kode Agenda</th>
                                        <th>No Arsip</th>
                                        <th>Aksi</th>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no = 1;
                                            foreach ($arsip as $a) {
                                         ?>
                                         <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $a->kode_agenda; ?></td>
                                            <td><?php echo $a->no_arsip; ?></td>
                                            <td>
                                                <a href="<?php echo base_url('index.php/Welcome/').$a->id_arsip; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
