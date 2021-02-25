<footer>
    <div class="container">
        <div class="footer-top">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <a class="logo-wrapper" href="{{route('home.index')}}"><img src="assets/img/wash-24-logo-w.png" alt="{{config('app.name')}}"></a>
                    <p class="txt">We, {{config('app.name')}} is associated with door to door snappy vehicle cleaning services and business disinfectant services with our professional trainers and representatives by delegating franchisee over all over India.</p>
                </div>
                <div class="col-xl-2 offset-xl-1 col-lg-2 col-md-3">
                    <h4>Useful Links</h4>
                    <ul class="links">
                        <li><a href="{{route('home.index')}}">Home</a></li>
                        <li><a href="{{route('about.us')}}">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="{{route('contact.us')}}">Contact</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3">
                    <h4>Services</h4>
                    <ul class="links">
                        <li><a href="#">Car Washing</a></li>
                        <li><a href="#">Car Detailing</a></li>
                        <li><a href="#">Car Repair</a></li>
                        <li><a href="#">Wheels on rent</a></li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <h4>Contact Us</h4>
                    <div class="contact-infos">
                        <div class="single-info">
                            <div class="icon-wrapper"><i class="flaticon-placeholder"></i></div>
                            <p>{{config('company.address')}}</p>
                        </div>
                        <div class="single-info">
                            <div class="icon-wrapper"><i class="flaticon-phone-auricular-hand-drawn-ringing-tool-outline"></i></div>
                            <p>{{config('company.enq_contact_no')}}</p>
                        </div>
                        <div class="single-info">
                            <div class="icon-wrapper"><i class="flaticon-message"></i></div>
                            <p>{{config('company.enq_email')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© Copyrights {{date('Y')}} {{config('app.name')}}. All rights reserved. </p>
        </div>
    </div>
</footer>
<div class="back-to-top"><i class="fas fa-chevron-up"></i></div>