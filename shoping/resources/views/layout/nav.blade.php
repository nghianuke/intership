 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('images/nghia.jpg')}}" class="img-circle" alt="User Image" style="width: 160px;height: 50px;">
        </div>
       
        <div class="pull-left info">
          <p class="header mt-3 fa fa-circle text-success">Trương Nghĩa</p>
         <!--  <a href="{{url('abc')}}"><i class="fa fa-circle text-success"></i>Page Home</a> -->
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Manager</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            
            
            <li><a href="{{url( 'brand')}}"><i class="fa fa-circle-o"></i>brand</a></li>
            <li class="active"><a href="{{url('category')}}"><i class="fa fa-circle-o"></i>Manager Category </a></li>
            <li><a href="{{url('customer')}}"><i class="fa fa-circle-o"></i>cutomer</a></li>
            <li><a href="{{url('product')}}"><i class="fa fa-circle-o"></i>Manager Product</a></li>
              <li class="active"><a href="{{url('order')}}"><i class="fa fa-circle-o"></i>Order </a></li>
          </ul>
           
        </li>
        
        
        
        
          
        
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>