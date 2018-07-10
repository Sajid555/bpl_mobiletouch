<!-- Left Sidebar Menu -->
<div class="fixed-sidebar-left">
	<ul class="nav navbar-nav side-nav nicescroll-bar">
		<li class="navigation-header">
			<span>Main</span> 
			<i class="zmdi zmdi-more"></i>
		</li>
		<li>
			<a class="active" href="{{url('/admindashboard')}}" data-toggle="collapse" data-target="#dashboard_dr"><div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
		</li>

		<li><hr class="light-grey-hr mb-10"/></li>
		<li class="navigation-header">
			<span>Functionalities</span> 
			<i class="zmdi zmdi-more"></i>
		</li>
		<li>
			<a href="javascript:void(0);" data-toggle="collapse" data-target="#Product"><div class="pull-left"><i class="zmdi zmdi-smartphone-setup mr-20"></i><span class="right-nav-text">Product Management</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
			<ul id="Product" class="collapse collapse-level-1 two-col-list">
				<li>
					<a href="{{url('/brands')}}">Brands</a>
				</li>
				<li>
					<a href="{{url('/addproducts')}}">Add Product</a>
				</li>
				<li>
					<a href="{{url('/addbrand')}}">Add Brand</a>
				</li>
				<li>
					<a href="{{url('/addmodel')}}">Add Model</a>
				</li>
				<li>
					<a href="{{url('/insert')}}">Add Multipule Images</a>
				</li>
				<li>
					<a href="{{url('/slider')}}">Add slider images</a>
				</li>
				<li>
					<a href="{{url('/orders')}}">Orders</a>
				</li>
				<li>
					<a href="#">Cart</a>
				</li>
				<li>
					<a href="{{url('/')}}">Home</a>
				</li>
			</ul>
		</li>
	</ul>
</div>
