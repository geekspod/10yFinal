<!-- Footer -->

	<footer class="footer dark-footer t-center">
		<!-- Logo -->
		<img src="<?php echo base_url() ; ?>public/uploads/logo.png" alt="10-Yards"/>
		<!-- Text -->
		<p class="uppercase semibold">
				<?php echo $setting['footer_copyright'] ; ?>
		</p>
		
		<!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-container about">
                        <h4><?php echo $setting['footer_email'] ; ?></h4>
                        	<?php echo $setting['footer_phone'] ; ?>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                
    <!--  social -->
        
	</footer>
	<!-- End Footer -->





	<!-- Back To Top Button -->
	<section id="back-top">
		<a href="#home" class="scroll t-center white">
			<i class="fa fa-angle-double-up"></i>
		</a>
	</section>
	<!-- End Back To Top Button -->




	<!-- JS Files -->
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/jquery.appear.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/waypoints.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/modernizr-latest.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/SmoothScroll.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/jquery.superslides.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/jquery.isotope.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/jquery.fitvids.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/owl.carousel.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/jquery.mb.YTPlayer.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/plugins.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/google-map.js"></script>
	<!-- Theme Panel -->
	<script type="text/javascript" src="<?php echo base_url() ; ?>theme_panel/theme_panel.js"></script>
	<!-- End JS Files -->
<!-- <script type="text/javascript">
		jQuery('.loginbtn').click(function() {
			var form  = jQuery('.loginform').serialize();

			jQuery.ajax({
			url  	: '<?php echo base_url() ; ?>login/access',
			data 	: form,
			type 	: 'POST',
			dataType : 'Json',
			success	: function(data) {
			if (data.success) {
				jQuery('.loginresult').html('<div class="label label-success">'+data.message+'</div>');

				jQuery('.loginform')[0].reset()	;
				if(data.role == 'employee')
				{
					setTimeout(function() { window.location = '<?php echo base_url() ; ?>search'},1000)
				}else
				{
					setTimeout(function() { window.location = '<?php echo base_url() ; ?>dashboard'},1000)
				}
				
			} else {

				jQuery('.loginresult').html('<div class="label label-danger"><p>'+data.message+'</p></div>');
			}

			},error : function() {
			alert('failure')
			}
			})
		})
		</script>
		
		<script type="text/javascript">
		jQuery('.registerbtn').click(function() {

			var form  = jQuery('.registerform').serialize();
			jQuery.ajax({
			url  	: '<?php echo base_url() ; ?>register/saveregister',
			data 	: form,
			type 	: 'POST',
			dataType : 'Json',
			success	: function(data) {
			if (data.success) {
				
					Swal.fire({
							icon: 'success',
							text: data.message,
							showConfirmButton: true,
							confirmButtonText:'Close',
							confirmButtonClass: 'completeboxclose',

						})

					jQuery('.registerform')[0].reset()	;
			
			
			//setTimeout(function() {window.location = '<?php echo base_url() ; ?>register/thankyou'},1000)
			} else {

				Swal.fire({
							icon: 'error',
							text: data.message,
							showConfirmButton: true,
							confirmButtonText:'Close',
							confirmButtonClass: 'completeboxclose',

						})
			}

			},error : function() {
			alert('failure')
			}
			})
		})
		</script> -->
</body>

</html>