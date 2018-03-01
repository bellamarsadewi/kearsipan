<!--   Core JS Files   -->
    <script src="<?php echo base_url('asset/js/jquery-1.10.2.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('asset/js/bootstrap.min.js'); ?>" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?php echo base_url('asset/js/bootstrap-checkbox-radio.js'); ?>"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo base_url('asset/js/chartist.min.js'); ?>"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url('asset/js/bootstrap-notify.js'); ?>"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="<?php echo base_url('asset/js/paper-dashboard.js'); ?>"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="<?php echo base_url('asset/js/demo.js'); ?>"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-gift',
            	message: "Selamat Datang di <b>Pengarsipan Surat</b> - Project UKK SMKN 1 LUMAJANG tahun 2018."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>