
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />	
	<title>Wolf - Bootstrap Admin Theme</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  	
  	<link data-turbolinks-track="true" href="/assets/application-b9abcf044a0bc3e705568d103eddd00e.css" media="all" rel="stylesheet" />
  	<script data-turbolinks-track="true" src="/assets/application-851b8fea8f29120d8b765082481c5168.js"></script>
  	<meta content="authenticity_token" name="csrf-param" />
<meta content="fPvi7bUfA4Tl7+6oWujgM8nLnjBSNR4hqge7+v+sGuw=" name="csrf-token" />

  	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body id="account">
	
	<div id="wrapper">
    
        <div id="sidebar-default" class="main-sidebar fix-scroll">
  <div class="current-user">
      <a href="#" class="name">
        <img alt="1" class="avatar" src="/assets/avatars/1-60c47167290e620ea8ef2aa01d40c05e.jpg" />
        <span>
          John Smith
          <i class="fa fa-chevron-down"></i>
        </span>
      </a>
      <ul class="menu">
        <li>
          <a href="/1.1/account/settings">Account settings</a>
        </li>
        <li>
          <a href="/1.1/account/billing">Billing</a>
        </li>
        <li>
          <a href="/1.1/account/notifications">Notifications</a>
        </li>
        <li>
          <a href="/1.1/account/support">Help / Support</a>
        </li>
        <li>
          <a href="/1.1/features/signin">Sign out</a>
        </li>
      </ul>
  </div>
  <div class="menu-section">
    <h3>General</h3>
    <ul>
      <li class="option">
        <a href="http://wolfadmin.herokuapp.com/1.1" class="active">
          <i class="ion-android-earth"></i> 
          <span>Dashboard</span>
        </a>
      </li>
      <li class="option">
        <a href="#" data-toggle="sidebar">
          <i class="ion-person-stalker"></i> <span>Lists & Tables</span>
          <i class="fa fa-chevron-down"></i>
        </a>
        <ul class="submenu">
          <li><a href="/1.1/lists/users">Customers list</a></li>
          <li><a href="/1.1/lists/datatables">Orders (Datatables)</a></li>
          <li><a href="/1.1/lists/products">Products (Filters)</a></li>
        </ul>
      </li>
      <li class="option">
        <a href="#" data-toggle="sidebar">
          <i class="ion-stats-bars"></i> <span>Reports</span>
          <i class="fa fa-chevron-down"></i>
        </a>
        <ul class="submenu">
          <li><a href="/1.1/reports/orders">Reports orders</a></li>
          <li><a href="/1.1/reports/sales">Report sales</a></li>
        </ul>
      </li>
      <li class="option">
        <a href="#" data-toggle="sidebar">
          <i class="ion-pricetags"></i> <span>Forms</span>
          <i class="fa fa-chevron-down"></i>
        </a>
        <ul class="submenu">
          <li><a href="/1.1/forms/new_customer">New Customer (validation)</a></li>
          <li><a href="/1.1/forms/new_product">New Product (add-ons)</a></li>
          <li><a href="/1.1/forms/wizard">Wizard</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="menu-section">
    <h3>Application</h3>
    <ul>
      <li class="option">
        <a href="#" data-toggle="sidebar">
          <i class="ion-earth"></i> <span>App Pages</span>
          <i class="fa fa-chevron-down"></i>
        </a>
        <ul class="submenu">
          <li><a href="/1.1/pages/inbox">Inbox Messages</a></li>
          <li><a href="/1.1/pages/profile">User profile</a></li>
          <li><a href="/1.1/pages/latest_activity">Latest activity</a></li>
          <li><a href="/1.1/pages/projects">Projects</a></li>
          <li><a href="/1.1/pages/steps">Steps to launch</a></li>
          <li><a href="/1.1/pages/calendar">Calendar</a></li>
        </ul>
      </li>
      <li class="option">
        <a href="#" data-toggle="sidebar">
          <i class="ion-card"></i> <span>Pricing</span>
          <i class="fa fa-chevron-down"></i>
        </a>
        <ul class="submenu">
          <li><a href="/1.1/pricing/plans">Pricing (Plans)</a></li>
          <li><a href="/1.1/pricing/charts">Pricing charts</a></li>
          <li><a href="/1.1/pricing/form">Billing form</a></li>
          <li><a href="/1.1/pricing/invoice">Invoice</a></li>
        </ul>
      </li>
      <li class="option">
        <a href="#" data-toggle="sidebar">
          <i class="ion-flash"></i> <span>Features</span>
          <i class="fa fa-chevron-down"></i>
        </a>
        <ul class="submenu">
          <li><a href="/1.1/features/email_templates">Email templates</a></li>
          <li><a href="/1.1/features/gallery">Gallery</a></li>
          <li><a href="/1.1/features/ui" data-no-turbolink>UI Extras</a></li>
          <li><a href="/1.1/features/api">API Documentation</a></li>
          <li><a href="/1.1/features/signup">Sign up</a></li>
          <li><a href="/1.1/features/signin">Sign in</a></li>
          <li><a href="/1.1/features/status">App Status</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="menu-section">
    <h3>Admin</h3>
    <ul>
      <li class="option">
        <a href="#" data-toggle="sidebar">
          <i class="ion-person"></i> <span>My account</span>
          <i class="fa fa-chevron-down"></i>
        </a>
        <ul class="submenu">
          <li><a href="/1.1/account/settings">Settings</a></li>
          <li><a href="/1.1/account/billing">Billing</a></li>
          <li><a href="/1.1/account/notifications">Notifications</a></li>
          <li><a href="/1.1/account/support">Support</a></li>
        </ul>
      </li>
      <li class="option">
        <a href="#" data-toggle="sidebar">
          <i class="ion-usb"></i> <span>Level Navigation</span>
          <i class="fa fa-chevron-down"></i>
        </a>
        <ul class="submenu">
          <li>
            <a href="invoice.html" data-toggle="sidebar">
              Submenu
              <i class="fa fa-chevron-down"></i>
            </a>
            <ul class="submenu">
              <li><a href="#">Last menu</a></li>
              <li><a href="#">Last menu</a></li>
            </ul>
          </li>
          <li><a href="#">Menu link</a></li>
          <li><a href="#">Extra link</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="bottom-menu hidden-sm">
    <ul>
      <li><a href="#"><i class="ion-help"></i></a></li>
      <li>
        <a href="#">
          <i class="ion-archive"></i>
          <span class="flag"></span>
        </a>
        <ul class="menu">
          <li><a href="#">5 unread messages</a></li>
          <li><a href="#">12 tasks completed</a></li>
          <!-- <li><a href="#">3 features added</a></li> -->
        </ul>
      </li>
      <li><a href="/1.1/features/signin"><i class="ion-log-out"></i></a></li>
    </ul>
  </div>
</div>

        <div id="content">
          

<div id="sidebar">
	<div class="sidebar-toggler visible-xs">
		<i class="ion-navicon"></i>
	</div>
	
	<h3>My account</h3>
	<ul class="menu">
		<li>
			<a href="/1.1/account/settings" class="active">
				<i class="ion-ios7-person-outline"></i>
				Profile
			</a>
		</li>
		<li>
			<a href="/1.1/account/billing">
				<i class="ion-card"></i>
				Billing
			</a>
		</li>
		<li>
			<a href="/1.1/account/notifications">
				<i class="ion-ios7-email-outline"></i>
				Notifications
			</a>
		</li>
		<li>
			<a href="/1.1/account/support">
				<i class="ion-ios7-help-outline"></i>
				Support
			</a>
		</li>
	</ul>
</div>

<div id="panel" class="profile">
	<h3>
		Profile settings
	</h3>

	<p class="intro">
		Change your account information, avatar, login credentials, etc.
	</p>

	<form>
		<div class="form-group avatar-field clearfix">
		    <div class="col-sm-3">
		    	<img alt="7" class="img-responsive img-circle" src="/assets/avatars/7-b553f4126f8fb9c86a5b59336f2cb9de.jpg" />
		    </div>
		    <div class="col-sm-9">
		    	<label>Set up your avatar picture</label>
		      	<input type="file" />
	    	</div>
	  	</div>
	  	<div class="form-group">
			<label>Name</label>
			<input type="email" class="form-control" placeholder="Enter email" value="John Smith Jr" />
		</div>
	  	<div class="form-group">
			<label>Email address</label>
			<input type="email" class="form-control" placeholder="Enter email" value="john@gmail.com" />
		</div>
		<div class="form-group">
			<label>Timezone</label>
			<select id="user_time_zone" data-smart-select>
				<option value="Hawaii">(GMT-10:00) Hawaii</option>
				<option value="Alaska">(GMT-09:00) Alaska</option>
				<option value="Pacific Time (US &amp; Canada)">
					(GMT-08:00) Pacific Time (US &amp; Canada)
				</option>
				<option value="Arizona">(GMT-07:00) Arizona</option>
				<option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
				<option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
				<option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
				<option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
				<option value="" disabled="disabled">-------------</option>
				<option value="American Samoa">(GMT-11:00) American Samoa</option>
				<option value="International Date Line West">(GMT-11:00) International Date Line West</option>
				<option value="Midway Island">(GMT-11:00) Midway Island</option>
				<option value="Tijuana">(GMT-08:00) Tijuana</option>
				<option value="Chihuahua">(GMT-07:00) Chihuahua</option>
				<option value="Mazatlan">(GMT-07:00) Mazatlan</option>
				<option value="Central America">(GMT-06:00) Central America</option>
				<option value="Guadalajara">(GMT-06:00) Guadalajara</option>
				<option value="Mexico City">(GMT-06:00) Mexico City</option>
				<option value="Monterrey" >(GMT-06:00) Monterrey</option>
			</select>
		</div>
		<div class="form-group">
			<label>Street & Number</label>
			<input type="text" class="form-control" placeholder="Enter email" value="5th Avenue 3053" />
		</div>
		<div class="form-group">
			<label>City</label>
			<input type="text" class="form-control" placeholder="Enter email" value="San Francisco" />
		</div>
		<div class="form-group">
			<label>ZIP</label>
			<input type="text" class="form-control" placeholder="Enter email" value="3352" />
		</div>
		<div class="form-group">
			<label>New password</label>
			<input type="password" class="form-control" />
		</div>
		<div class="form-group">
			<label>Confirm new password</label>
			<input type="password" class="form-control" />
		</div>
		<div class="form-group action">
			<input type="submit" class="btn btn-success" value="Save changes" />
		</div>
	</form>
</div>
        </div>  
    </div>

    <div class="skin-switcher">
	<div class="toggler">
		<span class="brankic-brush"></span>
	</div>
	<ul class="menu">
		<li>
			<a class="active" data-skin="sidebar-default" href="#">
				<span class="color default"></span> Default
				<i class="fa fa-check"></i>
			</a>
		</li>
		<li>
			<a data-skin="sidebar-clear" href="#">
				<span class="color clear"></span> Clear
				<i class="fa fa-check"></i>
			</a>
		</li>
		<li>
			<a data-skin="sidebar-black" href="#">
				<span class="color black"></span> Black
				<i class="fa fa-check"></i>
			</a>
		</li>
		<li>
			<a data-skin="sidebar-dark" href="#">
				<span class="color dark"></span> Dark
				<i class="fa fa-check"></i>
			</a>
		</li>
		<li>
			<a data-skin="sidebar-flat" href="#">
				<span class="color flat"></span> Flat
				<i class="fa fa-check"></i>
			</a>
		</li>
		<li>
			<a data-skin="sidebar-flat-dark" href="#">
				<span class="color flat-dark"></span> Flat dark
				<i class="fa fa-check"></i>
			</a>
		</li>
	</ul>
</div>

    
</body>
</html>
