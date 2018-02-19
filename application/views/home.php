<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pengarsipan Surat</title>
        <link rel="icon" type="image/icon" href="asset/images3/tabicon.ico">

        <link rel="stylesheet" type="text/css" href="">
        <link href="<?php echo base_url('asset/css3/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('asset/css3/bootstrap-theme.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('asset/css3/font-awesome.min.css'); ?>" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,700i' rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Crimson+Text:400,700,700i|Josefin+Sans:700' rel="stylesheet">
        <link href="<?php echo base_url('asset/css3/main.css'); ?>" rel="stylesheet">
        <link rel="icon" href="<?php echo base_url('asset/logo.png/'); ?>">
        <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
        
    </head>

    <body>
        <div id="index">                                           <!-- Index starts here -->
            <div class="container main">
                <div class="row home">
                    <!--<div id = "index_left" class="col-md-6 left">
                        <img class="img-responsive img-rabbit" src="assets/images/2.jpg">
                    </div>-->
                    <div id = "index_right" class="text-center right">
                        <div class="logo">
                            <img src="asset/images3/arsip.jpg"><br><br>
                            <h4>PENGARSIPAN</h4>
                        </div>
                        <p class="home-description">
                            Pengarsipan Surat Masuk dan Surat Keluar
                        </p>
                        <div class="btn-group-vertical custom_btn animated slideinright">
                            <div id="about" class="btn btn-rabbit">Tentang</div>
                            <div id="work" class="btn btn-rabbit">Detail</div>
                            <a href="<?php echo base_url('index.php/login/login'); ?>"><div id="contact" class="btn btn-rabbit">Login Admin</div></a>
                        </div>      
                    </div>
                </div>

                
            </div>
        </div>                                                      <!-- index ends here -->

        <div id="about_scroll" class="pages ">                      <!-- about strats here  -->
            <div class="container main">
                <div class="row">
                    <div class="col-md-12 text-center" id="about_right">

                        <div id="watermark"><br><br><br><br><br><br><br>
                            <h2 class="page-title" text-center>TENTANG</h2>
                            <!--<div class="marker">a</div>-->
                        </div>
                        <p class='subtitle'>Tentang Aplikasi Pengarsipan Surat Masuk dan Keluar</p>
                        <p class="info">Aplikasi ini dibuat untuk mempermudah proses dalam pengarsipan surat-menyurat. Terdapat Surat Masuk, Surat Keluar, Desposisi, dan Arsip</p>  
                        <center><a href="#index" class="btn btn-rabbit back"> <i class="fa fa-angle-left" aria-hidden="true"></i> Back to home </a></center>
                    </div>
                </div>
            </div>            
        </div>                                                                <!-- About ends here -->


        
        <div id="work_scroll" class="pages">                                  <!-- Work starts here -->
            <div class="container main">
                <div class="row">
                    <div class="col-md-12 text-center" id="work_right">
                        <div id="watermark"><br><br><br><br><br><br><br>
                            <h2 class="page-title" text-center>DETAIL</h2>
                            <!--<div class="marker">w</div>-->
                        </div>
                        <p class='subtitle'>Detail Aplikasi Pengarsipan Surat Masuk dan Keluar
                        </p>
                        <p class="info"></p>
                        <center><a href="#index" class="btn btn-rabbit back"> <i class="fa fa-angle-left" aria-hidden="true"></i> Back to Home </a></center>
                    </div>
                </div>
            </div>    
        </div>                                                                 <!-- Work ends here  -->


        <div id="contact_scroll" class="pages">                             <!-- Contact starts here -->
            <div class="container main">
                <div class="row">
                    <div class="col-md-6 left" id="contact_left">
                        <img class="img-responsive img-rabbit" src="assets/images/contact.jpg">
                    </div>

                    <div class="col-md-6 right" id="contact_right">
                        <a href="#index" class="btn btn-rabbit back"> <i class="fa fa-angle-left" aria-hidden="true"></i> Back to Home </a>
                        <div id="watermark">
                            <h2 class="page-title" text-center>Contact</h2>
                            <div class="marker">c</div>
                        </div>
                        <p class='subtitle'>I'm based in cheltenham in the UK, not far from Bristol, Birmingham, Oxford and Swindom. Drop me a line.
                        </p>
                        <!-- form -->
                        <form class="form_edit"> 
                            <div class="form-group">
                                <input type="name" class="form-control" id="exampleInputName" placeholder="Name">
                            </div>

                            <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                            </div>

                            <div class="form-group">
                            <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-rabbit submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
       
            <footer class="text-center">
                <div class="container bottom">
                    <div class="row">
                        <div class="col-sm-12">
                            <p>Made with <i class="fa fa-heartbeat" aria-hidden="true"></i> by <a href="https://themewagon.com/">Themewagon</a></p>
                        </div>
                    </div>
                </div>
            </footer>
            
        </div>                                                              <!-- Contact ends here -->
        
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
        <script src="<?php echo base_url('asset/js3/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('asset/js3/script.js'); ?>"></script>
    </body>
</html>