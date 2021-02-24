@extends('layout.master')
@section('title') Contact us @endsection
@section('body')
<div class="contact-section">
    <div class="container">
        <!--  contact infos start  -->
        <div class="contact-infos">
            <div class="row no-gutters">
                <div class="col-lg-4 single-info-col">
                    <div class="single-info wow fadeInRight" data-wow-duration="1s">
                        <div class="icon-wrapper"><i class="fas fa-home"></i></div>
                        <div class="info-txt">
                            <p>{{config('company.address')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 single-info-col">
                    <div class="single-info wow fadeInRight" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="icon-wrapper"><i class="fas fa-phone"></i></div>
                        <div class="info-txt">
                            <p>{{config('company.enq_contact_no')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 single-info-col">
                    <div class="single-info wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="icon-wrapper"><i class="far fa-envelope"></i></div>
                        <div class="info-txt">
                            <p>{{config('company.enq_email')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  contact infos end  -->
        <!--  contact form and map start  -->
        <div class="contact-form-section">
            <div class="row">
                <div class="col-lg-6">
                    <span class="title">Contact</span>
                    <h2 class="subtitle">KEEP IN TOUCH</h2>
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-element"><input type="text" placeholder="Name"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-element"><input type="text" placeholder="Email"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-element"><input type="text" placeholder="Phone"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-element"><input type="text" placeholder="Subject"></div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-element">
                                    <textarea name="comment" cols="30" rows="10" placeholder="Comment"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-element">
                                    <button type="submit"><span>Submit</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="map-wrapper">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--  contact form and map end  -->
    </div>
</div>
@endsection