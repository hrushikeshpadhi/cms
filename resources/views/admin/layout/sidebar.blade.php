 
<div id="layoutSidenav">
 <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="{{url('/dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fa fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                         <!--Admin-->
                             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdmin" aria-expanded="false" aria-controls="collapseAdmin">
                                <div class="sb-nav-link-icon"><i class="fa fa-user"></i></div>
                                Admin
                                <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                            </a>
                            
                            <div class="collapse" id="collapseAdmin" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link"  href="{{url('user-registration')}}">Register User/Personnel</a>
                                    <a class="nav-link" href="{{url('view-user')}}">View User/Personnel</a>
                                </nav>
                            </div>

                            <!--Assign jobs -->
                             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseJob" aria-expanded="false" aria-controls="collapseJob">
                                <div class="sb-nav-link-icon"><i class="fa fa-columns"></i></div>
                                Jobs
                                <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                            </a>
                            
                            <div class="collapse" id="collapseJob" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link"  href="{{url('add-job')}}">Assign Jobs</a>
                                    <a class="nav-link" href="{{url('view-job')}}">View Jobs</a>
                                </nav>
                            </div>



                             <!--candidate -->
                             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsecandidate" aria-expanded="false" aria-controls="collapsecandidate">
                                <div class="sb-nav-link-icon"><i class="fa fa-users"></i></div>
                                Candidate
                                <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                            </a>
                            
                            <div class="collapse" id="collapsecandidate" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link"  href="{{url('')}}">Add Candidate</a>
                                    <a class="nav-link" href="{{url('')}}">Search Candidate</a>
                                </nav>
                            </div>



                            
                            <a class="nav-link" href="{{url('view-userjob')}}">
                                <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                                Assign Job
                            </a>
                           
                        </div>
                    </div>
                </nav>
            </div>