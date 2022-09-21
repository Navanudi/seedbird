<div class="container-fluid">
	<div class="row desk-margin">
		<div class="col-12 col-sm-12 col-lg-12">
			<img src="<?php echo DOMAIN_THEME . 'img/court.jpg' ?>" class="img-fluid" alt="cover">
		</div>
	</div>
	<div class="row kite mt-lg-5 desk-margin lap-content mobcard">
		<div class="col-lg-12 col-sm-12 col-12">
			<h4>overview</h4>
			<hr class="col-lg-4 col-12 col-sm-4 mb-3" style="position: relative;border-top:10px;height: 0.3em;background: #F98B00;margin-bottom: 0.5rem;width:5rem;">
			<h4>Projects Through People</h4>
			<p class="pgraph">We are committed to creating an organic environment for education & farming as we believe life is not linear, it is organic.Our programs are focused on children, teachers, farmers & farming communities. We empower teachers to understand how children learn and help them to reorganise school as a place to experience the real world. Farmers go back to natural farming to save indigenous seeds and soil to flourish.
			</p>

		</div>
	</div>
	<div class="row mt-3 row kite desk-margin lap-content mobcard"">
		<?php
		$categories = new Categories();
		$category_key = $url->slug();
		$category = new Category($category_key);
		?>
		<div class="col-lg-12 col-12 text-center">
			<section class="article-tags">
				<?php // Returns an array of all categories
				$items = getCategories(); ?>

				<div class="categories text-start" style="overflow:auto;white-space:nowrap;">
					<?php foreach ($items as $category) { ?>
						<span style="display:inline-block" class="p-2" id="Category"><a style="color:black ;" href="<?php echo $category->permalink(); ?>" rel="category"><?php echo $category->name(); ?></a></span><?php } ?>
				</div>
			</section>
		</div>
	</div>

	<div class="row desk-margin d-flex projects-list kite bg-white lap-project mb-5">
		<?php $category_key = $category->name(); ?>
		<?php $category = getCategory($categoryKey); ?>
		<?php foreach ($category->pages() as $pageKey) : ?>
			<div class="col-lg-4 col-md-4 g-4">
				<div>
					<?php $page = new Page($pageKey); ?>
					<?php if ($page->coverImage()) : ?>
						<img src=" <?php echo $page->coverImage(); ?>" style="background-size:cover;" alt="" class="img-fluid">
					<?php endif; ?>
				</div>
				
				<div class="nest" style="background-color:#f1f1f1;">
					<h4><?php echo $page->title(); ?></h4>
					<div class="panel-heading">
						<?php echo $page->contentBreak() ?>
						<div class="mt-5">
							<?php if ($page->readMore()) : ?>
								<a class="a-link" href="<?php echo $page->permalink() ?>"><br>
									<?php echo $language->get('Learn more') ?>
								</a>
							<?php endif; ?>
						</div>
					
					</div>

				</div>
			</div>

		<?php endforeach; ?>
	</div>
	


</div>