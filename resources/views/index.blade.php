@extends('layout.master')
@section('title') {{config('app.name')}} | India's Best Car Care Services Provider @endsection

@section('body')
     
    <div class="hero-area hero-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-10 pr-0">
                    <div class="hero-txt">
                        <h1>We help your auto to get on the road</h1>
                        <a href="{{route('contact.us')}}" class="hero-btn"><span>Know More</span></a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-2">
                    <div class="img-wrapper">
                        <img class="hero-img" src="assets/img/hero_img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-overlay"></div>
        <div class="shape"></div>
    </div>

    <div class="feature-area feature-bg">
        <div class="container">
            <div class="features">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-feature">
                            <img src="assets/img/feature_1.jpg" alt="">
                            <div class="feature-info">
                                <div class="icon-wrapper"><i class="flaticon-timing-belt"></i></div>
                                <div class="feature-txt">
                                    <h3>WE MAKE IT EASY</h3>
                                    <p>Tell us what your car needs or ask for a diagnostic. Receive a free, fast, fair & transparent price quote.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-feature">
                            <img src="assets/img/feature_2.jpg" alt="">
                            <div class="feature-info">
                                <div class="icon-wrapper"><i class="flaticon-wrench"></i></div>
                                <div class="feature-txt">
                                    <h3>Fair Pricing</h3>
                                    <p>Tell us what your car needs or ask for a diagnostic. Receive a free, fast, fair & transparent price quote.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-feature">
                            <img src="assets/img/feature_3.jpg" alt="">
                            <div class="feature-info">
                                <div class="icon-wrapper"><i class="flaticon-fan"></i></div>
                                <div class="feature-txt">
                                    <h3>Secured</h3>
                                    <p>Tell us what your car needs or ask for a diagnostic. Receive a free, fast, fair & transparent price quote.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ad">
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        <h3>you lead a busy life ! we drop off your vehicle 24/7.</h3>
                    </div>
                    <div class="col-lg-3">
                        <a href="{{route('contact.us')}}" class="ad-btn"><span>Know More</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="service-area service-bg">
        <div class="container">
            <div class="section-title">
                <span>OUR SERVICES</span>
                <h2>WHAT WE PROVIDE</h2>
            </div>
            <div class="services-tab">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="battery-tab" data-toggle="tab" href="#battery" role="tab" aria-controls="battery" aria-selected="true"><i class="flaticon-battery"></i>Battery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="breaks-tab" data-toggle="tab" href="#breaks" role="tab" aria-controls="breaks" aria-selected="false"><i class="flaticon-break"></i>Brakes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="belts-tab" data-toggle="tab" href="#belts" role="tab" aria-controls="belts" aria-selected="false"><i class="flaticon-seat-belt"></i>Belts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="diagnostics-tab" data-toggle="tab" href="#diagnostics" role="tab" aria-controls="diagnostics" aria-selected="false"><i class="flaticon-settings"></i>Diagnostics</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="battery" role="tabpanel" aria-labelledby="battery-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-service">
                                    <i class="flaticon-battery"></i>
                                    <h3>Battery change</h3>
                                    <p>Tell us what your car needs or ask for a diagnostic. Receive a free, fast, fair & transparent price quote.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-service">
                                    <i class="flaticon-electric-car"></i>
                                    <h3>Battery change</h3>
                                    <p>Tell us what your car needs or ask for a diagnostic. Receive a free, fast, fair & transparent price quote.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-service">
                                    <i class="flaticon-settings"></i>
                                    <h3>Battery change</h3>
                                    <p>Tell us what your car needs or ask for a diagnostic. Receive a free, fast, fair & transparent price quote.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="breaks" role="tabpanel" aria-labelledby="breaks-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-service">
                                    <i class="flaticon-battery"></i>
                                    <h3>Battery change</h3>
                                    <p>Tell us what your car needs or ask for a diagnostic. Receive a free, fast, fair & transparent price quote.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-service">
                                    <i class="flaticon-electric-car"></i>
                                    <h3>Battery change</h3>
                                    <p>Tell us what your car needs or ask for a diagnostic. Receive a free, fast, fair & transparent price quote.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-service">
                                    <i class="flaticon-settings"></i>
                                    <h3>Battery change</h3>
                                    <p>Tell us what your car needs or ask for a diagnostic. Receive a free, fast, fair & transparent price quote.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="belts" role="tabpanel" aria-labelledby="belts-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-service">
                                    <i class="flaticon-battery"></i>
                                    <h3>Battery change</h3>
                                    <p>Tell us what your car needs or ask for a diagnostic. Receive a free, fast, fair & transparent price quote.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-service">
                                    <i class="flaticon-electric-car"></i>
                                    <h3>Battery change</h3>
                                    <p>Tell us what your car needs or ask for a diagnostic. Receive a free, fast, fair & transparent price quote.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-service">
                                    <i class="flaticon-settings"></i>
                                    <h3>Battery change</h3>
                                    <p>Tell us what your car needs or ask for a diagnostic. Receive a free, fast, fair & transparent price quote.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="diagnostics" role="tabpanel" aria-labelledby="diagnostics-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-service">
                                    <i class="flaticon-battery"></i>
                                    <h3>Battery change</h3>
                                    <p>Tell us what your car needs or ask for a diagnostic. Receive a free, fast, fair & transparent price quote.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-service">
                                    <i class="flaticon-electric-car"></i>
                                    <h3>Battery change</h3>
                                    <p>Tell us what your car needs or ask for a diagnostic. Receive a free, fast, fair & transparent price quote.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-service">
                                    <i class="flaticon-settings"></i>
                                    <h3>Battery change</h3>
                                    <p>Tell us what your car needs or ask for a diagnostic. Receive a free, fast, fair & transparent price quote.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-overlay"></div>
    </div>

    <div class="statistics-area">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-statistic">
                        <div class="icon-wrapper"><i class="flaticon-electric-car"></i></div>
                        <div class="count">
                            <h2><span class="counter">9,250</span> +</h2>
                        </div>
                        <span class="title">Vehicles Repaired</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-statistic">
                        <div class="icon-wrapper"><i class="flaticon-steering-wheel"></i></div>
                        <div class="count">
                            <h2><span class="counter">1,250</span> +</h2>
                        </div>
                        <span class="title">Satisfied Clients</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-statistic">
                        <div class="icon-wrapper"><i class="flaticon-settings"></i></div>
                        <div class="count">
                            <h2><span class="counter">2,500</span> +</h2>
                        </div>
                        <span class="title">Diagonistic Autos</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-statistic">
                        <div class="icon-wrapper"><i class="flaticon-break"></i></div>
                        <div class="count">
                            <h2><span class="counter">1,457</span> +</h2>
                        </div>
                        <span class="title">Parts Recoveres</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="review-area review-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xl-3">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <span>Testimonial</span>
                            <h2>WHAT THEY SAY ABOUT US</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="review-carousel owl-carousel owl-theme">
                        <div class="single-review bg-color">
                            <p>…I would drive out of my way to have them service my vehicle any day of the week because I know I am getting service the way it should be!!</p>
                            <span>Ariana Hedge CEO, Devrise</span>
                            <div class="rate">
                                <div class="rating" style="width:100%"></div>
                            </div>
                        </div>
                        <div class="single-review bg-color">
                            <p>…I would drive out of my way to have them service my vehicle any day of the week because I know I am getting service the way it should be!!</p>
                            <span>Ariana Hedge CEO, Devrise</span>
                            <div class="rate">
                                <div class="rating" style="width:100%"></div>
                            </div>
                        </div>
                        <div class="single-review bg-color">
                            <p>…I would drive out of my way to have them service my vehicle any day of the week because I know I am getting service the way it should be!!</p>
                            <span>Ariana Hedge CEO, Devrise</span>
                            <div class="rate">
                                <div class="rating" style="width:100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="review-overlay"></div>
    </div>
    
    <div class="warranty-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="about_bg js-tilt"></div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6">
                    <div class="section-title">
                        <h2>Comprehensive Warranty On All Work</h2>
                    </div>
                    <div class="warranty-txt">
                        <p>What does that mean for you? Peace of Mind. Whether your vehicle needs an oil change, factory recommended maintenance, or a major repair, knowing you have a qualified. </p>
                        <p>Auto flex mechanic to work on it means never having to worry if the work is done right. We pride ourselves on providing every customer with quality auto service at a fair price- GUARANTEED!</p>
                    </div>
                    <a href="{{route('contact.us')}}" class="warranty-btn"><span>SCHEDULE A REPAIR</span></a>
                </div>
            </div>
            <div class="warranty-features">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-feature">
                            <div class="icon-wrapper">
                                <img src="assets/img/info_icon_1.png" alt="">
                            </div>
                            <div class="txt">
                                <p>Over 23 years of experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-feature">
                            <div class="icon-wrapper">
                                <img src="assets/img/info_icon_2.png" alt="">
                            </div>
                            <div class="txt">
                                <p>ASE Certified Master Technicians</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-feature">
                            <div class="icon-wrapper">
                                <img src="assets/img/info_icon_3.png" alt="">
                            </div>
                            <div class="txt">
                                <p>We offer Financing Options</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="vehicles-area verhicle_bg">
        <div class="container">
            <div class="section-title">
                <span>check our recent work</span>
                <h2>Recently Serviced Vehicles</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-vehicle">
                        <div class="img-wrapper"><img src="assets/img/service_1.jpg" alt=""></div>
                        <div class="txt">
                            <h3>2009 Acura MDX</h3>
                            <p> Change oil and oil filter. Check air filter ( most cars ) . FILL Washer solvent </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-vehicle">
                        <div class="img-wrapper"><img src="assets/img/service_2.jpg" alt=""></div>
                        <div class="txt">
                            <h3>2009 Acura MDX</h3>
                            <p> Change oil and oil filter. Check air filter ( most cars ) . FILL Washer solvent </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-vehicle">
                        <div class="img-wrapper"><img src="assets/img/service_3.jpg" alt=""></div>
                        <div class="txt">
                            <h3>2009 Acura MDX</h3>
                            <p> Change oil and oil filter. Check air filter ( most cars ) . FILL Washer solvent </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vehicles-overlay"></div>
    </div>
    
   @include('widgets.4-tile_team_show')
    
    <div class="quote-area quote-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-5">
                    <div class="quote-form">
                        <div class="section-title">
                            <span>quote</span>
                            <h2>Request a free qoute</h2>
                        </div>
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-element">
                                        <input type="text" name="name" placeholder="Your name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-element">
                                        <select name="type">
                                            <option value="" selected>Auto Repair</option>
                                            <option value="">Auto Servicing</option>
                                            <option value="">Car Wash</option>
                                            <option value="">Tire Change</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-element"><input name="email" type="text" placeholder="Email"></div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-element"><input name="phone" type="text" placeholder="Phone"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-element mb-0"><button type="submit"><span>Submit</span></button></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
   @include('widgets.logo-slider')

    @include('widgets.cta')
    
@endsection