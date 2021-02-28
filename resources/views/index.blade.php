@extends('layout.master')
@section('title') {{config('app.name')}} | India's Best Car Care Services Provider @endsection

@section('body')
     
    <div class="hero-area home-4">
        <div class="hero-carousel owl-carousel owl-theme">
            <div class="single-hero-item hero-bg">
               <img src="assets/img/foam shampooing.jpg" alt="foam shampooing">
            </div>
            <div class="single-hero-item hero-bg">
               <img src="assets/img/deepinterior cleaning with vaccum.jpg" alt="deepinterior cleaning with vaccum">
            </div>
            <div class="single-hero-item hero-bg">
               <img src="assets/img/interior cleaning polish.jpg" alt="interior cleaning polish">
            </div>
            <div class="single-hero-item hero-bg">
               <img src="assets/img/ultra shine with polish.jpg" alt="ultra shine with polish">
            </div>
        </div>
    </div>

    <div class="feature-area feature-bg">
        <div class="container">
            <div class="features">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-feature">
                            <img src="assets/img/interior-cleaned-img.jpeg" alt="washed">
                            <div class="feature-info">
                                <div class="icon-wrapper">
                                    <img src="assets/img/washed-icon.png" width="50" style="margin-right: 5px;
margin-left: -10px;" alt="washed icon">
                                </div>
                                <div class="feature-txt">
                                    <h3>WASHED</h3>
                                    <p>A clean engine compartment makes a used car look newer and better maintained. Some shops that perform engine cleaning services claim a clean engine even runs a little cooler because removing the gunk formed by dirt, oil and grease allows engines to run cooler</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-feature">
                            <img src="assets/img/polished-img.jpeg" alt="polished">
                            <div class="feature-info">
                                <div class="icon-wrapper"> <img src="assets/img/polished-icon.png" width="50" style="margin-right: 5px;
margin-left: -10px;" alt="polished icon"></div>
                                <div class="feature-txt">
                                    <h3>POLISHED</h3>
                                    <p>We Details your Car Headlight Details with polish Its Shines Cames just like a New Headlight.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-feature">
                            <img src="assets/img/washed-img.jpeg " alt="interior-cleaned">
                            <div class="feature-info">
                                <div class="icon-wrapper"> 
                                    <img src="assets/img/interior-cleaned-icon.png" width="50" style="margin-right: 5px;
margin-left: -10px;" alt="interior cleaned icon">
                                </div>
                                <div class="feature-txt">
                                    <h3>INTERIOR CLEANED</h3>
                                    <p>Ceramic coatings can provide high-performance oxide layers on metals and alloys to solve the problems of corrosion, wear, heat, insulation and friction. Some ceramic coatings include thermal spray coating, plasma spray coating, sputter coating, dry-film lubricants and other wet chemical and electrochemical coatings</p>
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
        <div class="container-fluid">
            <div class="section-title">
                <span>OUR SERVICES</span>
                <h2>WHAT WE PROVIDE</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-service">
                        <i class="flaticon-electric-car "></i>
                        <h3>Car Washing</h3>
                        <p>Give us a call on +91-8002888900 and wash24.in team will come and wash your car at doorstep .</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service">
                        <i class="flaticon-battery"></i>
                        <h3>Battery Change</h3>
                        <p>Give us a call on +91-8002888900 and wash24.in team will come and check your car's battery at your doorstep. In case the battery cannot be restored wash24.in will replace it with a new</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service">
                        <i class="flaticon-break"></i>
                        <h3>Break Change</h3>
                        <p>Give us a call on +91-8002888900 and wash24.in team will come and check your car's break if it needed to change the break drum wash24.in team will change it at your doorstep</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service">
                        <i class="flaticon-settings"></i>
                        <h3>Diagnostic</h3>
                        <p>Give us a call on on +91-8002888900 and wash24.in team will come at your doosrstep and check your car if any problems found in your car wash24.in team will fix it.</p>
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
    
   
    
    <div class="warranty-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="about_bg js-tilt" style="background-image: url(assets/img/was-24-img-1.jpg);"></div>
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
                                <p>Over 10 years of experience</p>
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
                        <form action="{{route('send.mail.enq')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-element">
                                        <input type="text" name="name" placeholder="Your name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-element">
                                        <select name="service">
                                            <option value="" selected="">Select Services</option>
                                            <option value="Car Washing">Car Washing</option>
                                            <option value="Car Detailing">Car Detailing</option>
                                            <option value="Car Repair">Car Repair</option>
                                            <option value="Wheels on rent">Wheels on rent</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-element"><input name="email" type="email" placeholder="Email"></div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-element"><input name="mobile" type="text" placeholder="Contact Detail"></div>
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
   
   {{-- @include('widgets.logo-slider') --}}

    @include('widgets.cta')


    <div id="quoteModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content border-0 rounded-0">
            <div class="modal-header">
                <h4 class="text-white mb-0 text-capitalize">Request a free qoute</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="{{route('send.mail.enq')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-element">
                                <input type="text" name="name" placeholder="Your name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-element">
                                <select name="service">
                                    <option value="" selected="">Select Services</option>
                                            <option value="Car Washing">Car Washing</option>
                                            <option value="Car Detailing">Car Detailing</option>
                                            <option value="Car Repair">Car Repair</option>
                                            <option value="Wheels on rent">Wheels on rent</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-element"><input name="email" type="email" placeholder="Email"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-element"><input name="mobile" type="text" placeholder="Contact Detail"></div>
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
    
@endsection

@section('styles')
    <style>
       
        #quoteModal .modal-content {
            background-color: #ed1c24;
        }
        #quoteModal button[type="submit"],  
        #quoteModal input[type="submit"] {
            background-color: #000;
        }
    </style>
@endsection

@push('scripts')
    @if (!session('success'))
        
        <script>
        $(window).load(function(){        
            $('#quoteModal').modal('show');
        }); 
        </script>
    @endif
@endpush

