<header class="main-header" style="background-color: skyblue">
    <!-- Logo -->
  
      <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
      
    </a>
  
    <!-- Header Navbar: style can be found in header.less -->
  
      <!-- Sidebar toggle button-->
     

     
          <!-- Messages: style can be found in dropdown.less-->
         
          <!-- User Account: style can be found in dropdown.less -->
         
           
             
                  
                  <div class="row" style="padding-top: 24px;">
                   <div class="col-md-6">
                      <marquee width="100%" behavior="alternate"  >  
    Hello    {{ Auth::user()->name }}
</marquee>

                   </div>
                   <div class="col-md-6">
                     <a href="{{url('admin/logout')}}"   class="btn btn-primary " style="float: right;width: 90px;">SigOut</a>
                   </div>
                  </div>
                  
                    
               
               
             
             
        
        
            
         
          <!-- Control Sidebar Toggle Button -->
          
       
      
   
  </header>