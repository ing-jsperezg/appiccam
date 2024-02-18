<?php 
    require_once "./config/APP.php";
    require_once "./autoload.php"; 

    if(isset($_GET['views'])){
        $url = explode("/",$_GET['views']);
    }else{
        $url = ["login"];
    }       
?>
<!doctype html>
<html lang="en">

<head> <?php include_once "./app/views/inc/head.php"; ?> </head>

	<body>


		<!-- Page wrapper start -->
		<div class="page-wrapper">

			<!-- Sidebar wrapper start -->
			<nav id="sidebar" class="sidebar-wrapper">

				<!-- Sidebar brand start  -->
				<div class="sidebar-brand">
					<a href="index.html" class="logo">
						<img src="views/img/logo.svg" alt="Bootstrap Gallery">
					</a>
				</div>
				<!-- Sidebar brand end  -->

				<!-- User profile start -->
				<div class="sidebar-user-details">
					<div class="user-profile">
						<img src="views/img/user2.png" class="profile-thumb" alt="Admin Dashboards">
						<span class="status-label"></span>
					</div>
					<h6 class="profile-name">Yuki Hayashi</h6>
					<div class="profile-actions">
						<a href="account-settings.html" class="blue-bg" data-toggle="tooltip" data-placement="top" title=""
							data-original-title="Settings">
							<i class="icon-settings1"></i>
						</a>
						<a class="red-bg" data-toggle="modal" data-target="#audioCall">
							<i class="icon-phone1"></i>
						</a>
					</div>
				</div>
				<!-- User profile end -->

				<!-- Sidebar content start -->
				<div class="sidebar-content">

					<!-- sidebar menu start -->
					<div class="sidebar-menu">
						<ul>
							<li class="sidebar-dropdown active">
								<a href="#">
									<i class="icon-home2"></i>
									<span class="menu-text">Dashboards</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="index.html">Dashboard</a>
										</li>
										<li>
											<a href="dashboard2.html">Dashboard 2</a>
										</li>
										<li>
											<a href="dashboard3.html" class="current-page">Dashboard 3</a>
										</li>
										<li>
											<a href="dashboard4.html">Dashboard 4</a>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<a href="widgets.html">
									<i class="icon-circular-graph"></i>
									<span class="menu-text">Widgets</span>
								</a>
							</li>
							<li>
								<a href="graph-widgets.html" class="current-page">
									<i class="icon-line-graph"></i>
									<span class="menu-text">Graph Widgets</span>
								</a>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-calendar1"></i>
									<span class="menu-text">Calendars</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="calendar.html">Daygrid View</a>
										</li>
										<li>
											<a href="calendar-external-draggable.html">External Draggable</a>
										</li>
										<li>
											<a href="calendar-google.html">Google Calendar</a>
										</li>
										<li>
											<a href="calendar-list-view.html">List View</a>
										</li>
										<li>
											<a href="calendar-selectable.html">Selectable</a>
										</li>
										<li>
											<a href="calendar-week-numbers.html">Week Numbers</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-layers2"></i>
									<span class="menu-text">Layouts</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="default-layout.html">Default Layout</a>
										</li>
										<li>
											<a href="layout-option2.html">Layout Option 2</a>
										</li>
										<li>
											<a href="layout-option3.html">Layout Option 3</a>
										</li>
										<li>
											<a href="layout-dark-header.html">Dark Header</a>
										</li>
										<li>
											<a href="layout-sidebar-mini.html">Sidebar Mini</a>
										</li>
										<li>
											<a href="slim-sidebar.html">Slim Layout</a>
										</li>
										<li>
											<a href="layout-daterange.html">Layout Date Range</a>
										</li>
										<li>
											<a href="cards.html">Cards</a>
										</li>
										<li>
											<a href="grid.html">Grid</a>
										</li>
										<li>
											<a href="grid-doc.html">Grid Doc</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-book-open"></i>
									<span class="menu-text">Pages</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="account-settings.html">Account Settings</a>
										</li>
										<li>
											<a href="faq.html">Faq</a>
										</li>
										<li>
											<a href="gallery.html">Gallery</a>
										</li>
										<li>
											<a href="invoice.html">Invoice</a>
										</li>
										<li>
											<a href="pricing.html">Pricing Plans</a>
										</li>
										<li>
											<a href="search-results.html">Search Results</a>
										</li>
										<li>
											<a href="timeline.html">Timeline</a>
										</li>
										<li>
											<a href="user-profile.html">User Profile</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-edit1"></i>
									<span class="menu-text">Forms</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="datepickers.html">Datepickers</a>
										</li>
										<li>
											<a href="editor.html">Editor</a>
										</li>
										<li>
											<a href="form-inputs.html">Inputs</a>
										</li>
										<li>
											<a href="input-groups.html">Input Groups</a>
										</li>
										<li>
											<a href="check-radio.html">Check Boxes</a>
										</li>
										<li>
											<a href="input-masks.html">Input Masks</a>
										</li>
										<li>
											<a href="input-tags.html">Input Tags</a>
										</li>
										<li>
											<a href="range-sliders.html">Range Sliders</a>
										</li>
										<li>
											<a href="wizard.html">Wizards</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-box"></i>
									<span class="menu-text">jQuery Components</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="accordion.html">Accordion</a>
										</li>
										<li>
											<a href="accordion-icons.html">Accordion Icons</a>
										</li>
										<li>
											<a href="accordion-arrows.html">Accordion Arrows</a>
										</li>
										<li>
											<a href="accordion-lg.html">Accordion Large</a>
										</li>
										<li>
											<a href="carousel.html">Carousels</a>
										</li>
										<li>
											<a href="modals.html">Modals</a>
										</li>
										<li>
											<a href="alerts.html">Notifications</a>
										</li>
										<li>
											<a href="tooltips.html">Tooltips</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-star2"></i>
									<span class="menu-text">UI Elements</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="avatars.html">Avatars</a>
										</li>
										<li>
											<a href="buttons.html">Buttons</a>
										</li>
										<li>
											<a href="button-groups.html">Button Groups</a>
										</li>
										<li>
											<a href="dropdowns.html">Dropdowns</a>
										</li>
										<li>
											<a href="icons.html">Icons</a>
										</li>
										<li>
											<a href="jumbotron.html">Jumbotron</a>
										</li>
										<li>
											<a href="labels-badges.html">Labels &amp; Badges</a>
										</li>
										<li>
											<a href="list-items.html">List Items</a>
										</li>
										<li>
											<a href="pagination.html">Paginations</a>
										</li>
										<li>
											<a href="progress.html">Progress Bars</a>
										</li>
										<li>
											<a href="pills.html">Pills</a>
										</li>
										<li>
											<a href="spinners.html">Spinners</a>
										</li>
										<li>
											<a href="typography.html">Typography</a>
										</li>
										<li>
											<a href="images.html">Thumbnails</a>
										</li>
										<li>
											<a href="text-avatars.html">Text Avatars</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-border_all"></i>
									<span class="menu-text">Tables</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="data-tables.html">Data Tables</a>
										</li>
										<li>
											<a href="custom-tables.html">Custom Tables</a>
										</li>
										<li>
											<a href="default-table.html">Default Table</a>
										</li>
										<li>
											<a href="table-bordered.html">Table Bordered</a>
										</li>
										<li>
											<a href="table-hover.html">Table Hover</a>
										</li>
										<li>
											<a href="table-striped.html">Table Striped</a>
										</li>
										<li>
											<a href="table-small.html">Table Small</a>
										</li>
										<li>
											<a href="table-colors.html">Table Colors</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-pie-chart1"></i>
									<span class="menu-text">Graphs</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="apex-graphs.html">Apex Graphs</a>
										</li>
										<li>
											<a href="morris-graphs.html">Morris Graphs</a>
										</li>
										<li>
											<a href="vector-maps.html">Vector Maps</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-unlock"></i>
									<span class="menu-text">Authentication</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="login.html">Login</a>
										</li>
										<li>
											<a href="signup.html">Signup</a>
										</li>
										<li>
											<a href="forgot-pwd.html">Forgot Password</a>
										</li>
										<li>
											<a href="error.html">404</a>
										</li>
										<li>
											<a href="error2.html">505</a>
										</li>
										<li>
											<a href="coming-soon.html">Coming Soon</a>
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
					<!-- sidebar menu end -->

				</div>
				<!-- Sidebar content end -->

			</nav>
			<!-- Sidebar wrapper end -->

			<!-- Page content start  -->
			<div class="page-content">

				<!-- Header start -->
				<header class="header">
					<div class="toggle-btns">
						<a id="toggle-sidebar" href="#">
							<i class="icon-menu"></i>
						</a>
						<a id="pin-sidebar" href="#">
							<i class="icon-menu"></i>
						</a>
					</div>
					<div class="header-items">
						<!-- Custom search start -->
						<div class="custom-search">
							<input type="text" class="search-query" placeholder="Search here ...">
							<i class="icon-search1"></i>
						</div>
						<!-- Custom search end -->

						<!-- Header actions start -->
						<ul class="header-actions">
							<li class="dropdown d-none d-sm-block">
								<a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
									<i class="icon-calendar1"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
									<div class="dropdown-menu-header">
										Events (10)
									</div>
									<ul class="header-notifications">
										<li>
											<a href="#">
												<div class="user-img away">
													<img src="views/img/user6.png" alt="Admin Template">
												</div>
												<div class="details">
													<div class="user-title">Abbott</div>
													<div class="noti-details">Membership has been ended.</div>
													<div class="noti-date">Today, 07:30 pm</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="user-img busy">
													<img src="views/img/user13.png" alt="Premium Admin Dashboards">
												</div>
												<div class="details">
													<div class="user-title">Braxten</div>
													<div class="noti-details">Approved new design.</div>
													<div class="noti-date">Today, 12:00 am</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="user-img online">
													<img src="views/img/user19.png" alt="Premium Admin Dashboards">
												</div>
												<div class="details">
													<div class="user-title">Larkyn</div>
													<div class="noti-details">Check out every table in detail.</div>
													<div class="noti-date">Today, 04:00 pm</div>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="dropdown d-none d-sm-block">
								<a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
									<i class="icon-star2"></i>
									<span class="count-label blue"></span>
								</a>
								<div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
									<div class="dropdown-menu-header">
										Bookmarks (21)
									</div>
									<div class="customScroll5">
										<ul class="bookmarks p-3">
											<li>
												<a href="#">Bootstrap admin template</a>
											</li>
											<li>
												<a href="#">Images resources</a>
											</li>
											<li>
												<a href="#">Best admin templates 2023</a>
											</li>
											<li>
												<a href="#">Javascript libraries</a>
											</li>
											<li>
												<a href="#">Angular widgets</a>
											</li>
											<li>
												<a href="#">UX library</a>
											</li>
											<li>
												<a href="#">Bootstrap admin template</a>
											</li>
											<li>
												<a href="#">Images resources</a>
											</li>
											<li>
												<a href="#">Best admin templates 2023</a>
											</li>
											<li>
												<a href="#">Javascript libraries</a>
											</li>
											<li>
												<a href="#">Angular widgets</a>
											</li>
											<li>
												<a href="#">UX library</a>
											</li>
											<li>
												<a href="#">Bootstrap admin template</a>
											</li>
											<li>
												<a href="#">Images resources</a>
											</li>
											<li>
												<a href="#">Best admin templates 2023</a>
											</li>
											<li>
												<a href="#">Javascript libraries</a>
											</li>
											<li>
												<a href="#">Angular widgets</a>
											</li>
											<li>
												<a href="#">UX library</a>
											</li>
										</ul>
									</div>
								</div>
							</li>
							<li class="dropdown d-none d-sm-block">
								<a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
									<i class="icon-bell"></i>
									<span class="count-label"></span>
								</a>
								<div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
									<div class="dropdown-menu-header">
										Notifications (40)
									</div>
									<ul class="header-notifications">
										<li>
											<a href="#">
												<div class="user-img away">
													<img src="views/img/user10.png" alt="Bootstrap Admin Panel">
												</div>
												<div class="details">
													<div class="user-title">Abbott</div>
													<div class="noti-details">Membership has been ended.</div>
													<div class="noti-date">Today, 07:30 pm</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="user-img busy">
													<img src="views/img/user10.png" alt="Admin Panel">
												</div>
												<div class="details">
													<div class="user-title">Braxten</div>
													<div class="noti-details">Approved new design.</div>
													<div class="noti-date">Today, 12:00 am</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="user-img online">
													<img src="views/img/user6.png" alt="Admin Template">
												</div>
												<div class="details">
													<div class="user-title">Larkyn</div>
													<div class="noti-details">Check out every table in detail.</div>
													<div class="noti-date">Today, 04:00 pm</div>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="dropdown user-settings">
								<a href="#" id="userSettings" data-toggle="dropdown" aria-haspopup="true">
									<img src="views/img/user2.png" class="user-avatar" alt="Top Admin Dashboards">
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
									<div class="header-profile-actions">
										<div class="header-user-profile">
											<div class="header-user">
												<img src="views/img/user2.png" alt="Admin Template">
											</div>
											<h5>Yuki Hayashi</h5>
											<p>Super User</p>
										</div>
										<a href="user-profile.html"><i class="icon-user1"></i> My Profile</a>
										<a href="account-settings.html"><i class="icon-settings1"></i> Account Settings</a>
										<a href="login.html"><i class="icon-log-out1"></i> Sign Out</a>
									</div>
								</div>
							</li>
						</ul>
						<!-- Header actions end -->
					</div>
				</header>
				<!-- Header end -->

				<!-- Main container start -->
				<div class="main-container">

					<!-- Page header start -->
					<div class="page-header">

						<!-- Breadcrumb start -->
						<ol class="breadcrumb">
							<li class="breadcrumb-item">Welcome, James</li>
						</ol>
						<!-- Breadcrumb end -->

						<!-- App actions start -->
						<div class="app-actions">
							<button type="button" class="btn">Today</button>
							<button type="button" class="btn">Yesterday</button>
							<button type="button" class="btn">7 days</button>
							<button type="button" class="btn">15 days</button>
							<button type="button" class="btn active">30 days</button>
						</div>
						<!-- App actions end -->

					</div>
					<!-- Page header end -->

					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-4 col-sm-6 col-12">
							<div class="row gutters">
								<div class="col-sm-6 col-6">
									<div class="social-tile">
										<div class="social-icon bg-info">
											<i class="icon-shopping-bag1"></i>
										</div>
										<div>New Products</div>
										<h2>500</h2>
									</div>
								</div>
								<div class="col-sm-6 col-6">
									<div class="social-tile">
										<div class="social-icon bg-danger">
											<i class="icon-user1"></i>
										</div>
										<div>New Users</div>
										<h2>750</h2>
									</div>
								</div>
								<div class="col-sm-6 col-6">
									<div class="social-tile">
										<div class="social-icon bg-warning">
											<i class="icon-shopping-bag1"></i>
										</div>
										<div>Orders</div>
										<h2>20M</h2>
									</div>
								</div>
								<div class="col-sm-6 col-6">
									<div class="social-tile">
										<div class="social-icon bg-success">
											<i class="icon-shopping-bag1"></i>
										</div>
										<div>Revenue</div>
										<h2>35k</h2>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Revenue</div>
								</div>
								<div class="card-body">
									<div class="customScroll5">
										<div class="revenue-container">
											<div class="revenue-graph">
												<div id="overallRevenue1"></div>
											</div>
											<div class="overall-revenue">
												65,000
											</div>
											<div class="revenue-details">
												Overall revenue is 5% more<br />than last week.
											</div>
											<a href="dashboard2.html" class="btn btn-danger">View Report</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-5 col-lg-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Sales</div>
								</div>
								<div class="card-body">
									<div id="lineGraph8"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->

					<!-- Row start -->
					<div class="row gutters">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Sales</div>
								</div>
								<div class="card-body pt-0">
									<div class="custom-btn-group right-align mb-2" role="group">
										<button type="button" class="btn btn-sm btn-success">Today</button>
										<button type="button" class="btn btn-sm btn-info">Yesterday</button>
										<button type="button" class="btn btn-sm btn-info">15 days</button>
										<button type="button" class="btn btn-sm btn-info">30 days</button>
									</div>
									<div id="lineGraph6"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->

					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-4 col-sm-6 col-12">
							<!-- Card start -->
							<div class="card">
								<div class="card-header">
									<div class="card-title">Overall Ratings</div>
								</div>
								<div class="card-body">
									<div class="customScroll5">
										<ul class="customer-rating">
											<li class="clearfix">
												<div class="customer">
													<img src="views/img/user.png" alt="Admin Templates and Dashboards">
												</div>
												<div class="customer-review">
													<div class="stars">
														<div id="rate1"></div>
													</div>
													<h5>Great Product</h5>
													<h6 class="by">By <a href="#" class="text-info">William Meleski</a></h6>
													<p>The atmosphere is excellent along with the greenery around. Market, hospital and schools
														are easily accessible.</p>
												</div>
											</li>
											<li class="clearfix">
												<div class="customer">
													<img src="views/img/user2.png" alt="Admin Templates and Dashboards">
												</div>
												<div class="customer-review">
													<div class="stars" id="rate2"></div>
													<h5>Best Product</h5>
													<h6 class="by">By <a href="#" class="text-info">Joshua Galleher</a></h6>
													<p>The atmosphere is excellent along with the greenery around. Market, hospital and schools
														are easily accessible.</p>
												</div>
											</li>
											<li class="clearfix">
												<div class="customer">
													<img src="views/img/user3.png" alt="Admin Templates and Dashboards">
												</div>
												<div class="customer-review">
													<div class="stars" id="rate3"></div>
													<h5>Awesome Deal</h5>
													<h6 class="by">By <a href="#" class="text-info">Mark Lee</a></h6>
													<p>This Location has good connectivity with nearby schools, colleges and hospitals. Public
														transport is available.</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- Card end -->
						</div>
						<div class="col-xl-4 col-sm-6 col-12">
							<!-- Card start -->
							<div class="card">
								<div class="card-header">
									<div class="card-title">Sessions by Location</div>
								</div>
								<div class="card-body">
									<div class="customScroll5">
										<div class="top-locations-container">
											<div id="world-map-markers" class="location-map"></div>
											<div class="location">
												<div class="location-details">
													<img src="views/flags/4x3/br.svg" alt="Google Dashboard" />
													<div class="location-name">
														<div class="name">Brazil</div>
													</div>
												</div>
												<div class="total-sessions text-success">36.7%</div>
											</div>
											<div class="location">
												<div class="location-details">
													<img src="views/flags/4x3/no.svg" alt="Google Dashboard" />
													<div class="location-name">
														<div class="name">Norway</div>
													</div>
												</div>
												<div class="total-sessions text-info">25.2%</div>
											</div>
											<div class="location">
												<div class="location-details">
													<img src="views/flags/4x3/ua.svg" alt="Google Dashboard" />
													<div class="location-name">
														<div class="name">Ukraine</div>
													</div>
												</div>
												<div class="total-sessions text-warning">21.8%</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Card end -->
						</div>
						<div class="col-xl-4 col-sm-6 col-12">
							<!-- Card start -->
							<div class="card">
								<div class="card-header">
									<div class="card-title">Items Sold</div>
								</div>
								<div class="card-body">
									<div class="customScroll5">
										<div class="products-sold-container">
											<div class="product">
												<div class="product-details">
													<img src="views/img/mobiles/mob1.jpg" alt="Google Dashboard">
													<div class="product-title">
														<div class="title">Apple iPhone 11</div>
														<div class="price">$999.00</div>
													</div>
												</div>
												<div class="product-sold">
													<div class="sold text-info">8250</div>
													<div class="sold-title">sold</div>
												</div>
											</div>
											<div class="product">
												<div class="product-details">
													<img src="views/img/mobiles/mob2.jpg" alt="Google Dashboard">
													<div class="product-title">
														<div class="title">Apple iPhone 10</div>
														<div class="price">$899.00</div>
													</div>
												</div>
												<div class="product-sold">
													<div class="sold text-info">9347</div>
													<div class="sold-title">sold</div>
												</div>
											</div>
											<div class="product">
												<div class="product-details">
													<img src="views/img/mobiles/mob3.jpg" alt="Google Dashboard">
													<div class="product-title">
														<div class="title">Apple iPhone 9</div>
														<div class="price">$799.00</div>
													</div>
												</div>
												<div class="product-sold">
													<div class="sold text-info">6269</div>
													<div class="sold-title">sold</div>
												</div>
											</div>
											<div class="product">
												<div class="product-details">
													<img src="views/img/mobiles/mob4.jpg" alt="Google Dashboard">
													<div class="product-title">
														<div class="title">Apple iPhone 8</div>
														<div class="price">$699.00</div>
													</div>
												</div>
												<div class="product-sold">
													<div class="sold text-info">5950</div>
													<div class="sold-title">sold</div>
												</div>
											</div>
											<div class="product">
												<div class="product-details">
													<img src="views/img/mobiles/mob5.jpg" alt="Google Dashboard">
													<div class="product-title">
														<div class="title">Apple iPhone 7</div>
														<div class="price">$599.00</div>
													</div>
												</div>
												<div class="product-sold">
													<div class="sold text-info">2875</div>
													<div class="sold-title">sold</div>
												</div>
											</div>
											<div class="product">
												<div class="product-details">
													<img src="views/img/mobiles/mob6.jpg" alt="Google Dashboard">
													<div class="product-title">
														<div class="title">Apple iPhone 6</div>
														<div class="price">$499.00</div>
													</div>
												</div>
												<div class="product-sold">
													<div class="sold text-info">2300</div>
													<div class="sold-title">sold</div>
												</div>
											</div>
											<div class="product">
												<div class="product-details">
													<img src="views/img/mobiles/mob7.jpg" alt="Google Dashboard">
													<div class="product-title">
														<div class="title">Apple iPhone 5</div>
														<div class="price">$399.00</div>
													</div>
												</div>
												<div class="product-sold">
													<div class="sold text-info">5150</div>
													<div class="sold-title">sold</div>
												</div>
											</div>
											<div class="product">
												<div class="product-details">
													<img src="views/img/mobiles/mob8.jpg" alt="Google Dashboard">
													<div class="product-title">
														<div class="title">Apple iPhone</div>
														<div class="price">$299.00</div>
													</div>
												</div>
												<div class="product-sold">
													<div class="sold text-info">2195</div>
													<div class="sold-title">sold</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Card end -->
						</div>
						<div class="col-xl-4 col-sm-6 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Chat</div>
								</div>
								<div class="card-body">
									<div class="customScroll5">
										<ul class="chats">
											<li class="chats-left">
												<div class="chats-avatar">
													<img src="views/img/user2.png" alt="Admin Templates and Dashboards">
													<div class="chats-name">James</div>
												</div>
												<div class="chats-text">Explore the history of the classic Lorem Ipsum passage and generate.
												</div>
												<div class="chats-hour">08:55 <span class="icon-done_all"></span></div>
											</li>
											<li class="chats-right">
												<div class="chats-avatar">
													<img src="views/img/user4.png" alt="Admin Templates and Dashboards">
													<div class="chats-name">You</div>
												</div>
												<div class="chats-text">Your own text using any number of characters, words, sentences or
													paragraphs.</div>
												<div class="chats-hour">08:56 <span class="icon-done_all"></span></div>
											</li>
											<li class="chats-left">
												<div class="chats-avatar">
													<img src="views/img/user10.png" alt="Admin Templates and Dashboards">
													<div class="chats-name">James</div>
												</div>
												<div class="chats-text">Commonly used as placeholder text in the graphic and print industries.
												</div>
												<div class="chats-hour">08:57 <span class="icon-done_all"></span></div>
											</li>
											<li class="chats-right">
												<div class="chats-avatar">
													<img src="views/img/user22.png" alt="Admin Templates and Dashboards">
													<div class="chats-name">You</div>
												</div>
												<div class="chats-text">Lorem Ipsum's origins extend far back to a scrambled Latin passage from
													Cicero in the middle ages.</div>
												<div class="chats-hour">08:59 <span class="icon-done_all"></span></div>
											</li>
											<li class="chats-left">
												<div class="chats-avatar">
													<img src="views/img/user17.png" alt="Admin Templates and Dashboards">
													<div class="chats-name">James</div>
												</div>
												<div class="chats-text">In publishing and graphic design, lorem ipsum is a filler text or
													greeking commonly used to demonstrate the textual elements.</div>
												<div class="chats-hour">09:00 <span class="icon-done_all"></span></div>
											</li>
											<li class="chats-right">
												<div class="chats-avatar">
													<img src="views/img/user9.png" alt="Admin Templates and Dashboards">
													<div class="chats-name">You</div>
												</div>
												<div class="chats-text">A graphic document or visual presentation. Replacing meaningful content
													with placeholder text allows designers to design the form of the content before the content
													itself has been produced.</div>
												<div class="chats-hour">09:00 <span class="icon-done_all"></span></div>
											</li>
											<li class="chats-left">
												<div class="chats-avatar">
													<img src="views/img/user12.png" alt="Admin Templates and Dashboards">
													<div class="chats-name">James</div>
												</div>
												<div class="chats-text">Lorem Ipsum is also known as: Greeked text, blind text, placeholder
													text, dummy content, filler text, lipsum, and mock-content.</div>
												<div class="chats-hour">09:01 <span class="icon-done_all"></span></div>
											</li>
											<li class="chats-right">
												<div class="chats-avatar">
													<img src="views/img/user3.png" alt="Admin Templates and Dashboards">
													<div class="chats-name">You</div>
												</div>
												<div class="chats-text">Lorem ipsum has become the industry standard for design mockups and
													prototypes. By adding a little bit of Latin to a mockup.</div>
												<div class="chats-hour">09:01 <span class="icon-done_all"></span></div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-sm-6 col-12">
							<!-- Card start -->
							<div class="card">
								<div class="card-header">
									<div class="card-title">Order Status</div>
								</div>
								<div class="card-body">
									<div class="customScroll5">
										<ul class="user-messages">
											<li class="clearfix">
												<div class="customer bg-info">WJ</div>
												<div class="delivery-details">
													<span class="badge badge-info">Ordered</span>
													<h5>Wincy Jeslin</h5>
													<p>We are pleased to inform that the following ticket no. <b>BM510</b> have been booked.</p>
												</div>
											</li>
											<li class="clearfix">
												<div class="customer bg-danger">SK</div>
												<div class="delivery-details">
													<span class="badge badge-danger">Delivered</span>
													<h5>Sara Kelly</h5>
													<p>The carrier successfully delivered the message to the end user.</p>
												</div>
											</li>
											<li class="clearfix">
												<div class="customer bg-info">MJ</div>
												<div class="delivery-details">
													<span class="badge badge-info">Cancelled</span>
													<h5>Maria Joseph</h5>
													<p>The following describe the status codes and messages states for delivery receipts.</p>
												</div>
											</li>
											<li class="clearfix">
												<div class="customer bg-info">LJ</div>
												<div class="delivery-details">
													<span class="badge badge-info">Returned</span>
													<h5>Lily Jordan</h5>
													<p>Status codes and descriptions are returned in the following OpenMarket-specific TLVs When a
														delivery receipt is received.</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- Card end -->
						</div>
						<div class="col-xl-4 col-sm-6 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Todo's</div>
								</div>
								<div class="card-body">
									<div class="customScroll5">
										<div class="todo-container">
											<ul class="todo-body">
												<li class="todo-list">
													<div class="todo-info">
														<span class="dot blue"></span>
														<p>Team Meeting</p>
														<p class="dt">Thursday at 3:30 PM</p>
													</div>
												</li>
												<li class="todo-list">
													<div class="todo-info">
														<span class="dot orange"></span>
														<p>Make new page</p>
														<p class="dt">Wednesday at 10:30 AM</p>
													</div>
												</li>
												<li class="todo-list">
													<div class="todo-info">
														<span class="dot red"></span>
														<p>Product launch</p>
														<p class="dt">Sunday at Baur Lac, Zurich</p>
													</div>
												</li>
												<li class="todo-list">
													<div class="todo-info">
														<span class="dot green"></span>
														<p>Team Meeting</p>
														<p class="dt">Thursday at 3:30 PM</p>
													</div>
												</li>
												<li class="todo-list">
													<div class="todo-info">
														<span class="dot yellow"></span>
														<p>Make new page</p>
														<p class="dt">Wednesday at 10:30 AM</p>
													</div>
												</li>
												<li class="todo-list">
													<div class="todo-info">
														<span class="dot green"></span>
														<p>Product launch</p>
														<p class="dt">Sunday at Baur Lac, Zurich</p>
													</div>
												</li>
												<li class="todo-list">
													<div class="todo-info">
														<span class="dot blue"></span>
														<p>Team Meeting</p>
														<p class="dt">Thursday at 3:30 PM</p>
													</div>
												</li>
												<li class="todo-list">
													<div class="todo-info">
														<span class="dot red"></span>
														<p>Make new page</p>
														<p class="dt">Wednesday at 10:30 AM</p>
													</div>
												</li>
												<li class="todo-list">
													<div class="todo-info">
														<span class="dot yellow"></span>
														<p>Product launch</p>
														<p class="dt">Sunday at Baur Lac, Zurich</p>
													</div>
												</li>
												<li class="todo-list done">
													<div class="todo-info">
														<span class="dot green"></span>
														<p>Code Review</p>
														<p class="dt">Friday at 2:00PM</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->

					<!-- Audio call modal start -->
					<div class="modal fade" id="audioCall" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel"
						aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="basicModalLabel">Modal Title</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="call-container">
										<div class="current-user">
											<img src="views/img/user21.png" alt="Top Admin Dashboards">
										</div>
										<h5 class="calling-user-name">
											Yuki Hayashi <span class="calling">Calling...</span>
										</h5>
										<div class="calling-btns">
											<button class="btn btn-danger" data-dismiss="modal">
												<i class="icon-highlight_off"></i>
											</button>
											<button class="btn btn-success">
												<i class="icon-phone1"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Audio call modal end -->


				</div>
				<!-- Main container end -->

				<!-- Container fluid start -->
				<div class="container-fluid">
					<!-- Row start -->
					<div class="row gutters">
						<div class="col-12">
							<!-- Footer start -->
							<div class="footer">
								© Bootstrap Gallery 2023
							</div>
							<!-- Footer end -->
						</div>
					</div>
					<!-- Row end -->
				</div>
				<!-- Container fluid end -->

				<!-- Chat start -->
				<div id="chat-box">
					<div id="chat-circle" class="btn btn-raised">
						<img src="views/img/chat.svg" alt="Best Google Dashboards" />
					</div>
					<div class="chat-box">
						<div class="chat-box-header">
							Chat
							<span class="chat-box-toggle"><i class="icon-close"></i></span>
						</div>
						<div class="chat-box-body">
							<div class="chat-logs">
								<div class="chat-msg self">
									<img src="views/img/user2.png" class="user" alt="Google Dashboards">
									<div class="chat-msg-text">Hello</div>
								</div>
								<div class="chat-msg user">
									<img src="views/img/user15.png" class="user" alt="Google Dashboards">
									<div class="chat-msg-text">Are we meeting today?</div>
								</div>
								<div class="chat-msg self">
									<img src="views/img/user2.png" class="user" alt="Google Dashboards">
									<div class="chat-msg-text">Yes, what time suits you?</div>
								</div>
								<div class="chat-msg user">
									<img src="views/img/user15.png" class="user" alt="Google Dashboards">
									<div class="chat-msg-text">Can we connect at 3pm?</div>
								</div>
								<div class="chat-msg self">
									<img src="views/img/user2.png" class="user" alt="Google Dashboards">
									<div class="chat-msg-text">Sure, Thanks. I will send you some important files.</div>
								</div>
								<div class="chat-msg user">
									<img src="views/img/user15.png" class="user" alt="Google Dashboards">
									<div class="chat-msg-text">Great. Thanks!</div>
								</div>
							</div>
						</div>
						<div class="chat-input">
							<form>
								<input type="text" id="chat-input" placeholder="Send a message..." />
								<button type="submit" class="chat-submit" id="chat-submit"><i class="icon-send"></i></button>
							</form>
						</div>
					</div>
				</div>
				<!-- Chat end -->

			</div>
			<!-- Page content end -->

		</div>
		<!-- Page wrapper end -->

		<!--**************************
			**************************
				**************************
							Required JavaScript Files
				**************************
			**************************
		**************************-->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<?php include_once "./app/views/inc/script.php"; ?>

	</body>

</html>