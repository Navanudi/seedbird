<footer>
	<?php Theme::plugins('siteBodyEnd') ?>

	<div class="container-fluid kite lap-content desk-margin">
		<div class="row gy-5 mt-3 mb-lg-5 d-flex mob-footer" style="width:88%;">
			<div class="col-12 col-sm-4 col-lg-4 text-start footercard">
				<h5>IMPACT FOR YOUR INBOX</h5>
				<p class="mob-donateflex">Sign up to learn about the impact you're making and the people whose lives you're changing.</p>
				<form action=""><input type="email" name="email" value="" style="width: 72%;" class="form-control form-control-lg">
					<button type="submit" class="hover-item btn btn-outline-dark btn-lg btn-block ftrbtn mt-2" style="background-color:black; color:white;width:72%;" name="button">SIGN UP FOR OUR NEWSLETTER</button>
					
				</form>
				<div class="submit mt-1">

				</div>
			</div>
			<div class="col-12 col-sm-4 col-lg-4 text-start address">
				<div class="contact ms-lg-5">
					<h3>Contact Us</h3>
					<div  style="padding-left:2%;font-size:14px;">
						<span style="color:black;">seedbirdassociation@gmail.com</span><br>
						<tel>+919494942244</tel><br>
						<tel>+919966643666</tel>
					</div>
					
				</div>

				<div class="adress mt-4 ms-lg-5">
					<h3>ADDRESS</h3>
					<div style="padding-left:2%;font-size:14px;">
						Door No:29-14-32<br>Flat No:505 Sowbaghya Heights,<br>Prakasam Road,<br>Suryarao Pet,<br>
						Vijayawada, A.P, PIN-520007.
					</div>
						
				</div>
				<div class="social mt-4 ms-lg-5">
					<h3>FOLLOW US</h3>
					<div class="d-flex" style="padding-left:2%;">
						<div class="px-2"><a href="https://twitter.com/SeedBird_"><h1 style="font-size:1.5rem;"><i class="bi bi-twitter"></i></h1></a></div>
						<div class="px-2"><a href="https://www.instagram.com/SeedBird_"><h1 style="font-size:1.5rem;"><i class="bi bi-instagram"></i></h1></a></div>
						<div class="px-2"><a href="https://www.facebook.com/SeedBirdAssociation/"><h1 style="font-size:1.5rem;"><i class="bi bi-facebook"></i></h1></a></div>

					</div>
					<section class="social">
						<?php foreach (Theme::socialNetworks() as $key => $label) : ?>
							<a class="footerlink" href="<?php echo $site->{$key}(); ?>"><?php echo $label; ?></a> /
						<?php endforeach; ?>
					</section>
				</div>
			</div>
			<div class="col-12 col-sm-4 col-lg-4 footercard text-start">
				<h3>OTHER RESOURCES</h3>
				<a class="footerlink" href="#">Annual Report</a><br>
				<a class="footerlink" href="#">Privacy Policy</a>


				<hr class="col-3 col-sm-3 col-lg-3" style="height:2px;width:30%;color:#9d6f1c61;">

			</div>

		</div>

	</div>
	<div class="row" style="background-color:#f1f1f1;">
		<div class="col-lg-12">
			<?php echo $site->footer(); ?>
		</div>
	</div>
	
	

</footer>

	<div class="row d-flex" style="background-color:#eaedee;margin: 0% 4% 0% 4%;
    padding: 0% 2% 0% 2%;">
		<div class="col-12 col-sm-12 col-lg-6 text-start">
			<div class="d-inline-flex mt-3">
				<div class="px-2 mt-2">
					
				<img src="<?php echo DOMAIN_THEME . 'img/footerlogo.png' ?>" class="img-fluid" width="35px"  alt="seh">		
				</div>
				<div>
					<h5 style="text-align:justify;">
						<p>&#169; SeedBird Association 2021.</p>
						<span style="font-size:14px;">All Rights Reserved.</span>
					
					</h5>			
				</div>
				
				
			</div>

		</div>	
		<div class=" col-12 col-sm-12 col-lg-6 text-lg-end">
			<p class="text-dark" style="font-size:14px;">
				Your donations are tax exempted under 80G of the
				Indian Income Tax Act<br>
				Corporate Identification Number U85310AP2019NPL113541.
			</p>
			<p>
			
			</p>
							
		</div>
	</div>