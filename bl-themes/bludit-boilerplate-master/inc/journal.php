<div class="container-fluid">
	<div class="row desk-margin">
		<div class="col-12 col-sm-12 col-lg-12">
			<div class="school">
				<img src="<?php echo DOMAIN_THEME . 'img/Seedbird_3 (1).jpg' ?>" class="img-fluid homecard" alt="fs">
				<div class="mobzcard">
					<div class="mobcard lap-zimg deskz-content">
						<h4 class="text-start">We Believe In People</h4>
						<hr class="col-lg-4 col-12 col-sm-4 mb-3 px-3" style="position: relative;border-top:10px;height: 0.3em;background:#f8a88b;margin-bottom: 0.5rem;width:5rem;">
						<div class="homed">
							<p style="color:white;">Read the stories of the incredible people who inspire our work.<br>
							These are the people who motivate us to create change</p>
						</div>					
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row d-lg-none d-sm-block">
		<div class="col-12 col-sm-12 col-lg-12">
			<div class="mobcard"style=" background:black;color:white;">
				<h4 class="text-start" style="font-size:15px;margin-top:2%;">We Believe In People</h4>
				<hr class="col-lg-4 col-12 col-sm-4 mb-3 px-3" style="position: relative;border-top:10px;height: 0.3em;background:#f8a88b;margin-bottom: 0.5rem;width:5rem;">
				<div class="homed">
					<p style="color:white;padding-bottom:10%;">Read the stories of the incredible people who inspire our work.
				These are the people who motivate us to create change.</p>
				</div>		
			</div>

		</div>
				
	</div>

	<div class="row justify-content-center page-margin mob-tags lap-content">
		<div class=" col-12 col-lg-12 text-center">
			<section class="article-tags">
				<?php // Returns an array of all tags
				$items = getTags(); ?>

				<div class="tags text-start" style="overflow:auto;white-space:nowrap;">
					<?php foreach ($items as $tag) { ?>
						<span style="display:inline-block; color:black;" class="p-2" id="Tags"><a style="color:black; font-size:15px; text-decoration:none;"  href="<?php echo $tag->permalink(); ?>" rel="tag"><?php echo $tag->name(); ?></a></span><?php } ?>
				</div>
			</section>
		</div>
	</div>

	<div class="row">
		<article>
			<?php $blog_posts = $pages->getList(1, -1, true, false); ?>
			<section class="article-meta">
				<!--<h1 class="page-title">
						<?php
						// echo $L->get( 'ghhe' );
						?>
					</h1>-->
			</section>

			<section class="article-content">
				<section class="article-list ">
					<?php foreach ($blog_posts as $page) : ?>
						<?php $page = new Page($page); ?>

						<div class="row px-2 list-article mb-5 desk-margin lap-header">
							<div class="col-12 col-lg-6 col-sm-8 text-end gx-0">
								<?php if ($page->coverImage()) : ?>
									<img src=" <?php echo $page->coverImage(); ?>" alt="" class="img-fluid">
								<?php endif; ?>
							</div>

							<div class="col-12 col-lg-6 col-sm-4 article-name text-start mt-3 gy-4">
								<div class="journal-card mob-content lap-jcontent">
									<aside class="article-meta"><time><?php echo $page->date("m/j/Y"); ?></time></aside>
									<hr class="col-lg-4 col-12 col-sm-4" style="position: relative;border-top:10px;height: 3px;background: #F98B00;margin-bottom: 0.5rem;width:5rem;">
									<h2><?php echo $page->title(); ?></h2>
									<div class="">
										<div class="entry__excerpt">
											<?php echo $page->contentBreak() ?>
										</div>
										<?php if ($page->readMore()) : ?><br>
											<a style=""  class="pt-4 a-link" href="<?php echo $page->permalink() ?>">
												<?php echo $language->get('Read more') ?>
											</a>
										<?php endif; ?>
									</div>
								</div>

							</div>
						</div>
						<?php Theme::plugins('pageEnd') ?>
					<?php endforeach; ?>
				</section>
			</section>
		</article>
	</div>

	<!-- Pagination -->
	<?php if (Paginator::numberOfPages() > 1) : ?>
		<nav class="paginator">
			<ul class="pagination flex-wrap">

				<!-- Previous button -->
				<?php if (Paginator::showPrev()) : ?>
					<li class="page-item mr-2">
						<a class="page-link" href="<?php echo Paginator::previousPageUrl() ?>" tabindex="-1">&#9664; <?php echo $L->get('Previous'); ?></a>
					</li>
				<?php endif; ?>

				<!-- Home button -->
				<li class="page-item <?php if (Paginator::currentPage() == 1) echo 'disabled' ?>">
					<a class="page-link" href="<?php echo Theme::siteUrl() ?>">Home</a>
				</li>

				<!-- Next button -->
				<?php if (Paginator::showNext()) : ?>
					<li class="page-item ml-2">
						<a class="page-link" href="<?php echo Paginator::nextPageUrl() ?>"><?php echo $L->get('Next'); ?> &#9658;</a>
					</li>
				<?php endif; ?>

			</ul>
		</nav>
	<?php endif ?>
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