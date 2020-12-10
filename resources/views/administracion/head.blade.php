<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1,
			shrink-to-fit=no" name="viewport">
	<title>Aegis - Admin Dashboard Template</title>
	<!-- General CSS Files -->
	<link rel="stylesheet" href="{{asset ('assets/css/app.min.css')}}">
	<!-- Template CSS -->
	<link rel="stylesheet" href="{{asset ('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset ('assets/css/components.css')}}">
	<!-- Custom style CSS -->
	<link rel="stylesheet" href="{{asset ('assets/css/custom.css')}}">
	<link rel='shortcut icon' type='image/x-icon' href="{{asset ('assets/img/favicon.ico')}}" />
</head>

<body>
	<div class="loader"></div>
	<div id="app">
		<div class="main-wrapper main-wrapper-1">
			<div class="navbar-bg"></div>
			<nav class="navbar navbar-expand-lg main-navbar">
				<div class="form-inline mr-auto">
					<ul class="navbar-nav mr-3">
						<li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
						<li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
								<i data-feather="maximize"></i>
							</a></li>
						<li>
							<form class="form-inline mr-auto">
								<div class="search-element">
									<input class="form-control" type="search" placeholder="Search" aria-label="Search"
										data-width="200">
									<button class="btn" type="submit">
										<i class="fas fa-search"></i>
									</button>
								</div>
							</form>
						</li>
					</ul>
				</div>
				<ul class="navbar-nav navbar-right">
					<li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
							class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i>
							<span class="badge headerBadge1">
								6 </span> </a>
						<div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
							<div class="dropdown-header">
								Messages
								<div class="float-right">
									<a href="#">Mark All As Read</a>
								</div>
							</div>
							<div class="dropdown-list-content dropdown-list-message">
								<a href="#" class="dropdown-item"> <span class="dropdown-item-avatar
											text-white"> <img alt="image" src="assets/img/users/user-1.png" class="rounded-circle">
									</span> <span class="dropdown-item-desc"> <span class="message-user">John
											Deo</span>
										<span class="time messege-text">Please check your mail !!</span>
										<span class="time">2 Min Ago</span>
									</span>
								</a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
										<img alt="image" src="assets/img/users/user-2.png" class="rounded-circle">
									</span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
											Smith</span> <span class="time messege-text">Request for leave
											application</span>
										<span class="time">5 Min Ago</span>
									</span>
								</a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
										<img alt="image" src="assets/img/users/user-5.png" class="rounded-circle">
									</span> <span class="dropdown-item-desc"> <span class="message-user">Jacob
											Ryan</span> <span class="time messege-text">Your payment invoice is
											generated.</span> <span class="time">12 Min Ago</span>
									</span>
								</a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
										<img alt="image" src="assets/img/users/user-4.png" class="rounded-circle">
									</span> <span class="dropdown-item-desc"> <span class="message-user">Lina
											Smith</span> <span class="time messege-text">hii John, I have upload
											doc
											related to task.</span> <span class="time">30
											Min Ago</span>
									</span>
								</a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
										<img alt="image" src="assets/img/users/user-3.png" class="rounded-circle">
									</span> <span class="dropdown-item-desc"> <span class="message-user">Jalpa
											Joshi</span> <span class="time messege-text">Please do as specify.
											Let me
											know if you have any query.</span> <span class="time">1
											Days Ago</span>
									</span>
								</a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
										<img alt="image" src="assets/img/users/user-2.png" class="rounded-circle">
									</span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
											Smith</span> <span class="time messege-text">Client Requirements</span>
										<span class="time">2 Days Ago</span>
									</span>
								</a>
							</div>
							<div class="dropdown-footer text-center">
								<a href="#">View All <i class="fas fa-chevron-right"></i></a>
							</div>
						</div>
					</li>
					<li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
							class="nav-link notification-toggle nav-link-lg"><i data-feather="bell"></i>
							<span class="badge headerBadge2">
								3 </span> </a>
						<div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
							<div class="dropdown-header">
								Notifications
								<div class="float-right">
									<a href="#">Mark All As Read</a>
								</div>
							</div>
							<div class="dropdown-list-content dropdown-list-icons">
								<a href="#" class="dropdown-item dropdown-item-unread"> <span
										class="dropdown-item-icon bg-primary text-white"> <i class="fas
												fa-code"></i>
									</span> <span class="dropdown-item-desc"> Template update is
										available now! <span class="time">2 Min
											Ago</span>
									</span>
								</a> <a href="#" class="dropdown-item"> <span
										class="dropdown-item-icon bg-info text-white"> <i class="far
												fa-user"></i>
									</span> <span class="dropdown-item-desc"> <b>You</b> and <b>Dedik
											Sugiharto</b> are now friends <span class="time">10 Hours
											Ago</span>
									</span>
								</a> <a href="#" class="dropdown-item"> <span
										class="dropdown-item-icon bg-success text-white"> <i class="fas
												fa-check"></i>
									</span> <span class="dropdown-item-desc"> <b>Kusnaedi</b> has
										moved task <b>Fix bug header</b> to <b>Done</b> <span class="time">12
											Hours
											Ago</span>
									</span>
								</a> <a href="#" class="dropdown-item"> <span
										class="dropdown-item-icon bg-danger text-white"> <i
											class="fas fa-exclamation-triangle"></i>
									</span> <span class="dropdown-item-desc"> Low disk space. Let's
										clean it! <span class="time">17 Hours Ago</span>
									</span>
								</a> <a href="#" class="dropdown-item"> <span
										class="dropdown-item-icon bg-info text-white"> <i class="fas
												fa-bell"></i>
									</span> <span class="dropdown-item-desc"> Welcome to Aegis
										template! <span class="time">Yesterday</span>
									</span>
								</a>
							</div>
							<div class="dropdown-footer text-center">
								<a href="#">View All <i class="fas fa-chevron-right"></i></a>
							</div>
						</div>
					</li>
					<li class="dropdown"><a href="#" data-toggle="dropdown"
							class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image"
								src="assets/img/user.png" class="user-img-radious-style"> <span
								class="d-sm-none d-lg-inline-block"></span></a>
						<div class="dropdown-menu dropdown-menu-right pullDown">
							<div class="dropdown-title">Hello Sarah Smith</div>
							<a href="profile.html" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
							</a> <a href="timeline.html" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
								Activities
							</a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
								Settings
							</a>
							<div class="dropdown-divider"></div>
							<a href="{{ route('logout') }}" onclick="event.preventDefault(); 
                            document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden"> {{ csrf_field() }}
                            </form>
						</div>
					</li>
				</ul>
			</nav>
			<div class="main-sidebar sidebar-style-2">
				<aside id="sidebar-wrapper">
					<div class="sidebar-brand">
						<a href="index.html"> <img alt="image" src="{{asset ('img/logo-borderBox.svg') }}" class="header-logo" /> 
							{{-- <span class="logo-name">BorderBox</span> --}}
						</a>
					</div>
					<div class="sidebar-user">
						<div class="sidebar-user-picture">
							{{-- <img alt="image" src="assets/img/userbig.png"> --}}
						</div>
						<div class="sidebar-user-details">
							<div class="user-name">{{ $user->name ?? 'Seba' }}</div>
							<div class="user-role">{{__('Administrator')}}</div>
						</div>
					</div>
					<ul class="sidebar-menu">
						<li class="menu-header">{{__('Tablero de control')}}</li>
						<li class="dropdown">
							<a href="{{route ('administracion.index')}}" ><i data-feather="monitor"></i><span>{{ __('Dashboard') }}</span>
							</a>
						</li>
						<li class="dropdown"><a href="#" class="nav-link has-dropdown"><i data-feather="monitor"></i><span>{{__('Configuración')}}</span></a>
							<ul class="dropdown-menu">
								<li><a class="nav-link" href="{{ url ('admnistracion/configuraciones/contacto') }}">{{__('Datos contacto')}}</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="#" class="nav-link has-dropdown"><i data-feather="monitor"></i><span>{{ __('Detalles de compra') }}</span></a>
							<ul class="dropdown-menu">
								<li><a class="nav-link" href="{{ route('detalleCompra.index') }}">{{ __('Lista de detalles') }}</a></li>
								<li><a class="nav-link" href="{{ route('detalleCompra.create') }}">{{ __('Crear un detalle') }}</a></li>
							</ul>
                        </li>
						<li class="dropdown"><a href="#" class="nav-link has-dropdown"><i data-feather="monitor"></i><span>{{__('Productos')}}</span></a>
							<ul class="dropdown-menu">
								<li><a class="nav-link" href="{{route ('productos.index')}}">{{__('Lista de productos')}}</a></li>
								<li><a class="nav-link" href="{{route ('productos.create')}}">{{__('Agregar productos')}}</a></li>
							</ul>
						</li>
					</ul>
				</aside>
			</div>
			<!-- Main Content -->
      
      @yield('content')


			<footer class="main-footer">
				<div class="footer-left">
					Copyright &copy; 2020
					<div class="bullet"></div>
					Design By <a href="#">CHIPHYSI</a>
				</div>
				<div class="footer-right"></div>
			</footer>
		</div>
	</div>
	<!-- General JS Scripts -->
	<script src="{{asset ('assets/js/app.min.js')}}"></script>
	<!-- JS Libraies -->
	<script src="{{asset ('assets/bundles/chartjs/chart.min.js')}}"></script>
	<script src="{{asset ('assets/bundles/apexcharts/apexcharts.min.js')}}"></script>
	<script src="{{asset ('assets/bundles/jquery.sparkline.min.js')}}"></script>
	<script src="{{asset ('assets/bundles/jqvmap/dist/jquery.vmap.min.js')}}"></script>
	<script src="{{asset ('assets/bundles/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
	<script src="{{asset ('assets/bundles/jqvmap/dist/maps/jquery.vmap.indonesia.js')}}"></script>
	<!-- Page Specific JS File -->
	<script src="{{asset ('assets/js/page/index2.js')}}"></script>
	<script src="{{asset ('assets/js/page/todo.js')}}"></script>
	<!-- Template JS File -->
	<script src="{{asset ('assets/js/scripts.js')}}"></script>
	<!-- Custom JS File -->
	<script src="{{asset ('assets/js/custom.js')}}"></script>
</body>
