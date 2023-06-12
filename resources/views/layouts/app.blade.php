<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="description" content="bakery management sytem">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @yield('error')
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <script src="/../resources/js/app.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
   
  <link rel="stylesheet" href=" https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">  
    <link rel="stylesheet" href="/../css/mdb.min.css">
    <link rel="stylesheet" href="/../css/style.css">
    <link rel="stylesheet" href="/../css/datatables.min.css">
    
    <link rel="stylesheet" href="/../css/fontawesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('css')
</head>
   <!--Main Navigation-->
<header>
  <!-- Sidebar -->
  <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-4">
        <a
          href="/home"
          class="list-group-item list-group-item-action py-2 ripple"
          aria-current="true"
        >
          <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
        </a>
       
        


        <a
          class="list-group-item list-group-item-action py-2 ripple"
          aria-current="true"
          data-mdb-toggle="collapse"
          href="#collapseExample3"
          aria-expanded="true"
          aria-controls="collapseExample3"
        >
          <i class="fas fa-chart-area fa-fw me-3"></i><span>bread sellers</span>
        </a>
        <!-- Collapsed content -->
        <ul id="collapseExample3" class="collapse list-group list-group-flush">
         
         
          <li class="list-group-item py-1">
            <a href="{{ route('employee.index') }}" class="text-reset"><span>Workers</span></a>
          </li>
        </ul>
        <!-- Collapse 2 -->


       



        <a
          class="list-group-item list-group-item-action py-2 ripple"
          aria-current="true"
          data-mdb-toggle="collapse"
          href="#collapseExample4"
          aria-expanded="true"
          aria-controls="collapseExample4"
        >
          <i class="fas fa-chart-area fa-fw me-3"></i><span>supplies</span>
        </a>
        <!-- Collapsed content -->
        <ul id="collapseExample4" class="collapse list-group list-group-flush">
         
          
          <li class="list-group-item py-1">
            <a href="/supply" class="text-reset"><span>show</span></a>
          </li>
        </ul>
        <!-- Collapse 2 -->



        <a
          class="list-group-item list-group-item-action py-2 ripple"
          aria-current="true"
          data-mdb-toggle="collapse"
          href="#collapseExample5"
          aria-expanded="true"
          aria-controls="collapseExample5"
        >
          <i class="fas fa-building fa-fw me-3"></i><span>house workers</span>
        </a>
        <!-- Collapsed content -->
        <ul id="collapseExample5" class="collapse list-group list-group-flush">
         
          
          <li class="list-group-item py-1">
            <a href="{{route('houseworker.index')}}" class="text-reset"><span>show</span></a>
          </li>
        </ul>
        <!-- Collapse 2 -->





        <a
          class="list-group-item list-group-item-action py-2 ripple"
          aria-current="true"
          data-mdb-toggle="collapse"
          href="#collapseExample6"
          aria-expanded="true"
          aria-controls="collapseExample6"
        >
          <i class="fas fa-users fa-fw me-3"></i><span>expenditures</span>
        </a>
        <!-- Collapsed content -->
        <ul id="collapseExample6" class="collapse list-group list-group-flush">
         
         
          <li class="list-group-item py-1">
            <a href="/expenditure" class="text-reset"><span>show</span></a>
          </li>
        </ul>
        <!-- Collapse 2 -->


        <a
          class="list-group-item list-group-item-action py-2 ripple"
          aria-current="true"
          data-mdb-toggle="collapse"
          href="#collapseExamples3"
          aria-expanded="true"
          aria-controls="collapseExamples3"
        >
          <i class="fas fa-chart-area fa-fw me-3"></i><span>invoice</span>
        </a>
        <!-- Collapsed content -->
        <ul id="collapseExamples3" class="collapse list-group list-group-flush">
         
         
          <li class="list-group-item py-1">
            <a href="/today" class="text-reset"><span>todays</span></a>
          </li>
        </ul>
        <!-- Collapse 2 -->


        <a
          class="list-group-item list-group-item-action py-2 ripple"
          aria-current="true"
          data-mdb-toggle="collapse"
          href="#collapseExamples31"
          aria-expanded="true"
          aria-controls="collapseExamples31"
        >
          <i class="fas fa-chart-area fa-fw me-3"></i><span>others</span>
        </a>
        <!-- Collapsed content -->
        <ul id="collapseExamples31" class="collapse list-group list-group-flush">
         
         
          <li class="list-group-item py-1">
            <a href="/date" class="text-reset"><span>todays</span></a>
          </li>
        </ul>
        <!-- Collapse 2 -->




        
        
        
        
        
      
          

          </li>
          <li class="list-group-item py-1">
          <a
          class="list-group-item list-group-item-action py-2 ripple"
          aria-current="true"
          data-mdb-toggle="collapse"
          href="#collapseExample11"
          aria-expanded="true"
          aria-controls="collapseExample11"
        >
          <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>house</span>
        </a>
        <!-- Collapsed content -->
        <ul id="collapseExample11" class="collapse show list-group list-group-flush">
          <li class="list-group-item py-1">
            <a href="/housetype/" class="text-reset">new</a>
          </li>
          <li class="list-group-item py-1">
            <a href="" class="text-reset">Link</a>
          </li>
         
        </ul> 



        


          </li>
          <li class="list-group-item py-1">
           
           <a href="">kjhkjhkjhkj</a>
          </li>
        </ul>
        <!-- Collapse 2 -->
      </div>
    </div>
  </nav>
  <!-- Sidebar -->

  <!-- Navbar -->
  <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#sidebarMenu"
        aria-controls="sidebarMenu"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>

      <!-- Brand -->
      <a class="navbar-brand" href="#">
        <img
          src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp"
          height="25"
          alt="MDB Logo"
          loading="lazy"
        />
      </a>
      <!-- Search form -->
      <form class="d-none d-md-flex input-group w-auto my-auto">
        <input
          autocomplete="off"
          type="search"
          class="form-control rounded"
          placeholder='Search (ctrl + "/" to focus)'
          style="min-width: 225px;"
        />
        <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
      </form>

      <!-- Right links -->
      <ul class="navbar-nav ms-auto d-flex flex-row">
        <!-- Notification dropdown -->
        <li class="nav-item dropdown">
        
        </li>

        <!-- Icon -->
        <li class="nav-item">
          <a class="nav-link me-3 me-lg-0" href="#">
            <i class="fas fa-fill-drip"></i>
          </a>
        </li>
        <!-- Icon -->
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="#">
            <i class="fab fa-github"></i>
          </a>
        </li>

        <!-- Icon dropdown -->
        

        <!-- Avatar -->
        <li class="nav-item dropdown">

        <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                           
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                  @if(Auth::user()->role == 'admin')
                                <a class="dropdown-item" href="/User">register</a>
                                  @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    id="logout">
                            
                                        {{ __('Logout') }}
                                    </a>
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                    
                                </div>
                            </li>
                        @endguest
                    </ul>
          
          <ul
        
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdownMenuLink"
          >
            <li>
              <a class="dropdown-item" href="#">My profile</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Settings</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Logout</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->

  <script nonce="2726c7f26c98">
document.getElementById("logout").addEventListener("click",display)
  function display(){
  event.preventDefault();
document.getElementById('logout-form').submit();
};


  </script>
</header>
<!--Main Navigation-->

<!--Main layout-->
<main id="backgroundImage" style="margin-top:58px;">
  <div class="container pt-4">
  @yield('content')

  </div>
</main>
<!--Main layout-->
<script src="/../js/jquery.js"></script>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
<script src="/../js/datatables.min.js"></script>
<script src="/../js/mdb.min.js"></script>
<script src="/../js/check.js"></script>

<script src="/../js/fontawesome.min.js"></script>
</body>
</html>