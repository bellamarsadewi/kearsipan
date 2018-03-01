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
                                <h4 class="title">Agenda Surat Masuk
                                    <a href="<?php echo base_url('index.php/Welcome/input_masuk/'); ?>" class="btn btn-warning">Tambah</a>
                                </h4>
                              
                            </div>
                            
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th style="width: 50px;">No</th>
                                      	<th style="width: 150px;">Tanggal</th>
                                      	<th style="width: 150px;">No Surat</th>
                                        <th style="width: 120px;">Jenis Surat</th>
                                      	<th style="width: 150px;">Dari</th>
                                        <th style="width: 150px;">Perihal</th>
                                        <th style="width: 100px;">Pengelola</th>
                                        <th style="width: 300px;">Aksi</th>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no = 1;
                                            foreach ($masuk as $u) {
                                         ?>
                                         <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $u->tgl_surat; ?></td>
                                            <td><?php echo $u->no_surat; ?></td>
                                            <td><?php echo $u->jenis_surat; ?></td>
                                            <td><?php echo $u->dari; ?></td>
                                            <td><?php echo $u->perihal; ?></td>
                                            <td><?php echo $u->pengelola; ?></td>
                                            <td>
                                                <a href="<?php echo base_url('upload/').$u->foto; ?>" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                                <a href="<?php echo base_url('index.php/Welcome/editmas/').$u->id_masuk; ?>" class="btn btn-primary">
                                                    <i class="fa fa-edit"></i></a>
                                                <a href="<?php echo base_url('index.php/Welcome/delmasuk/').$u->id_masuk; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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

<script type="text/javascript">
$(document).ready(function(){
  $('#email').on('submit',function(e) {  
  $.ajax({
      url:'subscribe_act.php', //nama action script php sobat
      data:$(this).serialize(),
      type:'POST',
      success:function(data){
        console.log(data);
     swal("Success!", "Message sent!", "success");
      },
      error:function(data){
     swal("Oops...", "Something went wrong :(", "error");
      }
    });
    e.preventDefault(); 
  });
});
</script>

</body>

  <?php include 'js.php'; ?>


</html>
