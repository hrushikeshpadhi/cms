<nav class="sb-topnav navbar navbar-expand navbar-dark bg-col">
            <a class="navbar-brand" href=""><img src="{{ URL :: to('/') }}/public/assets/img/winvest-footer.png" height="50" alt=""></a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fa fa-bars"></i></button>
            
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
              
                <li class="nav-item dropdown">
                 
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-user fa-fw"></i>
                   </a>
                 

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <div class="dropdown-divider"></div>
                             <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">Logout</a>
                                                             
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                    </div>
                </li>
            </ul>
        </nav>