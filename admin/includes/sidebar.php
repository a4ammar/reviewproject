<ul id="main-menu" class="main-menu">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
		

				<li class="active opened active has-sub">
					<a href="<?php echo  $base_url; ?>admin">
						<i class="entypo-gauge"></i>
						<span class="title">Dashboard</span>
					</a>
				
				</li>
				<li class="has-sub">
					<a href="layout-api.html">
						<i class="entypo-layout"></i>
						<span class="title">Manage Users</span>
					</a>
					<ul>
						<li>
							<a href="<?=$base_url;?>view_users.htm">
								<span class="title">View Users</span>
							</a>
						</li>
						<!-- <li>
							<a href="<?=$base_url;?>add_users.htm">
								<span class="title">Add Users</span>
							</a>
						</li> -->
					</ul>
				
				</li>
				<li class="has-sub">
					<a href="#">
						<i class="entypo-layout"></i>
						<span class="title">Manage Orders</span>
					</a>
					<ul>
						<li>
							<a href="<?=$base_url;?>view_orders.htm">
								<span class="title">view orders</span>
							</a>
						</li>
					
					</ul>
				
				</li>
				<li class="has-sub">
					<a href="#">
						<i class="entypo-layout"></i>
						<span class="title">Manage Services</span>
					</a>
					<ul>
						<li>
							<a href="<?=$base_url;?>add_services.htm">
								<span class="title">Add Packages</span>
							</a>
						</li>
						<li>
							<a href="<?=$base_url;?>view_services.htm">
								<span class="title">View Packages</span>
							</a>
						</li>
					
					</ul>
				
				</li>				
				<li class="has-sub">
					<a href="#">
						<i class="entypo-layout"></i>
						<span class="title">Manage Website</span>
					</a>
					<ul>
						<li>
							<a href="<?=$base_url;?>preferences.htm">
								<span class="title">Preferences</span>
							</a>
						</li>
						<li>
							<a href="<?=$base_url;?>slider.htm">
								<span class="title">Slider</span>
							</a>
						</li>
					</ul>
				
				</li>
				<!-- <li class="active opened active has-sub">
					<a href="<?php echo  $base_url; ?>preferences.htm">
						<i class="entypo-layout"></i>
						<span class="title">Site Preferences</span>
					</a>
				
				</li> -->
			
			</ul>