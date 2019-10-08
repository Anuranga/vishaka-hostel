<aside id="left-panel" class="left-panel">
	<nav class="navbar navbar-expand-sm navbar-default">
		<div id="main-menu" class="main-menu collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="<?php echo base_url(); ?>index.php"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
				</li>
				<li class="menu-title">Admission</li>
				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Admission</a>
					<ul class="sub-menu children dropdown-menu">
						<li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url(); ?>index.php/student">Request Form</a></li>
						<li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url(); ?>index.php/student/pendingStudentList">List Student</a></li>
						<li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url(); ?>index.php/student/allStudentList">All Student</a></li>
					</ul>
				</li>
				<li class="menu-title">Users</li>
				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>System User</a>
					<ul class="sub-menu children dropdown-menu">
						<li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url(); ?>index.php/users">Add User</a></li>
						<li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url(); ?>index.php/users/usersView">View Users</a></li>
					</ul>
				</li>
				<li class="menu-title">Approval</li>
				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Going Home</a>
					<ul class="sub-menu children dropdown-menu">
						<li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url(); ?>index.php/leave">Principal</a></li>
						<li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url(); ?>index.php/leave/securityApproval">Security</a></li>
					</ul>
				</li>
				<li class="menu-title">Student Check-in/Check-out</li>
				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Request Forms</a>
					<ul class="sub-menu children dropdown-menu">
						<li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url(); ?>index.php/student/goingHome">Going Home</a></li>
						<!--<li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Security</a></li>-->
						<li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url(); ?>index.php/student/dayOut">Day Out</a></li>

						<li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url(); ?>index.php/student/sportsOut">Sports Out</a></li>
						<li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url(); ?>index.php/student/otherOut">Other Out</a></li>

					</ul>
				</li>
				<li class="menu-title">Login</li><!-- /.menu-title -->
				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
					<ul class="sub-menu children dropdown-menu">
						<li><i class="menu-icon fa fa-sign-in"></i><a href="<?php echo base_url(); ?>index.php/users/login">Login</a></li>
						<li><i class="menu-icon fa fa-sign-in"></i><a href="<?php echo base_url(); ?>index.php/users/register">Register</a></li>
						<li><i class="menu-icon fa fa-paper-plane"></i><a href="<?php echo base_url(); ?>index.php/users/forgetPassword">Forget Pass</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>
</aside>
