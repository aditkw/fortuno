			<!-- Left side column. contains the sidebar -->
			<aside class="main-sidebar">
				<!-- sidebar: style can be found in sidebar.less -->
				<section class="sidebar">
					<!-- sidebar menu: : style can be found in sidebar.less -->
					<ul class="sidebar-menu">
						<li class="header">MAIN NAVIGATION</li>
						<li class="treeview <?php echo active_menu($uri_2, 'dashboard') ?>">
							<a href="<?php echo site_url('admin/dashboard');?>">
								<i class="fa fa-dashboard"></i> <span>Dashboard</span>
							</a>
						</li>
						<li class="treeview <?php echo active_menu($uri_2, 'user') ?>">
							<a href="<?php echo site_url('admin/user');?>">
								<i class="fa fa-user-secret"></i> <span>Administrator</span>
							</a>
						</li>
						<li class="treeview <?php echo active_menu($uri_2, 'contact') ?>">
							<a href="<?php echo site_url('admin/contact');?>">
								<i class="fa fa-info"></i> <span>Profile Information</span>
							</a>
						</li>
						<li class="treeview <?php echo active_menu($uri_2, 'text') ?>">
							<a href="<?php echo site_url('admin/text');?>">
								<i class="fa fa-font"></i> <span>Text Website</span>
							</a>
						</li>
						<li class="treeview <?php echo active_menu($uri_2, 'about') ?>">
							<a href="<?php echo site_url('admin/about');?>">
								<i class="fa fa-table"></i> <span> About Us</span>
							</a>
						</li>
						<li class="treeview <?php echo active_perent($uri_2, $menu['services']) ?>">
							<a href="#">
								<i class="fa fa-asl-interpreting"></i> <span> Services</span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li class="<?php echo active_menu($uri_2, 'catservices') ?>">
									<a href="<?php echo site_url('admin/catservices');?>"><i class="fa fa-circle-o"></i> Category Service</a>
								</li>
								<li class="<?php echo active_menu($uri_2, 'services') ?>">
									<a href="<?php echo site_url('admin/services');?>"><i class="fa fa-circle-o"></i> List Service </a>
								</li>
							</ul>
						</li>
						<li class="treeview <?php echo active_menu($uri_2, 'portofolio') ?>">
							<a href="<?php echo site_url('admin/portofolio');?>">
								<i class="fa fa-newspaper-o"></i> <span> Portofolio</span>
							</a>
						</li>
						<li class="treeview <?php echo active_perent($uri_2, $menu['misscellaneous']) ?>">
							<a href="#">
								<i class="fa fa-image"></i> <span> Misscellaneous</span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li class="<?php echo active_menu($uri_2, 'slide') ?>">
									<a href="<?php echo site_url('admin/slide');?>"><i class="fa fa-circle-o"></i> Slide </a>
								</li>
								<!-- <li class="<?php echo active_menu($uri_2, 'banner') ?>">
									<a href="<?php echo site_url('admin/banner');?>"><i class="fa fa-circle-o"></i> Banner </a>
								</li>
								<li class="<?php echo active_menu($uri_2, 'video') ?>">
									<a href="<?php echo '#'; //site_url('admin/video');?>"><i class="fa fa-circle-o"></i> Video </a>
								</li> -->
							</ul>
						</li>
						<li class="treeview <?php echo active_perent($uri_2, $menu['seo']) ?>">
							<a href="#">
								<i class="fa fa-search"></i> <span>S E O</span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li class="<?php echo active_menu($uri_2, 'site') ?>">
									<a href="<?php echo site_url('admin/site');?>"><i class="fa fa-circle-o"></i> General Site </a>
								</li>
								<li class="<?php echo active_menu($uri_2, 'seo') ?>">
									<a href="<?php echo site_url('admin/seo');?>"><i class="fa fa-circle-o"></i> S E O Page </a>
								</li>
							</ul>
						</li>
						<li class="header">TOOLS</li>
						<li><a href="#"><i class="fa fa fa-book text-red"></i> <span>Manual Guide</span></a></li>
						<li><a href="#"><i class="fa fa-area-chart text-green"></i> <span>Web Statistics</span></a></li>
						<li><a href="#"><i class="fa fa-envelope text-aqua"></i> <span>Web Mail</span></a></li>
						<li>
							<a href="<?php echo site_url('logout');?>" >
								<i class="fa fa-sign-out text-yellow"></i> <span>Log Out</span>
							</a>
						</li>
					</ul>
				</section>
				<!-- /.sidebar -->
			</aside>
			<!-- =============================================== -->
