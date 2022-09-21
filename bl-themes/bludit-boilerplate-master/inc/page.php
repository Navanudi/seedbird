<div class="container-fluid">
	<div class="row desk-margin">
		<div class="col-12 col-lg-12 col-sm-12">
			<img alt="Cover Image" class="img-fluid" src="<?php echo $page->coverImage(); ?>" />
		</div>
	</div>
	<div class="row mt-4 mb-3">
		<h2 class="text-center"><?php echo $page->title(); ?></h2>
		<div class="col-12 col-lg-12 col-sm-6">
			<div class="page-margin">
			<?php echo $page->content() ?>
			</div>
			


		</div>

	</div>
	<div class="journal space lap-journal  desk-margin">
		<div class="d-flex">
			<div class="mobcard">
				<h3>JOURNAL</h3>
				<hr class="col-lg-4 col-12 col-sm-4 mb-3 px-3" style="position: relative;border-top:10px;height: 0.3em;background: #F98B00;margin-bottom: 0.5rem;width:5rem;">
				<h2>We Believe In People</h2>
				<p>Read the stories of the incredible people who inspire our work. These are the people who motivate us to create change.</p>
			</div>
			<div class="link" style="margin-left:auto;">
				<a  class="a-link"href="<?php echo siteUrl ?>journal">View all stories</a>
			</div>
		</div>

		<div class="row journal-block d-flex pt-2" style="justify-content:space-between;">
			<?php $pageNumber = 1; ?>
			<?php $numberOfItems = 3; ?>
			<?php $onlyPublished = true; ?>
			<?php $items = $pages->getList($pageNumber, $numberOfItems, $onlyPublished); ?>
			<?php foreach ($items as $key) : ?>
				<?php $page = buildPage($key); ?>
				<div class="col-12 col-sm-4 col-lg-4" style="padding-bottom:2%;">
					<?php if ($page->coverImage()) : ?>
						<img src="<?php echo $page->coverImage(); ?>" alt="" class="img-fluid">
					<?php endif; ?>
					<div class="entry__excerpt bg-white nest">
						<aside class="date">
							<p><?php echo $page->date("m/j/Y"); ?></p>
						</aside>
						<b><?php echo $page->title(); ?></b>
						<div class="panel-heading">
							<?php echo $page->contentBreak() ?>
							<?php if ($page->readMore()) : ?>
								<div class="readmore mt-5">
									<a class="more-link underline-link a-link" href="<?php echo $page->permalink() ?>" role="button"><?php echo $language->get('Read More'); ?>
										</button></a><br>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>

</div>	
	