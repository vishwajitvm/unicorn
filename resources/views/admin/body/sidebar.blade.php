@php
    $prefix = Request::route()->getprefix() ;
    $route = Route::current()->getName() ;
@endphp
{{-- @dd($prefix) ; check which prefix is calling now --}}  

  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href=" {{ Route('dashboard') }}">
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
		  
		<li class="{{ ($route == 'dashboard')?'active':'' }}">
          <a href=" {{ Route('dashboard') }} ">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  

        <li class="treeview {{ ($prefix == '/profile')?'active':'' }}">
          <a href="#">
            <i data-feather="message-circle"></i> <span>Manage Profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=" {{Route('profile.view')}} "><i class="ti-more"></i>Your Profile</a></li>
            <li><a href=" {{Route('password.view')}} "><i class="ti-more"></i>Change Password</a></li>
          </ul>
        </li>

        <li class="header nav-small-cap">MANAGE DEALERS</li>		  

		
        <li class="treeview {{ ($prefix == '/users')?'active':'' }} " >
          <a href="#">
            <i data-feather="user"></i>
            <span>Manage User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('users.add') }} "><i class="ti-more"></i>Add Users</a></li>
            <li> <a href="{{ route('user.managerequest') }} "><i class="ti-more"></i> Pending Request </a> </li>
            <li><a href="{{route('user.view')}} "><i class="ti-more"></i>View All User</a></li>
            <li><a href="{{route('user.viewadmin')}} "><i class="ti-more"></i>View All Admin</a></li>
            {{-- <li> <a href=" {{ Route('user.inactiveusers') }} "><i class="ti-more"></i> Inactive User </a> </li> --}}

          </ul>
        </li> 
		  
        

        <li class="treeview {{ ($prefix == '/dealers')?'active':'' }}">
          <a href="#">
            <i data-feather="message-circle"></i> <span>Manage Dealers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=" {{Route('dealers.add')}} "><i class="ti-more"></i>Add Dealers</a></li>
            <li><a href=" {{Route('password.view')}} "><i class="ti-more"></i>View Dealers</a></li>
          </ul>
        </li>

        <li class="header nav-small-cap">MANAGE PARTS & SERVICES</li>		  
          <!--CAtaggory  work here-->
        <li class="treeview {{ ($prefix == '/service-request')?'active':'' }}">
          <a href="#">
            <i data-feather="globe"></i> <span>Manage Services </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=" {{ Route('service-request.view') }}  "><i class="ti-more"></i>view Service Request </a></li>
          </ul>
        </li>
        <!--CATAGORY work here-->

        <li class="treeview {{ ($prefix == '/manage-parts')?'active':'' }}">
          <a href="#">
            <i data-feather="server"></i><span>Manage Parts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ Route('manage-parts.add') }}"><i class="ti-more"></i>Add Parts</a></li>
            <li><a href="{{ Route('manage-parts.view') }}"><i class="ti-more"></i>View Parts</a></li>
          </ul>
        </li>

        <li class="header nav-small-cap">MANAGE WEBSITE MACHINE REQUEST</li>
        
        <!--CAtaggory  work here-->
        <li class="treeview {{ ($prefix == '/website-machine-request')?'active':'' }}">
          <a href="#">
            <i data-feather="globe"></i> <span>Machine Request </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=" {{ Route('website-machine-request.view') }}  "><i class="ti-more"></i>view Machine Request </a></li>
          </ul>
        </li>
        <!--CATAGORY work here-->


        <li class="header nav-small-cap">MANAGE MACHINES</li>		  

        <!--CAtaggory  work here-->
        <li class="treeview {{ ($prefix == '/maincategory')?'active':'' }}">
          <a href="#">
            <i data-feather="mail"></i> <span>Manage Category </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ Route('maincategory.add') }} "><i class="ti-more"></i>Add main Category </a></li>
            <li><a href=" {{ Route('maincategory.view') }}  "><i class="ti-more"></i>view Main Category </a></li>
            {{-- <li><a href="#"><i class="ti-more"></i>Read</a></li> --}}
          </ul>
        </li>
        <!--CATAGORY work here-->


        <!--main MAchine work here-->
        <li class="treeview {{ ($prefix == '/mainmachine')?'active':'' }}">
          <a href="#">
            <i data-feather="mail"></i> <span>Main Machine</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('mainmachine.add') }} "><i class="ti-more"></i>Add main machine</a></li>
            <li><a href=" {{ route('mainmachine.view') }}  "><i class="ti-more"></i>view main machine</a></li>
            {{-- <li><a href="#"><i class="ti-more"></i>Read</a></li> --}}
          </ul>
        </li>
        <!--main machine work here-->

        <!--submachine work here-->
        <li class="treeview  {{ ($prefix == '/submachine')?'active':'' }} ">
          <a href="#">
            <i data-feather="mail"></i> <span>Sub Machine</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('submachine.add') }} "><i class="ti-more"></i>Add Sub Machine</a></li>
            <li><a href=" {{ route('submachine.view') }} "><i class="ti-more"></i>View Sub Machine</a></li>
            {{-- <li><a href="#"><i class="ti-more"></i>Read</a></li> --}}
          </ul>
        </li>
        <!--sub machine work here-->

        <li class="header nav-small-cap">MANAGE DEALS</li>		  


        <!--manage buyer details-->
        <li class="treeview {{ ($prefix == '/buyerdetails')?'active':'' }}  ">
          <a href="#">
            <i data-feather="mail"></i> <span>Manage Buyers Details</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=" {{ route('buyerdetails.viewEquipmentRequest') }} "><i class="ti-more"></i>View All Requests  </a></li>
            <li><a href=" {{ route('buyerdetails.viewEquipmentRequestUser') }} "><i class="ti-more"></i> Users Equipment Requests  </a></li>
            <li><a href=" {{ route('buyerdetails.proforma') }} "><i class="ti-more"></i>  Add Proforma Invoice </a></li>
            <li><a href=" {{ route('buyerdetails.viewproforma') }} "><i class="ti-more"></i> View Proforma Invoice </a></li>

            <li><a href=" {{ route('buyerdetails.add') }} "><i class="ti-more"></i> Upload Invoice </a></li>
            <li><a href=" {{ route('buyerdetails.view') }} "><i class="ti-more"></i> View Invoice </a></li>
          </ul>
        </li>
        <!--manage buyer details-->
        

        <li class="treeview {{ ($prefix == '/assignproduct')?'active':'' }} ">
          <a href="#">
            <i data-feather="mail"></i> <span>Assign Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=" {{ route('assignproduct.add') }} "><i class="ti-more"></i>assign Products</a></li>
            <li><a href=" {{ route('assignproduct.userview') }} "><i class="ti-more"></i>View User assign Products</a></li>
            <li><a href=" {{ route('assignproduct.view') }} "><i class="ti-more"></i>View All Assigned Products</a></li>
          </ul>
        </li>

        <li class="header nav-small-cap">MANAGE WARRANTY</li>		  


        <li class="treeview {{ ($prefix == '/claimrequest')?'active':'' }}  ">
          <a href="#">
            <i data-feather="grid"></i>
            <span>Incurance Claim</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('claimrequest.view') }}"><i class="ti-more"></i>  All Insurance Claim </a></li>
            <li><a href=" {{ route('claimrequest.newview') }}" ><i class="ti-more"></i> New Insurace Claim</a></li> 
            <li><a href=" {{ route('claimrequest.approvedview') }} "><i class="ti-more"></i>Approved Insurance Claims</a></li>  
            <li><a href="  {{ route('claimrequest.deniedview') }}  "><i class="ti-more"></i>Denied Insurance Claims</a></li> 

          </ul>
        </li>

        <li class="header nav-small-cap">MANAGE GALLARY & VIDEOS</li>	
        
        <li class="treeview {{ ($prefix == '/gallery')?'active':'' }}">
          <a href="#">
            <i data-feather="server"></i>
          <span>Manage Gallary</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('gallery.add') }}"><i class="ti-more"></i>Add Gallery</a></li>
            <li><a href=" {{route('gallery.view')  }} "><i class="ti-more"></i>View Gallery</a></li>
          </ul>
        </li>

        <li class="treeview {{ ($prefix == '/managevideos')?'active':'' }}">
          <a href="#">
            <i data-feather="server"></i>
            <span>Manage Videos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('managevideos.add') }}"><i class="ti-more"></i>Add Videos</a></li>
            <li><a href="{{ route('managevideos.view') }}"><i class="ti-more"></i>View Videos</a></li>
          </ul>
        </li>



		
		  
		<li class="header nav-small-cap">EXTRA</li>		  
		  
        
		  
		<li>
          <a href="{{Route('admin.logout')}}">
            <i data-feather="lock"></i>
			<span>Log Out</span>
          </a>
        </li> 
        
      </ul>
    </section>
	
	
  </aside>

 


