<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\EnquiryController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'index'])
    ->name('home.index');

Route::get('/contact-us', [PageController::class, 'contact'])
    ->name('contact.us');

Route::get('/about-us', [PageController::class, 'about'])
    ->name('about.us');

Route::get('/franchise', [PageController::class , 'franchise'])
    ->name('franchise');

Route::get('/services-enquiry', [PageController::class , 'servicesEnq'])
    ->name('services.enq');

Route::post('/enquiry', [EnquiryController::class, 'enquiryType'])
    ->name('enquiry');

Route::post('/franchise-enq' , [EnquiryController::class, 'franchise'])
    ->name('franchise.enq.form');

Route::post('/services-enq' , [EnquiryController::class, 'services'])->name('services.enq.form');

