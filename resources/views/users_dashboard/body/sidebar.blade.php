<!--active sidbar menu functionality -->
@php
    $prefix = Request::route()->getprefix() ;
    $route = Route::current()->getName() ;
@endphp
{{-- @dd($route) --}}
<!--end active sidebar functionality here-->

<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href=" {{Route('userdashboard')}}">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="{{asset('backend/images/logo.png')}}" style="width: 50%" alt="">
						  {{-- <h3><b> Unicorn </b> Admin</h3> --}}
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li class="{{ ($route == 'userdashboard')?'active':'' }}">
          <a href="{{Route('userdashboard')}}">
            <i data-feather="pie-chart"></i>
			<span> Your Dashboard</span>
          </a>
        </li>  
		
        <li class="treeview {{ ($prefix == '/userprofile')?"active":"" }} ">
            <a href="#">
              <i data-feather="mail"></i> <span>Manage User Profile</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href=" {{ route('userprofile.view') }} "><i class="ti-more"></i>Your Profile</a></li>
              <li><a href=" {{ Route('userpassword.view') }} "><i class="ti-more"></i>Change Password</a></li>
            </ul>
          </li>
            
        <li class="treeview {{ ($prefix == '/userproducts')?"active":"" }}  ">
          <a href="#">
            <i data-feather="mail"></i> <span>Product Request</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('userproducts.addrequest') }}"><i class="ti-more"></i>Send Request</a></li>
            <li><a href="{{ route('userproducts.view') }}"><i class="ti-more"></i>All Requested Products</a></li>
          </ul>
        </li>

        <li class="treeview {{ ($prefix == '/userperformainvoice')?"active":"" }} ">
          <a href="#">
            <i data-feather="mail"></i> <span>Proforma Invoice</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('userperformainvoice.view') }}"><i class="ti-more"></i>View  Proforma Invoice</a></li>
          </ul>
      </li>

        <li class="treeview {{ ($prefix == '/userinvoice')?"active":"" }} ">
            <a href="#">
              <i data-feather="mail"></i> <span>Invoices</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('userinvoice.view') }}"><i class="ti-more"></i>View All Invoice</a></li>
            </ul>
        </li>

        <li class="treeview {{ ($prefix == '/myproduct')?"active":"" }} ">
            <a href="#">
              <i data-feather="mail"></i> <span>My Products</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href=" {{ route('myproduct.view') }} "><i class="ti-more"></i>View All Products</a></li>
              <li><a href=" {{ route('myproduct.claimlist') }} "><i class="ti-more"></i>Claim List</a></li>
              <li><a href="mailbox_read_mail.html"><i class="ti-more"></i>Read</a></li>
            </ul>
        </li>

			  
		  
        <li class="header nav-small-cap">EXTRA</li>		  

		  
		<li>
          <a href="{{Route('userdashboard.logout')}}">
            <i data-feather="lock"></i>
			<span>Log Out</span>
          </a>
        </li> 
        
      </ul>
    </section>
	
	
  </aside>