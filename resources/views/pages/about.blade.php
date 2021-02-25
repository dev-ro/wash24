@extends('layout.master')
@section('title') About us @endsection
@section('body')
    
    <div class="warranty-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <div class="about_bg"></div>
                </div>
                <div class="col-lg-6 offset-xl-1 col-xl-5">
                    <div class="section-title">
                        <h2>Comprehensive Warranty On All Work</h2>
                    </div>
                    <div class="warranty-txt">
                        <p>What does that mean for you? Peace of Mind. Whether your vehicle needs an oil change, factory recommended maintenance, or a major repair, knowing you have a qualified. </p>
                        <p>Auto flex mechanic to work on it means never having to worry if the work is done right. We pride ourselves on providing every customer with quality auto service at a fair price- GUARANTEED!</p>
                    </div>
                    <a href="contact.html" class="warranty-btn">SCHEDULE A REPAIR</a>
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
     
    <div class="statistics-area about statistics-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-statistic">
                        <div class="icon-wrapper">
                            <i class="flaticon-electric-car"></i>
                        </div>
                        <h2><span class="counter">9,250</span> +</h2>
                        <p>Vehicles Repaired</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-statistic">
                        <div class="icon-wrapper">
                            <i class="flaticon-steering-wheel"></i>
                        </div>
                        <h2><span class="counter">1,250</span> +</h2>
                        <p>Satisfied Clients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-statistic">
                        <div class="icon-wrapper">
                            <i class="flaticon-settings"></i>
                        </div>
                        <h2><span class="counter">2,500</span> +</h2>
                        <p>Diagonistic Autos</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-statistic">
                        <div class="icon-wrapper">
                            <i class="flaticon-break"></i>
                        </div>
                        <h2><span class="counter">1,457</span> +</h2>
                        <p>Parts Recoveres</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="statistics-overlay"></div>
    </div>

    @include('widgets.4-tile_team_show')
    
    @include('widgets.cta')
    
    {{-- @include('widgets.logo-slider') --}}

@endsection