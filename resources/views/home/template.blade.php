<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="/home_template/css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="/home_template/css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="/home_template/css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="/home_template/css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="/home_template/css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="/home_template/css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="/" class="logo">
									<img src="/home_template/img/logo.png" alt="">
								</a></li>
					</ul>
					<ul class="header-links pull-right">
						@if(auth()->check())
							<li><a href="/admin"><i class="fa fa-user-o"></i> Admin Page</a></li>
						@else
							<li><a href="/admin"><i class="fa fa-user-o"></i> Login</a></li>
						@endif
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->
		</header>
		<!-- /HEADER -->

		@yield('content')

		<!-- FOOTER -->
		<footer id="footer">

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="/home_template/js/jquery.min.js"></script>
		<script src="/home_template/js/bootstrap.min.js"></script>
		<script src="/home_template/js/slick.min.js"></script>
		<script src="/home_template/js/nouislider.min.js"></script>
		<script src="/home_template/js/jquery.zoom.min.js"></script>
		<script src="/home_template/js/main.js"></script>

		@yield('js')

	</body>
</html>
