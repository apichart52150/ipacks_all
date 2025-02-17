<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Online IELTS Tips & Practice</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('public/assets/images/favicon.ico') }}">

        <!-- App css -->
        <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />


    </head>

    <style>
        .btn-gold {
            color: #ffffff;
            background-color: #EF961B;
            border-color: #EF961B;
        }

        .align-self-center span {
            display: block;
            padding-top: 22px;
            text-align: center;
            line-height: 1.5em;
            font-size: 16px;
        }

        .textcenter {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>

    <body class="authentication-bg">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">

                            <div class="card-body p-4">
                            
                                <div class="text-center w-75 m-auto">
                                    @if(session()->has('status'))
                                        <h3>{{ session()->get('status') }}</h3>
                                    @endif
                                </div>

                                <div class="text-center">
                                    <div>
                                        <div class="logout-checkmark">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 161.2 161.2" enable-background="new 0 0 161.2 161.2" xml:space="preserve">
                                                <path class="logout-path" fill="none" stroke="#d1dee4" stroke-miterlimit="10" d="M425.9,52.1L425.9,52.1c-2.2-2.6-6-2.6-8.3-0.1l-42.7,46.2l-14.3-16.4
                                                    c-2.3-2.7-6.2-2.7-8.6-0.1c-1.9,2.1-2,5.6-0.1,7.7l17.6,20.3c0.2,0.3,0.4,0.6,0.6,0.9c1.8,2,4.4,2.5,6.6,1.4c0.7-0.3,1.4-0.8,2-1.5
                                                    c0.3-0.3,0.5-0.6,0.7-0.9l46.3-50.1C427.7,57.5,427.7,54.2,425.9,52.1z"></path>
                                                <circle class="logout-path" fill="none" stroke="#1abc9c" stroke-width="4" stroke-miterlimit="10" cx="80.6" cy="80.6" r="62.1"></circle>
                                                <polyline class="logout-path" fill="none" stroke="#1abc9c" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="113,52.8
                                                    74.1,108.4 48.2,86.4 "></polyline>

                                                <circle class="logout-spin" fill="none" stroke="#d1dee4" stroke-width="4" stroke-miterlimit="10" stroke-dasharray="12.2175,12.2175" cx="80.6" cy="80.6" r="73.9"></circle>
                                            </svg>
                                        </div>
                                    </div>
                                    
                                    <p class="text-muted mt-2"> Now your're our member.</p>

                                    <h5>Please select a package you prefer. </h5>
                                    <h5>(Platinum is highly recommended because it comes with 1 on 1 tutorial; focus on speaking)</h5>

                                    <hr>

                                    <div class="row">
                                        <div class="col-6 align-self-center">
                                            <a href="{{ url('payment/purchase/'.'gold') }}" type="button" class="btn btn-block btn--md btn-gold">Gold package</a>
                                            <a href="{{ url('payment/purchase/'.'extra') }}" type="button" class="btn btn-block btn--md btn-primary">1 on 1 Tutorial</a>
                                        </div>

                                        <div class="col-xl-6 textcenter">
                                            <a href="{{ url('payment/purchase/'.'platinum') }}" type="button" class="btn btn-secondary waves-effect waves-light w-100 h-100">
                                                <div class="align-self-center"><span>Platinum package</span></div>
                                            </a>
                                            <!-- <a href="{{ url('payment/purchase/'.'platinum') }}">
                                                <div class="card card-body text-white bg-secondary m-0 h-100">
                                                    <p class="card-text">Platinum package</p> 
                                                </div>
                                            </a> -->
                                        </div>
                                       
                                    </div>
                                </div>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Back to <a href="{{ route('logout') }}" class="text-white font-weight-medium ml-1">Log in</a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <footer class="footer footer-alt">
            2021 © Online IELTS Tip & Practice By New Cambridge
        </footer>


        <!-- Vendor js -->
        <script src="{{ asset('public/assets/js/vendor.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('public/assets/js/app.min.js') }}"></script>
        
    </body>
</html>