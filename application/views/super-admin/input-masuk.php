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

    <form method="post" action="<?php echo base_url('index.php/Welcome/add_masuk'); ?>" enctype="multipart/form-data">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Tambah Agenda Surat Masuk</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tanggal Surat Kirim</label>
                                                <input type="date" class="form-control border-input"  name="tanggal">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tanggal Surat Terima</label>
                                                <input type="date" class="form-control border-input"  name="diterima">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Kode Agenda</label>
                                                <input list="kode" name="kode" style="border: 1px solid gray" class="form-control">
                                                <datalist id="kode">
                                                    <?php foreach ($kode as $k): ?>
                                                        <option value="<?php echo $k->no_agenda; ?>">
                                                            <?php echo $k->keterangan; ?>
                                                        </option>
                                                    <?php endforeach ?>
                                                </datalist>    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nomor Surat</label>
                                                <input type="text" class="form-control border-input" name="nosur">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Jenis Surat</label>
                                                <select class="form-control" name="jenis">
                                                    <option value="PRIBADI">PRIBADI</option>
                                                    <option value="RESMI">RESMI</option>
                                                    <option value="RAHASIA">RAHASIA</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Dari</label>
                                                <input type="text" class="form-control border-input" name="dari">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Perihal</label>
                                                <input type="text" class="form-control border-input" name="perihal">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Pengelola</label>
                                                <input type="text" class="form-control border-input" name="pengelola">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Foto</label><br>
                                                <img id="blah" src="<?php echo base_url('asset/up.png'); ?>" class="img-thumbnail" alt="your image" /><br><br>
                                                <input type='file' name="foto" onchange="readURL(this);" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Tambah</button>
                                    </div><br>
                                    <div class="text-center">
                                        <a href="<?php echo base_url('index.php/Welcome/masuk'); ?>" class="btn btn-primary">Kembali</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        </form>

    </div>
</div>
</div>
</div>

</body>

    <?php include 'js.php'; ?>
</html>
