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
			
			</ul>