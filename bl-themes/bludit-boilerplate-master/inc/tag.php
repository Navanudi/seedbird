<div class="container-fluid">
	<div class="row desk-margin">
		<div class="col-12 col-lg-12 col-sm-12">
			<img src="<?php echo DOMAIN_THEME . 'img/education_2.jpg' ?>" class="img-fluid" alt="cover">
		</div>
	</div>

	<div class="row mt-3 mb-4 justify-content-center tag-margin">
		<div class="col-lg-12 text-center">
			<section class="article-tags">
				<?php // Returns an array of all tags
				$items = getTags(); ?>

				<div class="tags text-start" style="overflow:auto;white-space:nowrap;">
				<?php foreach ($items as $tag) { ?>
						<span style="display:inline-block" class="p-2" id="Tag"><a style="color:black; font-size:15px; text-decoration:none;"  href="<?php echo $tag->permalink(); ?>" rel="tag"><?php echo $tag->name(); ?></a></span><?php } ?>
				</div>
			</section>
		</div>
	</div>


	<?php $tags = new Tags(); ?>
	<?php $tagKey = $url->slug();
	$tag = new Tag($tagKey); ?>
	<?php $tag_key = $tag->name(); ?>
	<?php $tag = getTag($tagKey); ?>
	<?php foreach ($tag->pages() as $page_key) : ?>


		<div class="row kite list-article mt-3 mb-4">
			<div class="col-12 col-lg-6 col-sm-8 text-end">
				<?php if ($page->coverImage()) : ?>
					<img style="width:530px;height:auto;" src=" <?php echo $page->coverImage(); ?>" alt="" class="img-fluid">
				<?php endif; ?>
			</div>

			<div class="col-12 col-lg-6 col-sm-4 article-name text-start mt-3">
				<div class="journal-card">
					<section class="article-list">
						<?php $page = new Page($page_key); ?>
						<article class="list-article<?php if ($page->custom('important'))
						 {echo ' important';} ?>">
							<aside class="article-meta"><time datetime='<?php echo $page->date('Y-m-d H:i'); ?>'><?php echo $page->date('F jS Y'); ?></time></aside>
						</article>

					</section>
					<hr class="col-lg-4 col-12 col-sm-4 mb-3 px-3" style="position: relative;border-top:10px;height: 0.3em;background: #F98B00;margin-bottom: 0.5rem;width:5rem;">
					<article>
						<section class="article-meta">
							<h2 class="page-title">
								<?php echo $page->title(); ?></h2>
							<?php echo $page->contentBreak() ?>
							<?php if ($page->readMore()) : ?>
								<div style="color:black; font-size:15px; text-decoration:none;" >
								<a class="a-link"  href="<?php echo $page->permalink() ?>"><br>
									<?php echo $language->get('Learn more') ?>
								</a>
								</div>
								
							<?php endif; ?>
						</section>

					</article>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
	<div class="Donate space" style="background-color:hsla(16,89%,76%,.6);">
		<div class="d-flex mobcard" style="justify-content:space-between;">
			<div class="">
				<h3>DONATE</h3>
				<hr class="col-lg-4 col-12 col-sm-4 mb-3 px-3" style="position: relative;border-top:10px;height: 0.3em;background: #02b0ff;margin-bottom: 0.5rem;width:5rem;">
			</div>
		</div>
		<div class="row mt-3">
			<div class=" col-12 col-sm-4 col-lg-4 p-3">
				<div class="bg-white mb-3" style="text-align:initial;padding: 1.2em;">
					<h2>We ask humbly to support our work</h2>
					<p>Here we're asking you to help support Seed Bird. We're a nonprofit that relies on support from people like you.<br>If everyone reading this gives Rs500 monthly, Seed Bird can continue to bring hope to our children, teachers & farmers in need forever.
					</p>

					<p>Your donations are tax exempted under 80G of the Indian Income Tax Act.</p>
				</div>

			</div>
			<div class="col-12 col-lg-4 col-sm-4 p-3">
				<nav>
					<div class="nav nav-tabs" id="nav-tab" role="tablist">
						<button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">MONTHLY</button>
						<!--<button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">ONE TIME</button>-->
					</div>
				</nav>
				<div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
						<div class="mt-3 row paybut">
							<div class="col-2 text-start p-2"><b>INR 500</b></div>
							<div class="col-8 text-start p-2"><span>General</span></div>
							<div class="col-2 p-2">
								<div class="text-center"><i class="bi bi-arrow-right-short" style="position:absolute;font-size:2rem;"></i>
									<form>
										<script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Jsbci75v5ineEy" async></script>
									</form>
								</div>
							</div>
						</div>
						<div class="mt-3 row paybut">
							<div class="col-2 text-start p-2"><b>INR 1000</b></div>
							<div class="col-8 text-start p-2"><span>Educating a Child</span></div>
							<div class="col-2 p-2">
								<div class="text-center"><i class="bi bi-arrow-right-short" style="position:absolute;font-size:2rem;"></i>
									<form>
										<script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Jsbci75v5ineEy" async></script>
									</form>
								</div>
							</div>
						</div>
						<div class="mt-3 row paybut">
							<div class="col-2 text-start p-2"><b>INR 2000</b></div>
							<div class="col-8 text-start p-2"><span>Training a Teacher</span></div>
							<div class="col-2 p-2">
								<div class="text-center"><i class="bi bi-arrow-right-short" style="position:absolute;font-size:2rem;"></i>
									<form>
										<script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Jsbci75v5ineEy" async></script>
									</form>
								</div>
							</div>
						</div>
						<div class="mt-3 row paybut">
							<div class="col-2 text-start p-2"><b>INR 5000</b></div>
							<div class="col-8 text-start p-2"><span>Reserch for Experiential Learning</span></div>
							<div class="col-2 p-2">
								<div class="text-center"><i class="bi bi-arrow-right-short" style="position:absolute;font-size:2rem;"></i>
									<form>
										<script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Jsbci75v5ineEy" async></script>
									</form>
								</div>
							</div>
						</div>
						<div class="mt-3 row paybut">
							<div class="col-2 text-start p-2"><b>INR 10000</b></div>
							<div class="col-8 text-start p-2"><span>Training and Employing a Teacher</span></div>
							<div class="col-2 p-2">
								<div class="text-center"><i class="bi bi-arrow-right-short" style="position:absolute;font-size:2rem;"></i>
									<form>
										<script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Jsbci75v5ineEy" async></script>
									</form>
								</div>
							</div>
						</div>
						<div class="mt-3 row paybut">
							<div class="col-2 text-start p-2"><b>INR 20000</b></div>
							<div class="col-8 text-start p-2"><span>Creating Atmosphere for experiential learning</span></div>
							<div class="col-2 p-2">
								<div class="text-center"><i class="bi bi-arrow-right-short" style="position:absolute;font-size:2rem;"></i>
									<form>
										<script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Jsbci75v5ineEy" async></script>
									</form>
								</div>
							</div>
						</div>

					</div>
					<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
						<div class="mt-3 row paybut">
							<div class="col-2 text-start p-2"><b>INR 500</b></div>
							<div class="col-8 text-start p-2"><span>General</span></div>
							<div class="col-2 p-2">
								<div class="text-center"><i class="bi bi-arrow-right-short" style="position:absolute;font-size:2rem;"></i>
									<form>
										<script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Jsbci75v5ineEy" async></script>
									</form>
								</div>
							</div>
						</div>
						<div class="mt-3 row paybut">
							<div class="col-2 text-start p-2"><b>INR 1000</b></div>
							<div class="col-8 text-start p-2"><span>Educating a Child</span></div>
							<div class="col-2 p-2">
								<div class="text-center"><i class="bi bi-arrow-right-short" style="position:absolute;font-size:2rem;"></i>
									<form>
										<script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Jsbci75v5ineEy" async></script>
									</form>
								</div>
							</div>
						</div>
						<div class="mt-3 row paybut">
							<div class="col-2 text-start p-2"><b>INR 2000</b></div>
							<div class="col-8 text-start p-2"><span>Training a Teacher</span></div>
							<div class="col-2 p-2">
								<div class="text-center"><i class="bi bi-arrow-right-short" style="position:absolute;font-size:2rem;"></i>
									<form>
										<script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Jsbci75v5ineEy" async></script>
									</form>
								</div>
							</div>
						</div>
						<div class="mt-3 row paybut">
							<div class="col-2 text-start p-2"><b>INR 5000</b></div>
							<div class="col-8 text-start p-2"><span>Reserch for Experiential Learning</span></div>
							<div class="col-2 p-2">
								<div class="text-center"><i class="bi bi-arrow-right-short" style="position:absolute;font-size:2rem;"></i>
									<form>
										<script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Jsbci75v5ineEy" async></script>
									</form>
								</div>
							</div>
						</div>
						<div class="mt-3 row paybut">
							<div class="col-2 text-start p-2"><b>INR 10000</b></div>
							<div class="col-8 text-start p-2"><span>Training and Employing a Teacher</span></div>
							<div class="col-2 p-2">
								<div class="text-center"><i class="bi bi-arrow-right-short" style="position:absolute;font-size:2rem;"></i>
									<form>
										<script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Jsbci75v5ineEy" async></script>
									</form>
								</div>
							</div>
						</div>
						<div class="mt-3 row paybut">
							<div class="col-2 text-start p-2"><b>INR 20000</b></div>
							<div class="col-8 text-start p-2"><span>Creating Atmosphere for experiential learning</span></div>
							<div class="col-2 p-2">
								<div class="text-center"><i class="bi bi-arrow-right-short" style="position:absolute;font-size:2rem;"></i>
									<form>
										<script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Jsbci75v5ineEy" async></script>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class=" col-12 col-lg-4 col-sm-4 p-3">
				<div class="">
					<h5>Where does your donation go?</h5>
					<ul>
						<b>Education</b>
						<li style="color:black">To create & sustain a learning centre for underprivileged children to learn foundational literacy & numeracy through experiential learning for free.</li>
						<li style="color:black">To train teachers in experiential learning.</li>
						<li style="color:black">To create and sustain an experiential learning school for underprivileged children.</li>
					</ul>
					<ul>
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