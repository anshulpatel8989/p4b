<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="{{ route('home') }}">
                                 <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                 Dashboard
                            </a>
                            
                            <a class="nav-link" href="{{ route('news_list') }}">
                                  <div class="sb-nav-link-icon"><i class="fa fa-newspaper"></i></div>
                                  News
                            </a>
                            <a class="nav-link" href="{{ route('carrer_list') }}">
                                  <div class="sb-nav-link-icon"><i class="fas fa-briefcase"></i></div>
                                  Career
                            </a>
                            <a class="nav-link" href="{{ route('user_list') }}">
                                 <div class="sb-nav-link-icon"><i class="fa fa-users"></i></div>
                                 Users
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    </div>
                </nav>
            </div>
           