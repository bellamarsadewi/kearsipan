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


                    <?php foreach ($tambah as $t): ?>
                <form method="post" action="<?php echo base_url('index.php/Welcome/add_despos/').$t->id_masuk; ?>">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Tambahkan desposisi</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                            <div class="form-group">
                                                <label>Tanggal Diterima</label>
                                                <input type="date" class="form-control border-input" name="diterima" value="<?php echo $t->diterima_tgl; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Pemberi Desposisi</label>
                                                <input type="text" class="form-control border-input" name="pemberi" value="<?php echo $t->pemberi_despos; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Untuk</label>
                                                <select name="untuk" class="form-control" value="<?php echo $t->untuk; ?>">
                                                    <option value="Diketahui">Diketahui</option>
                                                    <option value="Dipersiapkan konsep">Dipersiapkan konsep</option>
                                                    <option value="Dijawab/direspon">Dijawab/direspon</option>
                                                    <option value="Dilaksanakan">Dilaksanakan</option>
                                                    <option value="Dibicarakan/didiskusikan">Dibicarakan/didiskusikan</option>
                                                    <option value="Diarsipkan">Diarsipkan</option>
                                                    <option value="Dilaporkan">Dilaporkan</option>
                                                    <option value="Dikonsultasikan">Dikonsultasikan</option>
                                                    <option value="Diusulkan">Diusulkan</option>
                                                    <option value="Lainnya">Lainnya</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Isi Desposisi</label>
                                                <input type="textarea" class="form-control border-input" name="isi" value="<?php echo $t->isi_despos; ?>">
                                            </div>
                                            <div class="form-group">
                                            <label>Diteruskan ke: </label>
                                            <select name="terusan" class="form-control" value="<?php echo $t->terusan; ?>">
                                                <option value="KTU">KTU</option>
                                                <option value="WK1">WK1</option>
                                                <option value="WK2">WK2</option>
                                                <option value="WK3">WK3</option>
                                                <option value="KUP">KUP</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                            </div>
                                            <div class="form-control">
                                                <button type="submit" class="btn btn-info btn-fill btn-wd">Tambah</button>
                                            </div>  
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
</form>


    
</div>
</div>
</body>
    <?php include 'js.php'; ?>
</html>
