<div class="header-section home-3">
    <div class="info-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="socials">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <p class="mb-0 text-right">Opening Hours : Monday - Saturday 9 AM to 5 PM</p>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-area">
        <div class="main-menu">
            <div class="container">
                <div class="row align-items-center position-relative">
                    <div class="col-lg-3 col-6">
                        <a class="logo-wrapper" href="{{route('home.index')}}"><img src="/assets/img/wash-24-logo.png" alt="{{config('app.name')}}"></a>
                    </div>
                    <div class="col-lg-9 col-6 position-static">
                        <nav>
                            <ul class="menus" id="mainMenu">
                                <li>
                                   <a href="{{route('home.index')}}" class="parent-link">Home</a>
                                </li>
                                <li><a href="{{route('about.us')}}" class="parent-link">About</a></li>
                                <li class="dropdown">
                                    <a href="#" class="parent-link">Services</a>
                                    <ul class="dropdown-lists">
                                        <li><a href="#">Snappy Car Detailing</a></li>
                                        <li><a href="#">Disinfectant Services</a></li>
                                        <li><a href="#">Car wash</a></li>
                                        <li><a href="#">Painter On Call</a></li>
                                        <li><a href="#">Wheels on rent</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('franchise')}}" class="parent-link">Franchise</a></li>
                                <li><a href="{{route('contact.us')}}" class="parent-link">Contact</a></li>
                            </ul>
                            <ul class="menus ml-3 appoint-btn-nav">
                                <li>
                                    <a class="text-white" style="background: #ed1c24;" data-toggle="modal" data-target="#appoinntment" href="#">
                                        <i class="fa fa-arrow-right"></i>
                                        Appointment
                                    </a>
                                </li>
                            </ul>
                            <div id="mobileMenu"></div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>