@if(Auth::user()->role<=1)
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') - Bảng điều khiển</title>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
  @if(Session::has('message'))
    var type="{{Session::get('alert-type','info')}}"

    switch(type){
      case 'info':
             toastr.info("{{ Session::get('message') }}");
             break;
          case 'success':
              toastr.success("{{ Session::get('message') }}");
              break;
          case 'warning':
              toastr.warning("{{ Session::get('message') }}");
              break;
          case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
  @endif
</script>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<!-- Our Custom CSS -->
<link rel="stylesheet" href="{{asset('css/admin.css')}}">

<!-- Font Awesome JS -->
<script src="https://kit.fontawesome.com/9d5d980696.js" crossorigin="anonymous"></script>
</head>

<body>
    <section class="layout-admin">
        <div class="wrapper">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>W6sharing</h3>
                    <strong>W6</strong>
                </div>
                <ul class="list-unstyled components">
                    <li>
                        <a href="{{ route('admin') }}">
                            <i class="fas fa-briefcase"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('user.index') }}">
                            <i class="fas fa-briefcase"></i>
                            Tài khoản
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('category.index') }}">
                            <i class="fas fa-image"></i>
                            Danh mục
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('product.index') }}">
                            <i class="fas fa-question"></i>
                            Sản phẩm
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('order.index') }}">
                            <i class="fas fa-paper-plane"></i>
                            Đơn hàng
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('new.index') }}">
                            <i class="fas fa-paper-plane"></i>
                            Tin tức
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('tag.index') }}">
                            <i class="fas fa-paper-plane"></i>
                            Tag
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('feedback.index') }}">
                            <i class="fas fa-paper-plane"></i>
                            Phản hồi
                        </a>
                    </li>
                                        <li>
                        <a href="{{ route('vote.index') }}">
                            <i class="fas fa-briefcase"></i>
                            Vote
                        </a>
                    </li>
                </ul>
            </nav>
            <div id="content">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <button type="button" id="sidebarCollapse" class="">
                            <i class="fas fa-align-left"></i>
                        </button>
                        <button class="d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-align-justify"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><b>{{ Auth::user()->name }}</b> (@if(Auth::user()->role==0)
                                        Quản trị viên
                                        @elseif((Auth::user()->role==1))
                                        Cộng tác viên 
                                        @else 
                                        Người dùng 
                                    @endif)</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout')}}">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="main-content">
                  @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
        @endif
                    @yield('content')
                </div>
            </div>
        </div>
    </section>
    

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
        $(document).ready(function() {
            $('#dataTable').DataTable();
        } );
      @if(Session::has('message'))
      var type="{{Session::get('alert-type','info')}}"

      
      switch(type){
          case 'info':
          toastr.info("{{ Session::get('message') }}");
          break;
          case 'success':
          toastr.success("{{ Session::get('message') }}");
          break;
          case 'warning':
          toastr.warning("{{ Session::get('message') }}");
          break;
          case 'error':
          toastr.error("{{ Session::get('message') }}");
          break;
      }
      @endif
    </script>
    <script type="text/javascript">
          @if(Session::has('message'))
      var type="{{Session::get('alert-type','info')}}"

      
      switch(type){
          case 'info':
          toastr.info("{{ Session::get('message') }}");
          break;
          case 'success':
          toastr.success("{{ Session::get('message') }}");
          break;
          case 'warning':
          toastr.warning("{{ Session::get('message') }}");
          break;
          case 'error':
          toastr.error("{{ Session::get('message') }}");
          break;
      }
      @endif
    </script>
</body>

</html>

@else
<script>window.location = "{{ url('/') }}";</script>
@endif