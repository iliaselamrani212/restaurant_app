<!DOCTYPE html>
<html lang="en">

<head>
   <title>@yield('title')</title>
   <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
   <!-- Favicon icon -->
   <link rel="shortcut icon" href="{!! asset('images/favicon.png') !!}" type="image/x-icon">
   <link rel="icon" href=" {!! asset('images/favicon.ico') !!}" type="image/x-icon">

   <!-- Google font-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

   <!-- themify -->
   <link rel="stylesheet" type="text/css" href=" {!! asset('icon/themify-icons/themify-icons.css') !!}">

   <!-- iconfont -->
   <link rel="stylesheet" type="text/css" href="{!! asset('icon/icofont/css/icofont.css ') !!}">

   <!-- simple line icon -->
   <link rel="stylesheet" type="text/css" href=" {!! asset('icon/simple-line-icons/css/simple-line-icons.css') !!}">

   <!-- Required Fremwork -->
   <link rel="stylesheet" type="text/css" href="{!! asset('plugins/bootstrap/css/bootstrap.min.css') !!}">

   <!-- Chartlist chart css -->
   <link rel="stylesheet" href=" {!! asset('plugins/chartist/dist/chartist.css') !!}" type="text/css" media="all">

   <!-- Weather css -->
   <link href="{!! asset('css/svg-weather.css') !!}" rel="stylesheet">


   <!-- Style.css -->
   <link rel="stylesheet" type="text/css" href="{!! asset('css/main.css') !!}">

   <!-- Responsive.css-->
   <link rel="stylesheet" type="text/css" href="{!! asset('css/responsive.css') !!}">

</head>

<body class="sidebar-mini fixed">
   <div class="loader-bg">
      <div class="loader-bar">
      </div>
   </div>
   <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header-top hidden-print">
         <a href="index.html" class="logo"><img class="img-fluid able-logo" src="assets/images/logo.png" alt="Theme-logo"></a>
         <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
            <ul class="top-nav lft-nav">
                             
               
               <li class="dropdown pc-rheader-submenu message-notification search-toggle">
                  
               </li>
            </ul>
            <!-- Navbar Right Menu-->
            <div class="navbar-custom-menu f-right">
              

               <ul class="top-nav">
                  
                  
                  <!-- window screen -->
                  <li class="pc-rheader-submenu">
                     <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                        <i class="icon-size-fullscreen"></i>
                     </a>

                  </li>
                  <!-- User Menu-->
                  <li class="dropdown" >
                     <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                        
                        <span>ILias <b>Doe</b> <i class=" icofont icofont-simple-down"></i></span>

                     </a>
                     <ul class="dropdown-menu settings-menu">
                        <li><a href="#!"><i class="icon-settings"></i> Settings</a></li>
                        <li><a href="#"><i class="icon-user"></i> Profile</a></li>
                        <li><a href="#"><i class="icon-envelope-open"></i> My Messages</a></li>
                        <li class="p-0">
                           <div class="dropdown-divider m-0"></div>
                        </li>
                        <li><a href="#"><i class="icon-lock"></i> Lock Screen</a></li>
                        <li><a href="login1.html"><i class="icon-logout"></i> Logout</a></li>

                     </ul>
                  </li>
               </ul>

              
                  
                  <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
               </div>
               <!-- search end -->
            </div>
         </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print ">
         <section class="sidebar" id="sidebar-scroll">
            <!-- Sidebar Menu-->
            <ul class="sidebar-menu">
                <li class="nav-level">--- Navigation</li>
                <li class="treeview">
                    <a class="waves-effect waves-dark" href="{{route('dashboard')}}">
                        <i class="icon-speedometer"></i><span> Dashboard</span>
                    </a>                
                </li>
                

                
                
               

            </li>
            <li class="nav-level">---user</li>
                <li class="treeview">
                    <a class="waves-effect waves-dark" href="{{route('users')}}">
                        <i class="icon-user"></i><span> users</span>
                    </a>                
                </li>
                <li class="nav-level">---Menu of food</li>
                <li class="treeview">
                    <a class="waves-effect waves-dark" href="{{route('Categories')}}">
                    <i class="fa-solid fa-sliders"></i><span> Categories</span>
                    </a>                
                </li>
               
                <li class="treeview"><a class="waves-effect waves-dark" href="#!"> <i class="fa-solid fa-burger"></i><span>Foods </span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                     <?php
                     use App\Models\Category;
                     $categories = Category::all();
                     ?>
                     <li><a class="waves-effect waves-dark" href="{{route('foods',0)}}"> <i class="fa-solid fa-burger"></i>All</a></li>
                     @foreach( $categories as $categorie)
                        <li><a class="waves-effect waves-dark" href="{{route('foods',$categorie->id)}}"> <i class="fa-solid fa-burger"></i></i>{{$categorie->name}}</a></li>
                        @endforeach
                      
                    </ul>
                </li>
                <li class="treeview" >
                    <a class="waves-effect waves-dark" href="{{route('users')}}">
                    <i class="fa-solid fa-square-plus"></i><span> Orders</span>
                    </a>                
                </li>
                

                
                
               

            </li>
            </ul>
            
         </section>
      </aside>
    @yield('content')              

   <!-- Required Jqurey -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   <script src=" {!! asset('plugins/Jquery/dist/jquery.min.js') !!}"></script>
   <script src="{!! asset('plugins/jquery-ui/jquery-ui.min.js') !!}"></script>
   <script src="{!! asset('plugins/tether/dist/js/tether.min.js') !!}"></script>

   <!-- Required Fremwork -->
   <script src="{!! asset('plugins/bootstrap/js/bootstrap.min.js ') !!}"></script>

   <!-- Scrollbar JS-->
   <script src=" {!! asset('plugins/jquery-slimscroll/jquery.slimscroll.js') !!}"></script>
   <script src=" {!! asset('plugins/jquery.nicescroll/jquery.nicescroll.min.js') !!}"></script>

   <!--classic JS-->
   <script src="{!! asset('plugins/classie/classie.js ') !!}"></script>

   <!-- notification -->
   <script src="{!! asset('plugins/notification/js/bootstrap-growl.min.js') !!}"></script>

   <!-- Sparkline charts -->
   <script src="{!! asset('plugins/jquery-sparkline/dist/jquery.sparkline.js') !!}"></script>

   <!-- Counter js  -->
   <script src="{!! asset('plugins/waypoints/jquery.waypoints.min.js') !!}"></script>
   <script src="{!! asset('plugins/countdown/js/jquery.counterup.js') !!}"></script>

   <!-- Echart js -->
   <script src="{!! asset('plugins/charts/echarts/js/echarts-all.js') !!}"></script>

   <script src="https://code.highcharts.com/highcharts.js"></script>
   <script src="https://code.highcharts.com/modules/exporting.js"></script>
   <script src="https://code.highcharts.com/highcharts-3d.js"></script>
   <script src="https://kit.fontawesome.com/70b3797b8f.js" crossorigin="anonymous"></script>
   <!-- custom js -->
   <script type="text/javascript" src="{!! asset('js/main.min.js') !!}"></script>
   <script type="text/javascript" src="{!! asset('pages/dashboard.js') !!}"></script>
   <script type="text/javascript" src="{!! asset('pages/elements.js') !!}"></script>
    
   <script src="{!! asset('js/menu.min.js') !!}"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script>
var $window = $(window);
var nav = $('.fixed-button');
$window.scroll(function(){
    if ($window.scrollTop() >= 200) {
       nav.addClass('active');
    }
    else {
       nav.removeClass('active');
    }
});
const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})
</script>
<script src=" {!! asset('js/jquery-3.4.1.min.js') !!}"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src=" {!! asset('js/bootstrap.js') !!}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js --><script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src=" {!! asset('js/custom.js') !!}"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->
</body>

</html>
