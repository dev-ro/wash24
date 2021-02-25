@extends('layout.master')
@section('title') Services Enquiry @endsection
@section('body')
<div class="service-details-area py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="body">
                    <div class="description-first">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="title">Get Started With Wash24 Franchise.</h2>
                                <p>At EasyKar, we are giving the opportunity to take the franchise for multi home care franchise like, Doorstep Car Wash Franchise, Painter On Call, Disinfectants Services, Vehicle Leasing, Pest Control.</p>
                                <p>The current age comprises the biggest shoppers of the domestic services since they are additionally the biggest purchasers of the Internet. The bustling way of life of the consumers is prompting them to incline toward administrations directly on request will bring about a surge in the market’s development in the coming years.</p>
                                <p>The on-request domestic services overcome any issues between this present reality administrations and moment online administrations to offer effective types of assistance. The domestic services can be jack of all trades on-request, cleaning administration application, tasks application, home upkeep administrations and on-request cleaning administrations. Since the shopper’s devotion is reliant upon the administration gotten, the specialist organizations want to keep up great quality assistance reliably.</p>
                            </div>
                        </div>
                    </div>
                    <div class="small-imgs">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="single-small-img">
                                    <img src="assets/img/service_small_1.jpg" alt="" class="main">
                                    <div class="small-img-txt">
                                        <div class="img-wrapper">
                                            <img src="assets/img/info_icon_1.png" alt="">
                                        </div>
                                        <h4>Over 10 years of experience</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-small-img">
                                    <img src="assets/img/service_small_2.jpg" alt="" class="main">
                                    <div class="small-img-txt">
                                        <div class="img-wrapper">
                                            <img src="assets/img/info_icon_2.png" alt="">
                                        </div>
                                        <h4>ASE Certified Master Technicians</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="description-second">
                        <p>What does that mean for you? Peace of Mind. Whether your vehicle needs an oil change, factory recommended maintenance, or a major repair, knowing you have a qualified. </p>
                        <p>Auto flex mechanic to work on it means never having to worry if the work is done right. We pride ourselves on providing every customer with quality auto service at a fair price- GUARANTEED!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-sidebar">
                    <div class="categories">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Why choose us?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body bg-light px-4 py-2">
                                        <p>Our Mission is to serve our customers and always deliver the highest level of customer service; to develop our team and strive to constantly improve; and to conduct ourselves in an environmentally responsible manner.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How to apply?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body bg-light px-4 py-2">
                                        <p>Process of apply is very simple in franchise. You can call us on {{config('company.enq_contact_no')}} or you can directly fill the franchise form.
                                            <a href="#applyFranchiseForm">Apply now</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Features
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#">Guaranteed ROI</a></li>
                                            <li><a href="#">No Space Required</a></li>
                                            <li><a href="#">Lowest Investment</a></li>
                                            <li><a href="#">Confirmed Orders</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-support">
                        <div class="icon-wrapper">
                            <i class="flaticon flaticon-headphones"></i>
                        </div>
                        <h3>Call us for any help</h3>
                        <h2>{{config('company.enq_contact_no')}}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div id="applyFranchiseForm" class="row mt-5 bg-light">
            <div class="col-lg-8 m-auto">
                <div class="form">
                    <div class="description-first">
                        <h2 class="title">Apply Now</h2>
                    </div>
                    <form action="{{route('services.enq.form')}}" method="POST">
                        @csrf
                        <div class="row">
                           <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-element">
                                            <input name="firstname" type="text" placeholder="Your first name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-element">
                                            <input name="lastname" type="text" placeholder="Your last name">
                                        </div>
                                    </div>
                                </div>
                           </div>
                           <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-element">
                                            <input 
                                                name="email" 
                                                type="email" 
                                                placeholder="You email"
                                            >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-element">
                                            <input 
                                                name="contact" 
                                                type="text" 
                                                placeholder="You contact number"
                                            >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-element">
                                            <select name="services" id="">
                                                <option value="" selected="">Select Services</option>
                                                <option value="Car Washing">Car Washing</option>
                                                <option value="Car Detailing">Car Detailing</option>
                                                <option value="Car Repair">Car Repair</option>
                                                <option value="Wheels on rent">Wheels on rent</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-element col-md-6">
                                        <button type="submit" class="boxed-btn"><span>Submit</span></button>
                                    </div>
                                </div>
                           </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>    
{{-- @include('widgets.logo-slider') --}}
@endsection