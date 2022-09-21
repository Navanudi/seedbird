<header class="sticky-top pt-0" style="background-color: white;">
	<div class=" container-fluid">
		<div class="row  header-margin">
			<nav class="navbar navbar-expand-lg navbar-light inline-flex" style="margin:1% 0% 1% 0%;">
			<div class="cause">
				<a class="navbar-brand" href="<?php echo siteUrl ?>"><img class="img-fluid" style="width:58%;" src="<?php echo $site->logo(); ?>" alt=""></a>
			</div>

		


				<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
					<div class="offcanvas-header">
						<img src="<?php echo DOMAIN_THEME . 'img/legit.png' ?>" class="img-fluid" style="width:30%;margin-left:2%;" alt="fs">
						<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
					</div>
					<div class="offcanvas-body">
						<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

							<li class="nav-item">
								<a class="nav-link px-4" href="<?php echo siteUrl ?>about">ABOUT</a>
							</li>
							<li class="nav-item">
								<a class="nav-link px-4" href="<?php echo siteUrl ?>projects">PROJECTS</a>
							</li>
							<li class="nav-item">
								<a class="nav-link px-4" href="<?php echo siteUrl ?>get-involved">GET INVOLVED</a>
							</li>
							<li class="nav-item">
								<a class="nav-link px-4" href="<?php echo siteUrl ?>journal">JOURNAL</a>
							</li>
							 
							<li class="nav-item mobink" style="border:1px solid black;border-style:solid">
								<a class="nav-link px-4 chain" href="<?php echo siteUrl ?>donate">DONATE</a>
							</li>
							
						</ul>
					</div>
				</div>


			</nav>


		</div>

	</div>
</header>