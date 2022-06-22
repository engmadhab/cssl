@php
    $current_route = request()->route()->getName();
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="./dashboard" class="brand-link">
      <img src="{{asset('admin-assets/dist/img/AdminLTELogo.png')}}" alt="Admin CSSL Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin CSSL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin-assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->name}}</a>
        </div>
      </div>
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link {{$current_route == 'dashboard'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item {{$current_route == 'users.index'?'menu-open':''}}">
            <a href="#" class="nav-link {{$current_route == 'users.index'?'active':''}}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                User Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('users.index')}}" class="nav-link {{$current_route == 'users.index'?'active':''}}">
                  <i class="far fa-user nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
             
            </ul>
          </li>
          
          <li class="nav-item {{$current_route == 'service.index'?'menu-open':''}}">
            <a href="#" class="nav-link {{$current_route == 'service.index'?'active':''}}">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Service Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('service.index')}}" class="nav-link {{$current_route == 'service.index'?'active':''}}">
                  <i class="far fa-cog nav-icon"></i>
                  <p>All Services</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('service.create')}}" class="nav-link {{$current_route == 'service.create'?'active':''}}">
                  <i class="far fa-cog nav-icon"></i>
                  <p>Create New</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item {{$current_route == 'news.index'?'menu-open':''}}">
            <a href="#" class="nav-link {{$current_route == 'news.index'?'active':''}}">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                News Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('news.index')}}" class="nav-link {{$current_route == 'news.index'?'active':''}}">
                  <i class="far fa-cog nav-icon"></i>
                  <p>All News</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('news.create')}}" class="nav-link {{$current_route == 'news.create'?'active':''}}">
                  <i class="far fa-cog nav-icon"></i>
                  <p>Create News</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item {{$current_route == 'ourclient.index'?'menu-open':''}}">
            <a href="#" class="nav-link {{$current_route == 'ourclient.index'?'active':''}}">
              <i class="nav-icon fas fa-code-branch"></i>
              <p>
                Clients Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('ourclient.index')}}" class="nav-link {{$current_route == 'ourclient.index'?'active':''}}">
                  <i class="far fa-cog nav-icon"></i>
                  <p>All Clients</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('ourclient.create')}}" class="nav-link {{$current_route == 'ourclient.create'?'active':''}}">
                  <i class="far fa-cog nav-icon"></i>
                  <p>New Client</p>
                </a>
              </li>
             
            </ul>
          </li>

          <!-- <li class="nav-item">
            <a href="#" class="nav-link btn btn-danger">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>            
          </li> -->

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>