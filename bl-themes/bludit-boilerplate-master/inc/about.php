<div class="container-fluid">
	<div class="row desk-margin mb-lg-5">
		<div class="col-12 col-sm-12 col-lg-12">
			<img src="<?php echo $page->coverImage() ?>" class="img-fluid homecard" alt="cover">
			<div class="mobzcard">
				<div class="mobcard lap-zimg deskz-content">
					<h4 class="text-start">We Are Seed Bird</h4>
					<hr class="col-lg-4 col-12 col-sm-4 mb-3 px-3" style="position: relative;border-top:10px;height: 0.3em;background:#f8a88b;margin-bottom: 0.5rem;width:5rem;">
					<div class="homed">
						<p style="color:white;">We are committed to creating an organic environment for<br> education & farming as we believe life is not linear, it is organic.</p>
					</div>					
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row d-lg-none d-sm-block">
	<div class="col-12 col-sm-12 col-lg-12">
		<div class="mobcard"style=" background:black;color:white;">
			<h4 class="text-start" style="font-size:15px;margin-top:2%;">We Are Seed Bird</h4>
			<hr class="col-lg-4 col-12 col-sm-4 mb-3 px-3" style="position: relative;border-top:10px;height: 0.3em;background:#f8a88b;margin-bottom: 0.5rem;width:5rem;">
			<div class="homed">
				<p style="color:white;padding-bottom:10%;">We are committed to creating an organic environment for education & farming as we believe life is not linear, it is organic.</p>
			</div>		
		</div>

	</div>
				
</div>
<div class="container-fluid">
	<div class="row lap-content">
		<section class="article-content">
			<section class="article-list">
				<?php $children = $page->children(); ?>
				<?php foreach ($children as $child) : ?>
					<article class="row list-article gy-3 gx-0 d-flex desk-margin mb-lg-5 mt-lg-3" style="justify-content:space-between;">
						<div class="col-lg-4 col-12 col-sm-6 text-lg-start text-start text-dark">
							<div class="about-card mob-content about-child">
								<hr class="col-lg-4 col-12 col-sm-4 mb-3 px-3" style="position: relative;border-top:10px;height: 0.3em;background: #F98B00;margin-bottom: 0.5rem;width:5rem;">
								<h2><?php echo $child->title(); ?></h2>
								<p>
									<?php echo $child->contentBreak() ?>
								</p>
								
								<?php if ($child->readMore()) : ?>
									<div class="readmore">
										<a class="" href="<?php echo $child->permalink() ?>" role="button"><button style="width:100%;height:auto;padding:4% 0% 4% 0%;" class="hover-item btn btn-outline-dark btn-lg btn-block ftrbtn" type="button" name="button"><?php echo $language->get('LEARN MORE'); ?>
											</button></a><br>
									</div>
								<?php endif; ?>

							</div>
						</div>
						<div class="col-12 col-lg-8 col-sm-6">
							<div class="">
								<?php if ($child->coverImage()) : ?>
									<img class="img-fluid about-img" src=" <?php echo $child->coverImage(); ?>" alt="">
								<?php endif; ?>
							</div>


						</div>


					</article> <br>
					<?php Theme::plugins('pageEnd') ?>
				<?php endforeach; ?>
			</section>
		</section>


	</div>
	<div class="Donate lap-journal desk-margin" style="background-color:hsla(16,89%,76%,.6);">
		<div class="d-flex" style="justify-content:space-between;">
			<div class="mobcard">
				<h3>DONATE</h3>
				<hr class="col-lg-4 col-12 col-sm-4 mb-3 px-3" style="position: relative;border-top:10px;height: 0.3em;background:#ffffff;margin-bottom: 0.5rem;width:5rem;">
			</div>
		</div>
		<div class="row mt-3">
			<div class=" col-12 col-sm-4 col-lg-4 p-4">
				<div class="bg-white mb-3" style="text-align:initial;padding: 1.2em;">
					<h5 style="font-weight: bolder;">We ask humbly to support our work</h5>
					<p>Here we're asking you to help support Seed Bird. We're a nonprofit that relies on support from people like you.</p>
					<p>	If everyone reading this gives Rs500 monthly, Seed Bird can continue to bring hope to our children, teachers & farmers in need forever.
					</p>

					<p>Your donations are tax exempted under 80G of the Indian Income Tax Act.</p>
					<hr style="width:20rem;background-color:black;">
					<div class="d-flex">
						<div class="mt-4 px-3">
							<h1><i class="bi bi-lock-fill"></i></h1>
						</div>
						<div class="px-3">
							<p>
								Donating to Seed Bird through <span><img src="<?php echo DOMAIN_THEME . 'img/razor.png' ?>" alt="" width="80px"></span>is safe, secure, and easy with many
								payment options to choose from
							</p>
						</div>

					</div>
					<div class="text-center">
						<a href="#">View other ways to donate</a>
					</div>
					
					
				</div>

			</div>
			<div class="col-12 col-lg-4 col-sm-4 p-4">
				<div>
					<h5 style="text-align: center; font-weight:bolder;">What can my donation provide ?</h5>
					<div class="mt-4" style="margin-left:2%;">
					<div style="display:flex; justify-content:space-between;border-bottom: 2px white;border-bottom-style: double;width:76%;padding-left: 10%;margin:0% 0% 2% 10%;">
						<div style="display:inline-block;margin-top:2%;font-weight:bold;">₹500</div>
						<div style="display:inline-block;margin-top:2%;">One-Time</div>
						<div style="display:inline-block;">
							<div class="text-center"><i class="bi bi-chevron-right" style="position:absolute;font-size:1.5rem;"></i>
								<form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_JsXNAETjIcoFhK" async> </script> </form>
							</div>
						</div>
							


					</div>

					</div>
					
					<div style="display:flex; justify-content:space-between;border-bottom: 2px white;border-bottom-style: double;width:76%;padding-left: 10%;margin:0% 0% 2% 10%;">
						<div style="display:inline-block;margin-top:2%;font-weight:bold;">₹1000</div>
						<div style="display:inline-block;margin-top:2%;">One-Time</div>
						<div style="display:inline-block;">
							<div class="text-center"><i class="bi bi-chevron-right" style="position:absolute;font-size:1.5rem;"></i>
							<form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_JsXardlCl97Flc" async> </script> </form>
							</div>
						</div>
							


					</div>
					<div style="display:flex; justify-content:space-between;border-bottom: 2px white;border-bottom-style: double;width:76%;padding-left: 10%;margin:0% 0% 2% 10%;">
						<div style="display:inline-block;margin-top:2%;font-weight:bold;">₹2000</div>
						<div style="display:inline-block;margin-top:2%;">One-Time</div>
						<div style="display:inline-block;">
							<div class="text-center"><i class="bi bi-chevron-right" style="position:absolute;font-size:1.5rem;"></i>
							<form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_JsbPwItDnXSMZM" async> </script> </form>
							</div>
						</div>
							


					</div>
					<div style="display:flex; justify-content:space-between;border-bottom: 2px white;border-bottom-style: double;width:76%;padding-left: 10%;margin:0% 0% 2% 10%;">
						<div style="display:inline-block;margin-top:2%;font-weight:bold;">₹5000</div>
						<div style="display:inline-block;margin-top:2%;">One-Time</div>
						<div style="display:inline-block;">
							<div class="text-center"><i class="bi bi-chevron-right" style="position:absolute;font-size:1.5rem;"></i>
								<form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_JsbYF7gMz8jvYq" async> </script> </form>
							</div>
						</div>
							


					</div>
					<div style="display:flex; justify-content:space-between;border-bottom: 2px white;border-bottom-style: double;width:76%;padding-left: 10%;margin:0% 0% 2% 10%;">
						<div style="display:inline-block;margin-top:2%;font-weight:bold;">₹10000</div>
						<div style="display:inline-block;margin-top:2%;">One-Time</div>
						<div style="display:inline-block;">
							<div class="text-center"><i class="bi bi-chevron-right" style="position:absolute;font-size:1.5rem;"></i>
								<form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_JsbaRWq19itXQq" async> </script> </form>
							</div>
						</div>
							


					</div>
					<div style="display:flex; justify-content:space-between;border-bottom: 2px white;border-bottom-style: double;width:76%;padding-left: 10%;margin:0% 0% 2% 10%;">
						<div style="display:inline-block;margin-top:2%;font-weight:bold;">₹20000</div>
						<div style="display:inline-block;margin-top:2%;">One-Time</div>
						<div style="display:inline-block;">
							<div class="text-center"><i class="bi bi-chevron-right" style="position:absolute;font-size:1.5rem;"></i>
							<form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Jsbci75v5ineEy" async></script></form>
							</div>
						</div>
							
					</div>
					<div style="display:flex; justify-content:space-between;width:76%;padding-left: 10%;margin:0% 0% 2% 10%;">
						<div style="display:inline-block;font-weight:bold;">Other Amount</div>
						<div style="display:inline-block;margin-top:4%;width:47%;">One-Time</div>
						<div style="display:inline-block;">
							<div class="text-center"><i class="bi bi-chevron-right" style="position:absolute;font-size:1.5rem;"></i>
							<form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_KAbCtJ9fuNYTYB" async> </script> </form>
							</div>
						</div>
							
					</div>
							

				</div>

			</div>	
				<div class=" col-12 col-lg-4 col-sm-4 p-4">
					<div class="">
						<h5 style="text-align: center;font-weight: bolder;">Where does your donation go?</h5>
						<ul style="margin-left: 5%;font-size: 14px;">
							<b>Education</b>
							<li style="color:black">To create & sustain a learning centre for underprivileged children to learn foundational literacy & numeracy through experiential learning for free.</li>
							<li style="color:black">To train teachers in experiential learning.</li>
							<li style="color:black">To create and sustain an experiential learning school for underprivileged children.</li>
						</ul>
						<ul style="margin-left: 5%;font-size: 14px;">
							<b>Agriculture</b>
							<li style="color:black">To create & sustain indigenous seed banks & seed libraries to protect and save plant genetic diversity.</li>
							<li style="color:black">To create an atmosphere for children to learn natural farming in schools from sowing to saving the seed.</li>
							<li style="color:black">To train farmers to convert to natural farming and sustain it.</li>
						</ul>

					</div>


				</div>
			</div>
		</div>
	

	</div>

</div>