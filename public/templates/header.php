<html>
<head>
	<title>AOD | Squad Management</title>

	<meta name="viewport" content="width=device-width, initial-scale=.0, maximum-scale=1.0, user-scalable=no">
	
	<script src="/public/js/jquery-2.1.1.min.js"></script>
	<script src="/public/js/jquery-ui.min.js"></script>
	<script src="/public/js/jquery.easing.min.js"></script>

	<script src="/public/js/bootstrap.min.js"></script>
	<script src="/public/js/jquery.dataTables.min.js"></script>
	<script src="/public/js/dataTables.bootstrap.js"></script>

	<link rel="stylesheet" type="text/css" href="/public/css/style.css">
	<link rel="stylesheet" type="text/css" href="/public/css/cyborg.min.css">				

	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">	
	<link href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css" rel="stylesheet">

</head>
<body>
	<div id="wrap">
		<div class="push-top"></div>
		<div class="navbar navbar-default navbar-nav navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/"><i class="fa fa-check-square-o"></i> <strong>AOD</strong> <small>Squad Management</small></a>
				</div>

				<?php if (isLoggedIn()) { ?>
				
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">


						<!-- notifications menu -->
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">
								<span class="count">7</span> Notifications
							</a>
							<div class="popup dropdown-menu">
								<ul class="activity">
									<li>
										<i class="fa fa-clock-o fa-2x text-danger"></i>
										<div>You have <a href="#">3 recruits</a> awaiting promotion!
											<span>14 minutes ago</span>
										</div>
									</li>
									<li>
										<i class="fa fa-angle-double-up fa-2x text-success"></i>
										<div>
											<a href="#">CupOHemlock</a> promoted <a href="#">GinaLou</a> to Master Super General
											<span>14 minutes ago</span>
										</div>
									</li>
									<li>
										<i class="fa fa-comment text-primary fa-2x"></i>
										<div>
											<a href="#">Redguard</a> posted a <a href="#">comment</a> on Platoon 2's <a href="#">discussion feed</a>
											<span>35 minutes ago</span>
										</div>
									</li>
									<li>
										<i class="fa fa-flag fa-2x text-danger"></i>
										<div><a href="#">Guybrush</a> removed <a href="#">JoeSchmoe</a> from <a href="#">Platoon 2</a>
											<span>About 2 hours ago</span>
										</div>
									</li>
									<li>
										<i class="fa fa-angle-double-up fa-2x text-success"></i>
										<div>
											<a href="#">CupOHemlock</a> promoted <a href="#">GinaLou</a> to Master Super General
											<span>14 minutes ago</span>
										</div>
									</li>
									<li>
										<i class="fa fa-comment text-primary fa-2x"></i>
										<div>
											<a href="#">Redguard</a> posted a <a href="#">comment</a> on Platoon 2's <a href="#">discussion feed</a>
											<span>35 minutes ago</span>
										</div>
									</li>
									<li>
										<i class="fa fa-flag fa-2x text-danger"></i>
										<div><a href="#">Guybrush</a> removed <a href="#">JoeSchmoe</a> from <a href="#">Platoon 2</a>
											<span>About 2 hours ago</span>
										</div>
									</li>
								</ul>
							</div>
						</li>
						<!-- end notifications menu -->


						<?php echo $platoon_dropdown; ?>
						<li class="dropdown">

							<a href="#" class="dropdown-toggle" data-toggle="dropdown">User CP<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li class="disabled"><a href="#" disabled><?php echo $curUser . " (". getUserRoleName($userRole). ")"; ?></a></li>
								<li class="divider"></li>
								<li><a href="#" data-toggle="pill"><i class="fa fa-user pull-right"></i> Profile information</a></li>
								<li><a href="#" data-toggle="pill"><i class="fa fa-cog pull-right"></i> Settings</a></li>
								<li class="divider"></li>
								<li class="text-danger"><a href="#" data-toggle="pill" class="logout-btn"><i class="fa fa-lock pull-right"></i> Logout</a></li>
							</ul>
						</li>

					</ul>
				</div><!--/.nav-collapse -->

				<?php } else { ?>

				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a class="text-muted">Not logged in</a></li>
					</ul>
				</div>

				<?php } ?>		
			</div>
		</div>