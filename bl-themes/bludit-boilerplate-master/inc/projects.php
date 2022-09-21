<div class="container-fluid">
	<div class="row desk-margin">
		<div class="col-12 col-sm-12 col-lg-12">
			<img src="<?php echo $page->coverImage() ?>" class="img-fluid homecard" alt="cover">
			<div class="mobzcard">
				<div class="mobcard lap-zimg deskz-content">
					<h4 class="text-start">Projects Through People</h4>
					<hr class="col-lg-4 col-12 col-sm-4 mb-3 px-3" style="position: relative;border-top:10px;height: 0.3em;background:#f8a88b;margin-bottom: 0.5rem;width:5rem;">
					<div class="homed">
						<p style="color:white;">We want you to get to know the people you’re helping. Meet the people we work with, and learn about our projects through their eyes.</p>
					</div>					
				</div>
			</div>
		</div>
	</div>
	<div class="row d-lg-none d-sm-block">
		<div class="col-12 col-sm-12 col-lg-12">
			<div class="mobcard"style=" background:black;color:white;">
				<h4 class="text-start" style="font-size:15px;margin-top:2%;">Projects Through People</h4>
				<hr class="col-lg-4 col-12 col-sm-4 mb-3 px-3" style="position: relative;border-top:10px;height: 0.3em;background:#f8a88b;margin-bottom: 0.5rem;width:5rem;">
				<div class="homed">
					<p style="color:white;padding-bottom:10%;">We want you to get to know the people you’re helping. Meet the people we work with, and learn about our projects through their eyes.</p>
				</div>		
			</div>

		</div>
				
	</div>

	<div class="row kite mt-lg-5 lap-content desk-margin mob-content">
		<div class="col-lg-12 col-sm-12 col-12 mt-4 mb-4" style="width:37rem">
			<h4>OVERVIEW</h4>
			<hr class="col-lg-4 col-12 col-sm-4 mb-3" style="position: relative;border-top:10px;height: 0.3em;background: #F98B00;margin-bottom: 0.5rem;width:5rem;">
			<span class="">
				<?php echo $page->content(); ?>
			</span>

		</div>
	</div>
	<div class="row mt-2 mb-3 kite lap-content desk-margin">
		<div class="col-lg-12 text-start mob-tags">
			<section class="article-tags">
				<?php // Returns an array of all tags
				$items = getCategories(); ?>

				<div class="category" style="overflow:auto;white-space:nowrap;">
					<?php foreach ($items as $category) { ?>
						<span style="display:inline-block;" class="p-2" id="Category"><a style="color:black; font-size:15px; text-decoration:none;" href="<?php echo $category->permalink(); ?>" rel="category"><?php echo $category->name(); ?></a></span><?php } ?>
						<!--<hr class="col-lg-4 col-12 col-sm-4 " style="position: relative; border-top: 1px;height: 0.1em; background: #F98B00;margin-top:-5px; margin-left:0.5em; width:7rem;">-->
						
				</div>
			</section>
		</div>
	</div>

	<div class="row d-flex lap-project projects-list kite bg-white mb-5 desk-margin">
		<?php $children = $page->children(); ?>
		<?php foreach ($children as $child) : ?>

			<div class="col-lg-4 g-4">

				<div>
					<?php if ($child->coverImage()) : ?>
						<img src=" <?php echo $child->coverImage(); ?>" style="background-size:cover;" alt="" class="img-fluid">
					<?php endif; ?>
				</div>

				<div class="nest" style="background-color:#f1f1f1;">
					<h4><?php echo $child->title(); ?></h4>
					<div class="panel-heading">
						<?php echo $child->contentBreak() ?>
						<div class="mt-5">
						<?php if ($child->readMore()) : ?>
							<a  class="a-link" href="<?php echo $child->permalink() ?>"><br>
								<?php echo $language->get('Learn more') ?>
							</a>
						<?php endif; ?>
						</div>
						

					</div>


				</div>

			</div>
		<?php endforeach; ?>
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