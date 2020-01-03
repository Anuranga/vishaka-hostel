<aside id="left-panel" class="left-panel">
	<nav class="navbar navbar-expand-sm navbar-default">
		<div id="main-menu" class="main-menu collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="<?php echo base_url(); ?>index.php"><i class="menu-icon fa fa-laptop"></i>Visakha Vidyalaya</a>
				</li>
				<li class="menu-title"></li>
				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>ADMISSION</a>
					<ul class="sub-menu children dropdown-menu">
						<li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url(); ?>index.php/admission/admissionform">Admission Form</a></li>
						<li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url(); ?>index.php/admission/pendingStudentList">Pending student list </a></li>
					</ul>
				</li>

				<li class="menu-title"></li>
				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>STUDENT</a>
					<ul class="sub-menu children dropdown-menu">
						<li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url(); ?>index.php/student/studentList">Student List</a></li>

					</ul>
				</li>

				<li class="menu-title"></li>
				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>GATE PASS</a>
					<ul class="sub-menu children dropdown-menu">
						<li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url(); ?>index.php/gatePass/gatePass">Request Form</a></li>

						<li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url(); ?>index.php/gatePass/gatePassList">Gate Pass List</a></li>
						<!--<li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Security</a></li>-->


					</ul>
				</li>

				<li class="menu-title"></li>
				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>PAYMENTS</a>
					<ul class="sub-menu children dropdown-menu">
						<li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url(); ?>index.php/payments/newPayment">New Payment</a></li>
						<li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url(); ?>index.php/payments/paymentList">Payment List</a></li>
					</ul>
				</li>

				<li class="menu-title"></li>
				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>VISITORS</a>
					<ul class="sub-menu children dropdown-menu">
						<li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url(); ?>index.php/visitors/visitorsRequest">Request form</a></li>
						<li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url(); ?>index.php/visitors/visitorsList">Visitors list </a></li>
					</ul>
				</li>


				<li class="menu-title"></li>
				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>INVENTORY</a>
					<ul class="sub-menu children dropdown-menu">
						<li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url(); ?>index.php/users">New Inventory</a></li>
						<li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url(); ?>index.php/users/usersView">Inventory List</a></li>
					</ul>
				</li>

				<li class="menu-title"></li>
				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>DAILY EXPENSES</a>
					<ul class="sub-menu children dropdown-menu">
						<li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url(); ?>index.php/dailyExpenses/newExpense">New Expenses</a></li>
						<li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url(); ?>index.php/dailyExpenses/expensesList">Expenses List</a></li>
					</ul>
				</li>

				<li class="menu-title"></li>
				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>SYSTEM USERS</a>
					<ul class="sub-menu children dropdown-menu">
						<li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url(); ?>index.php/users">Add User</a></li>
						<li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url(); ?>index.php/users/usersView">Users List</a></li>
					</ul>
				</li>

				<li class="menu-title"></li><!-- /.menu-title -->
				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>LOGIN</a>
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
