@extends('administracion.head')
@section('content')
	
<div class="main-content">
	<section class="section">
		<div class="row">
			<div class="col-xl-3 col-lg-6">
				<div class="card">
					<div class="card-bg">
						<div class="p-t-20 d-flex justify-content-between">
							<div class="col">
								<h6 class="mb-0">New Booking</h6>
								<span class="font-weight-bold mb-0 font-20">1,562</span>
							</div>
							<i class="fas fa-address-card card-icon col-orange font-30 p-r-30"></i>
						</div>
						<canvas id="cardChart1" height="80"></canvas>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6">
				<div class="card">
					<div class="card-bg">
						<div class="p-t-20 d-flex justify-content-between">
							<div class="col">
								<h6 class="mb-0">New Customers</h6>
								<span class="font-weight-bold mb-0 font-20">895</span>
							</div>
							<i class="fas fa-diagnoses card-icon col-green font-30 p-r-30"></i>
						</div>
						<canvas id="cardChart2" height="80"></canvas>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6">
				<div class="card">
					<div class="card-bg">
						<div class="p-t-20 d-flex justify-content-between">
							<div class="col">
								<h6 class="mb-0">Growth</h6>
								<span class="font-weight-bold mb-0 font-20">+22.58%</span>
							</div>
							<i class="fas fa-chart-bar card-icon col-indigo font-30 p-r-30"></i>
						</div>
						<canvas id="cardChart3" height="80"></canvas>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6">
				<div class="card">
					<div class="card-bg">
						<div class="p-t-20 d-flex justify-content-between">
							<div class="col">
								<h6 class="mb-0">Revenue</h6>
								<span class="font-weight-bold mb-0 font-20">$2,687</span>
							</div>
							<i class="fas fa-hand-holding-usd card-icon col-cyan font-30 p-r-30"></i>
						</div>
						<canvas id="cardChart4" height="80"></canvas>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-8 col-md-12 col-lg-8">
				<div class="card">
					<div class="card-header">
						<h4>Revenue Chart</h4>
					</div>
					<div class="card-body">
						<ul class="list-inline text-center">
							<li class="list-inline-item p-r-30"><i data-feather="arrow-up-circle"
									class="col-green"></i>
								<h5 class="m-b-0">$675</h5>
								<p class="text-muted font-14 m-b-0">Weekly Earnings</p>
							</li>
							<li class="list-inline-item p-r-30"><i data-feather="arrow-down-circle"
									class="col-orange"></i>
								<h5 class="m-b-0">$1,587</h5>
								<p class="text-muted font-14 m-b-0">Monthly Earnings</p>
							</li>
							<li class="list-inline-item p-r-30"><i data-feather="arrow-up-circle"
									class="col-green"></i>
								<h5 class="mb-0 m-b-0">$45,965</h5>
								<p class="text-muted font-14 m-b-0">Yearly Earnings</p>
							</li>
						</ul>
						<div id="myChart"></div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-md-12 col-lg-4">
				<div class="card l-bg-orange">
					<div class="card-body">
						<div class="text-white">
							<div class="row">
								<div class="col-md-6 col-lg-5">
									<h4 class="mb-0 font-26">$1,235</h4>
									<p class="mb-2">Avg Sales Per Month</p>
									<p class="mb-0">
										<span class="font-20">+11.25% </span>Increase
									</p>
								</div>
								<div class="col-md-6 col-lg-7">
									<div class="sparkline-bar p-t-50"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card l-bg-cyan">
					<div class="card-body">
						<div class="text-white">
							<div class="row">
								<div class="col-md-6 col-lg-5">
									<h4 class="mb-0 font-26">758</h4>
									<p class="mb-2">Avg new Cust Per Month</p>
									<p class="mb-0">
										<span class="font-20">+25.11%</span> Increase
									</p>
								</div>
								<div class="col-md-6 col-lg-7">
									<div class="sparkline-line p-t-50"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-12 col-12 col-sm-12">
				<div class="card mt-sm-5 mt-md-0">
					<div class="card-header">
						<h4>Messages</h4>
					</div>
					<div class="card-body">
						<ul class="list-unstyled list-unstyled-border user-list" id="message-list">
							<li class="media"><img alt="image" src="assets/img/users/user-1.png"
									class="mr-3 user-img-radious-style user-list-img">
								<div class="media-body">
									<div class="mt-0 font-weight-bold">Cara Stevens</div>
									<div class="text-small">Hello How R You?</div>
								</div>
							</li>
							<li class="media"><img alt="image" src="assets/img/users/user-4.png"
									class="mr-3 user-img-radious-style user-list-img">
								<div class="media-body">
									<div class="mt-0 font-weight-bold">Airi Satou</div>
									<div class="text-small">Please email me regarding this</div>
								</div>
							</li>
							<li class="media"><img alt="image" src="assets/img/users/user-7.png"
									class="mr-3 user-img-radious-style user-list-img">
								<div class="media-body">
									<div class="mt-0 font-weight-bold">Angelica Ramos</div>
									<div class="text-small">Will You marry me??</div>
								</div>
							</li>
							<li class="media"><img alt="image" src="assets/img/users/user-2.png"
									class="mr-3 user-img-radious-style user-list-img">
								<div class="media-body">
									<div class="mt-0 font-weight-bold">Ashton Cox</div>
									<div class="text-small">Can't talk!!!</div>
								</div>
							</li>
							<li class="media"><img alt="image" src="assets/img/users/user-3.png"
									class="mr-3 user-img-radious-style user-list-img">
								<div class="media-body">
									<div class="mt-0 font-weight-bold">Cara Stevens</div>
									<div class="text-small">Request for leave application</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-12 col-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h4>Revenue</h4>
					</div>
					<div class="card-body">
						<h3 class="card-title">
							<i class="fas fa-dollar-sign col-green font-30 p-b-10"></i>
							763,215
						</h3>
						<canvas id="myChart3" height="170"></canvas>
						<div class="row p-t-20">
							<div class="col-6">
								<p class="text-muted font-15 text-truncate m-b-5">Target</p>
								<h5>
									<i class="fas fa-arrow-circle-up col-green m-r-5"></i>$15.3k
								</h5>
							</div>
							<div class="col-6">
								<p class="text-muted text-truncate m-b-5">Last Month</p>
								<h5>
									<i class="fas fa-arrow-circle-up col-green m-r-5"></i>$12.5k
								</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-12 col-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h4>TODO</h4>
					</div>
					<div class="card-body">
						<div class="tdl-content">
							<ul class="to-do-list ui-sortable">
								<li class="clearfix">
									<div class="form-check m-l-10">
										<label class="form-check-label"> <input class="form-check-input"
												type="checkbox" value="">
											Add salary details in system <span class="form-check-sign">
												<span class="check"></span>
											</span>
										</label>
									</div>
									<div class="todo-actionlist pull-right clearfix">
										<a href="#"> <i class="material-icons">clear</i>
										</a>
									</div>
								</li>
								<li class="clearfix">
									<div class="form-check m-l-10">
										<label class="form-check-label"> <input class="form-check-input"
												type="checkbox" value="">
											Announcement for holiday <span class="form-check-sign">
												<span class="check"></span>
											</span>
										</label>
									</div>
									<div class="todo-actionlist pull-right clearfix">
										<a href="#"> <i class="material-icons">clear</i>
										</a>
									</div>
								</li>
								<li class="clearfix">
									<div class="form-check m-l-10">
										<label class="form-check-label"> <input class="form-check-input"
												type="checkbox" value="">
											call bus driver <span class="form-check-sign"> <span
													class="check"></span>
											</span>
										</label>
									</div>
									<div class="todo-actionlist pull-right clearfix">
										<a href="#"> <i class="material-icons">clear</i>
										</a>
									</div>
								</li>
								<li class="clearfix">
									<div class="form-check m-l-10">
										<label class="form-check-label"> <input class="form-check-input"
												type="checkbox" value="">
											Office Picnic <span class="form-check-sign"> <span
													class="check"></span>
											</span>
										</label>
									</div>
									<div class="todo-actionlist pull-right clearfix">
										<a href="#"> <i class="material-icons">clear</i>
										</a>
									</div>
								</li>
								<li class="clearfix">
									<div class="form-check m-l-10">
										<label class="form-check-label"> <input class="form-check-input"
												type="checkbox" value="">
											Website Must Be Finished <span class="form-check-sign">
												<span class="check"></span>
											</span>
										</label>
									</div>
									<div class="todo-actionlist pull-right clearfix">
										<a href="#"> <i class="material-icons">clear</i>
										</a>
									</div>
								</li>
								<li class="clearfix">
									<div class="form-check m-l-10">
										<label class="form-check-label"> <input class="form-check-input"
												type="checkbox" value="">
											Recharge My Mobile <span class="form-check-sign"> <span
													class="check"></span>
											</span>
										</label>
									</div>
									<div class="todo-actionlist pull-right clearfix">
										<a href="#"> <i class="material-icons">clear</i>
										</a>
									</div>
								</li>
								<li class="clearfix">
									<div class="form-check m-l-10">
										<label class="form-check-label"> <input class="form-check-input"
												type="checkbox" value="">
											Add salary details in system <span class="form-check-sign">
												<span class="check"></span>
											</span>
										</label>
									</div>
									<div class="todo-actionlist pull-right clearfix">
										<a href="#"> <i class="material-icons">clear</i>
										</a>
									</div>
								</li>
							</ul>
						</div>
						<div class="">
							<input type="text" class="tdl-new form-control">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="card ">
					<div class="card-header">
						<h4>World wide sales</h4>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
								<div id="visitorMap"></div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<p class="text-muted mb-1">World wide sell in different countries</p>
								<div class="mb-4">
									<div class="progress-title">
										<span>Egypt</span>
										<span class="float-right">45%</span>
									</div>
									<div class="progress mb-3" data-height="5">
										<div class="progress-bar" role="progressbar" data-width="45%"
											aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<div class="mb-4">
									<div class="progress-title">
										<span>Nigeria</span>
										<span class="float-right">55%</span>
									</div>
									<div class="progress mb-3" data-height="5">
										<div class="progress-bar l-bg-purple" role="progressbar"
											data-width="55%" aria-valuenow="55" aria-valuemin="0"
											aria-valuemax="100"></div>
									</div>
								</div>
								<div class="mb-4">
									<div class="progress-title">
										<span>Canada</span>
										<span class="float-right">25%</span>
									</div>
									<div class="progress mb-3" data-height="5">
										<div class="progress-bar l-bg-orange" role="progressbar"
											data-width="25%" aria-valuenow="25" aria-valuemin="0"
											aria-valuemax="100"></div>
									</div>
								</div>
								<div class="mb-4">
									<div class="progress-title">
										<span>Turkey</span>
										<span class="float-right">43%</span>
									</div>
									<div class="progress mb-3" data-height="5">
										<div class="progress-bar l-bg-cyan" role="progressbar"
											data-width="43%" aria-valuenow="43" aria-valuemin="0"
											aria-valuemax="100"></div>
									</div>
								</div>
								<div class="mb-4">
									<div class="progress-title">
										<span>Australia</span>
										<span class="float-right">72%</span>
									</div>
									<div class="progress mb-3" data-height="5">
										<div class="progress-bar l-bg-green" role="progressbar"
											data-width="72%" aria-valuenow="72" aria-valuemin="0"
											aria-valuemax="100"></div>
									</div>
								</div>
								<div class="mb-4">
									<div class="progress-title">
										<span>Thailand</span>
										<span class="float-right">55%</span>
									</div>
									<div class="progress mb-3" data-height="5">
										<div class="progress-bar l-bg-purple" role="progressbar"
											data-width="55%" aria-valuenow="55" aria-valuemin="0"
											aria-valuemax="100"></div>
									</div>
								</div>
								<div class="mb-4">
									<div class="progress-title">
										<span>Panama</span>
										<span class="float-right">34%</span>
									</div>
									<div class="progress mb-3" data-height="5">
										<div class="progress-bar l-bg-orange" role="progressbar"
											data-width="34%" aria-valuenow="34" aria-valuemin="0"
											aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="settingSidebar">
		<a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa
					fa-spin fa-cog"></i>
		</a>
		<div class="settingSidebar-body ps-container ps-theme-default">
			<div class="fade show active">
				<div class="setting-panel-header">Setting Panel</div>
				<div class="p-15 border-bottom">
					<h6 class="font-medium m-b-10">Select Layout</h6>
					<div class="selectgroup layout-color w-50">
						<label class="selectgroup-item"> <input type="radio" name="value" value="1"
								class="selectgroup-input select-layout" checked> <span
								class="selectgroup-button">Light</span>
						</label> <label class="selectgroup-item"> <input type="radio" name="value" value="2"
								class="selectgroup-input select-layout">
							<span class="selectgroup-button">Dark</span>
						</label>
					</div>
				</div>
				<div class="p-15 border-bottom">
					<h6 class="font-medium m-b-10">Sidebar Color</h6>
					<div class="selectgroup selectgroup-pills sidebar-color">
						<label class="selectgroup-item"> <input type="radio" name="icon-input" value="1"
								class="selectgroup-input select-sidebar"> <span
								class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
								data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
						</label> <label class="selectgroup-item"> <input type="radio" name="icon-input"
								value="2" class="selectgroup-input select-sidebar" checked> <span
								class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
								data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
						</label>
					</div>
				</div>
				<div class="p-15 border-bottom">
					<h6 class="font-medium m-b-10">Color Theme</h6>
					<div class="theme-setting-options">
						<ul class="choose-theme list-unstyled mb-0">
							<li title="white" class="active">
								<div class="white"></div>
							</li>
							<li title="cyan">
								<div class="cyan"></div>
							</li>
							<li title="black">
								<div class="black"></div>
							</li>
							<li title="purple">
								<div class="purple"></div>
							</li>
							<li title="orange">
								<div class="orange"></div>
							</li>
							<li title="green">
								<div class="green"></div>
							</li>
							<li title="red">
								<div class="red"></div>
							</li>
						</ul>
					</div>
				</div>
				<div class="p-15 border-bottom">
					<div class="theme-setting-options">
						<label> <span class="control-label p-r-20">Mini
								Sidebar</span> <input type="checkbox" name="custom-switch-checkbox"
								class="custom-switch-input" id="mini_sidebar_setting">
							<span class="custom-switch-indicator"></span>
						</label>
					</div>
				</div>
				<div class="p-15 border-bottom">
					<div class="theme-setting-options">
						<div class="disk-server-setting m-b-20">
							<p>Disk Space</p>
							<div class="sidebar-progress">
								<div class="progress" data-height="5">
									<div class="progress-bar l-bg-green" role="progressbar" data-width="80%"
										aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<span class="progress-description"> <small>26%
										remaining</small>
								</span>
							</div>
						</div>
						<div class="disk-server-setting">
							<p>Server Load</p>
							<div class="sidebar-progress">
								<div class="progress" data-height="5">
									<div class="progress-bar l-bg-orange" role="progressbar"
										data-width="58%" aria-valuenow="25" aria-valuemin="0"
										aria-valuemax="100"></div>
								</div>
								<span class="progress-description"> <small>Highly
										Loaded</small>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
					<a href="#" class="btn btn-icon icon-left btn-primary
							btn-restore-theme">
						<i class="fas fa-undo"></i> Restore Default
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection