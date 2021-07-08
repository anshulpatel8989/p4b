

<nav class="sb-topnav navbar navbar-expand navbar-dark">

        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('resources/images/logo.png')}}"  class="img-fluid" alt="smile"/></a>

        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
       
        <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="{{ route('home') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="userDropdown">
                   
                    <!-- <div class="dropdown-divider"></div> -->
                    <a  class="dropdown-item" href="{{ route('logout') }}"
							onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">

                            <i class="fas fa-sign-out-alt"></i> Logout
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
                </div>
            </li>
        </ul>

    
</nav>
