<!DOCTYPE html>
<html lang="">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="/assets/img/wash-24-fav.png" type="image/x-icon">
    <!-- bootstrap css -->       
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- flaticon css -->
    <link rel="stylesheet" href="/assets/css/flaticon.css">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="/assets/css/fontawesome.min.css">
    <!-- owl carousel css -->
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <!-- owl carousel theme css -->
    <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
    <!-- slicknav css -->
    <link rel="stylesheet" href="/assets/css/slicknav.css">
    <!-- main css -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <!-- jquery js -->
    <script src="/assets/js/jquery-1.10.2.min.js"></script>
</head>
<body>
    @include('widgets.appointment-bar-vert')
    @include('layout.header')
    @yield('body')
    @include('layout.footer')

    <div class="modal fade " tabindex="-1" id="appoinntment" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content appoint-modal">
            <div class="modal-header">
              <h5 class="modal-title">Appointment</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>To schedule an appointment give us a call at {{config('company.enq_contact_no')}} or fill out the form below with your information and requested services.</p>

              <form action="{{route('enquiry')}}" method="post" class="mt-3">
                    @csrf
                    <div class="form-group mb-0">
                        <label for="franchise" class="mr-2">For Franchise</label>
                        <input type="radio" name="type" value="franchise" id="franchise">
                    </div>
                    <div class="form-group" class="mr-2">
                        <label for="services">For Services</label>
                        <input type="radio" name="type" value="services" id="services">
                    </div>
                    
                    <div class="form-element mb-0"><button type="submit"><span>Submit</span></button></div>
              </form>
            </div>
          </div>
        </div>
    </div>
    
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/waypoints.min.js"></script>
    <script src="/assets/js/jquery.counterup.min.js"></script>
    <script src="/assets/js/tilt.jquery.min.js"></script>
    <script src="/assets/js/jquery.slicknav.min.js"></script>
    <script src="/assets/js/main.js"></script>
</body>
</html>