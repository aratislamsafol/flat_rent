<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid">
		<a class="navbar-brand nav_brand" href="#">Vara Hobe</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse navbar_left" id="main_nav">
			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> For Sale </a>
					<div class="dropdown-menu dropdown-large">
						<div class="row g-3">
							<div class="col-4">
								<h6 class="title">Residential</h6>
								<ul class="list-unstyled">
									<li><a href="#">Apartment/Flat</a></li>
									<li><a href="#">Independent House </a></li>
									<li><a href="#">Duplex Home </a></li>
									<li><a href="#">Stdio Apartment </a></li>
								</ul>
							</div><!-- end col-3 -->
							<div class="col-4">
								<h6 class="title">Commercial</h6>
								<ul class="list-unstyled">
									<li><a href="#">Office Space</a></li>
									<li><a href="#">Industrial Space </a></li>
									<li><a href="#">Shop Showroom </a></li>
								</ul>
							</div>
							<div class="col-4">
								<h6 class="title">Land Plot</h6>
								<ul class="list-unstyled">
									<li><a href="#">Residential Plot </a></li>
									<li><a href="#">Agricultural Plot </a></li>
									<li><a href="#">Commercial Plot </a></li>
								</ul>
							</div>
							<!-- end col-3 -->
						</div><!-- end row -->
					</div> <!-- dropdown-large.// -->
				</li>

				<li class="nav-item"><a class="nav-link" href="#"> Roommates </a></li>
				<li class="nav-item"><a class="nav-link" href="#"> Developer </a></li>
				<li class="nav-item"><a class="nav-link" href="#"> Jobs </a></li>
				<li class="nav-item dropdown">
					<a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Blog </a>
					<ul class="dropdown-menu dropdown-menu-end">
						<li><a class="dropdown-item" href="#"> English</a></li>
						<li><a class="dropdown-item" href="#"> Bangla </a></li>
					</ul>
				</li>
				<?php if(Session::get('Loggin') == true){ ?>
				<li class="nav-item dropdown ms-2">
					<a class="nav-link  dropdown-toggle bord btn btn-outline-warning" href="#" data-bs-toggle="dropdown"> My account </a>
					<ul class="dropdown-menu dropdown-menu-end">
						<li><a href=""><?php echo Session::get('user_name');?></a></li>
						<li><a class="dropdown-item" href="?Logout=true"> Logout </a></li>
					</ul>
				</li>
				<?php }else{?>
					<li class="nav-item dropdown ms-2">
						<a class="nav-link  dropdown-toggle bord btn btn-outline-warning" href="#" data-bs-toggle="dropdown"> My account </a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#LoginModal" href="#"> Login</a></li>
							<li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Signup"> Create Account </a></li>
						</ul>
					</li>
				<?php }?>


				<li class="nav-item"><a class="nav-link btn btn-outline-primary nav_btn_exc ms-2" href="#"> Posted Add </a></li>
				<li class="nav-item"><a class="nav-link ms-2" href="#" data-bs-toggle="modal" data-bs-target="#search_modal"> <i class="fas fa-search"></i> </a></li>
				
			</ul>
		</div> <!-- navbar-collapse.// -->
	</div> <!-- container-fluid.// -->
</nav>



<?php 
	if(isset($user_login)){
		echo $user_login;
	}
	if(isset($user_signup)){
		echo $user_signup;
	}
?>
