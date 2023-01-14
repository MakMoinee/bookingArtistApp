<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/storage/images/favicon.ico" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bukidnon Groove</title>
    <link href="https://fonts.cdnfonts.com/css/slasher-film" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/roboto" rel="stylesheet">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body {
            margin: 0;
        }

        .modal-backdrop {
            display: none;
            visibility: hidden;
            position: relative
        }

        .modal {
            background: url("http://bin.smwcentral.net/u/11361/BlackTransparentBackground.png");
            /* translucent image from google images*/
            z-index: 1100;
        }

        .columnBody {
            float: left;
            width: 50%;
            height: 50px;
        }

        .columnHead {
            float: left;
            width: 33%;
            height: 50px;
        }

        /* Clear floats after the columns */
        .rowHead:after {
            content: "";
            display: table;
            clear: both;
        }

        input[type="email"] {
            background: #FFFFFF;
            border: 0;
            border-bottom: 1.5px solid #5F939A;
            outline: 0;
        }

        input[type="number"] {
            background: #FFFFFF;
            border: 0;
            border-bottom: 1.5px solid #5F939A;
            outline: 0;
        }

        select {
            background: #FFFFFF;
            border: 0;
            border-bottom: 1.5px solid #5F939A;
            outline: 0;
        }


        input[type="password"] {
            background: #FFFFFF;
            border: 0;
            border-bottom: 1.5px solid #5F939A;
            outline: 0;
        }

        input[type="text"] {
            background: #FFFFFF;
            border: 0;
            border-bottom: 1.5px solid #5F939A;
            outline: 0;
        }

        ul.progress_bar {
            max-width: 199em;
            width: 100%;
            padding: 0 18px;
            height: 2em;
            margin: 0;
            padding: 0;
            font-size: 10px;
            /* change font size only to scale*/
        }

        ul.progress_bar li {
            width: 23%;
            float: left;
            height: 100%;
            list-style: none;
            position: relative;
            margin: 0;
            padding: 0;
        }

        ul.progress_bar li span {
            position: absolute;
            display: block;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            background: #5F939A;
            height: .4em;
            z-index: 1;
        }

        ul.progress_bar li.activated:before {
            background: #5F939A;
            border: 0.3em solid #5F939A;
            box-sizing: border-box;
        }


        ul.progress_bar li:before {
            content: '';
            display: block;
            position: absolute;
            left: 0;
            top: 0;
            background: #5F939A;
            width: 2em;
            height: 2em;
            border-radius: 2em;
            z-index: 2;
        }

        ul.progress_bar li:last-child:after {
            content: '';
            display: block;
            position: absolute;
            right: -2em;
            top: 0;
            background: #E2E2E2;
            width: 2em;
            height: 2em;
            border-radius: 2em;
            z-index: 2;
        }

        @media screen and (max-width: 600px) {
            .progress_bar {
                margin-left: 59px !important;
            }
        }
    </style>

</head>

<body style="background: #EDEDED">
    <header style="background: #464646;padding:15px;width:100%;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: transparent !important;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"
                    style="font-family: 'Roboto Medium',sans-serif;font-size: 20px;color:#FFFFFF;filter: drop-shadow(0.5px 0.5px 0.5px #2D2E2E);line-height: 18px;">BUKIDNON
                    <span style="margin-top: -20px;"><br>GROOVE</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0"
                        style="margin-left: 100px;font-family: 'Roboto Medium',sans-serif;color:#FFFFFF !important;">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/"
                                style="color:#FFFFFF !important;">Home</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#">Artist</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li> --}}
                    </ul>
                     {{-- <div class="d-flex" style="background: #464646">
                        <a class="rounded-pill"
                            style="margin-left: 20px;background: #5F939A;font-family: 'Roboto',sans-serif;color: #FFFFFF;text-decoration:none;padding-left:15px;padding-right:15px;padding-top: 5px;padding-bottom: 5px;">Login</a>
                    </div> --}}
                </div>
            </div>
        </nav>
    </header>
    <section style="background: #EDEDED;height:auto;width:auto;">
        <div class="container" style="padding-top: 100px;">
            <div class="row">
                <div class="col-md-12">
                    <div
                        class="card"style="filter: drop-shadow(-2px 2px 4px #464646);width:1050px;margin-bottom:30px;">
                        <div class="card-header">
                            <div class="rowHead">
                                <div class="columnHead" style="font-family: 'Bebas Neue', cursive;font-size:23px;">
                                    <br>
                                    <center>
                                        ACCOUNT
                                    </center>

                                </div>
                                <div class="columnHead"
                                    style="left: 20%;font-family: 'Bebas Neue', cursive;font-size:23px;">
                                    <br>
                                    <center>
                                        PROFILE
                                    </center>
                                </div>
                                <div class="columnHead"
                                    style="left: 20%;font-family: 'Bebas Neue', cursive;font-size:23px;color:#5F939A;">
                                    <br>
                                    <center>
                                        RATE 7 SERVICES
                                    </center>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <center>
                                    <ul class="progress_bar" style="margin-left: 169px;">
                                        @if ($step == 1)
                                            <li class='activated'><span></span></li>
                                            <li><span></span></li>
                                            <li><span></span></li>
                                        @endif
                                        @if ($step == 2)
                                            <li><span></span></li>
                                            <li class='activated'><span></span></li>
                                            <li><span></span></li>
                                        @endif
                                        @if ($step == 3)
                                            <li><span></span></li>
                                            <li><span></span></li>
                                            <li class='activated'><span></span></li>
                                        @endif
                                    </ul>
                                </center>
                            </div>
                            <br>
                        </div>
                        <div class="card-body" style="border-top: 5px solid #FFFFFF;">
                            <div class="container">
                                <br>
                                <div class="row">
                                    <h1
                                        style="font-family: 'Bebas Neue', cursive;font-size:40px; color: #000000;filter: drop-shadow(0.5px 0.5px 0.5px #2D2E2E);">
                                        Rates & Services</h1>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">

                                        @if ($hasService)
                                            @foreach ($services as $item)
                                                <div class="col-md-6" style="float: left;">

                                                    <button class="btn btn-primary"
                                                        style="background:transparent;font-family: 'Bebas Neue', cursive;color:black; width:100%; text-align: start;">
                                                        <div class="row">
                                                            <div class="col-md-3" style="font-size: 20px;">
                                                                {{ $item['serviceName'] }}
                                                            </div>
                                                            <div class="col-md-2" style="font-size: 20px;">
                                                                {{ $item['price'] }}
                                                            </div>
                                                            <div class="col-md-4"
                                                                style="display: inline-block;margin-left: 45px;">
                                                                <h6 style="margin-top: 7px;float:left;">view details
                                                                </h6>

                                                            </div>
                                                            <div class="col-md-1" style="display: inline-block">

                                                                <a style="float: right;"
                                                                    data-bs-target="#cancelServiceModal{{ $item['serviceID'] }}"
                                                                    data-bs-toggle="modal">
                                                                    <svg style="margin-right: -140px; color:white;background:red;border-radius: 9px;margin-top: 7px;"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="21" height="21"
                                                                        fill="currentColor" class="bi bi-x-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                                        <path
                                                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                                                    </svg>
                                                                </a>

                                                            </div>


                                                        </div>
                                                    </button>
                                                    {{-- <button class="btn btn-primary"
                                                        style="background:transparent;font-size: 25px;font-family: 'Bebas Neue', cursive;color:black; width:100%; text-align: start;">{{ $item['serviceName'] }}
                                                        <span
                                                            style="margin-left: 50px;margin-right: 30px;">{{ $item['price'] }}</span>view
                                                        details</button> --}}
                                                </div>

                                                <div class="modal fade"
                                                    id="cancelServiceModal{{ $item['serviceID'] }}" tabindex="-1"
                                                    role="dialog"
                                                    aria-labelledby="cancelServiceModal{{ $item['serviceID'] }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <form
                                                                action="{{ route('addservices.destroy', ['addservice' => $item['serviceID'], 'as' => $as]) }}"
                                                                method="POST">
                                                                @method('delete')
                                                                @csrf
                                                                <div class="modal-body">
                                                                    <input type="hidden" name="cancel"
                                                                        value="true">
                                                                    <h5 class="modal-title" id="cancelModalLabel">Do
                                                                        you
                                                                        want to remove this service?
                                                                    </h5>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-primary"
                                                                        style="background: #5F939A;border:none;">Yes,
                                                                        Proceed</button>
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                        <div class="col-md-6" style="float: left;">
                                            <button class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#addServicesModal"
                                                style="background:transparent;padding:8px;font-size: 20px;font-family: 'Bebas Neue', cursive;color:black; width:100%; text-align: start;">Add
                                                Services &nbsp;&nbsp;&nbsp;&nbsp;+</button>
                                        </div>

                                    </div>
                                </div>
                                <br>
                                <br>
                                <form action="#" method="POST" autocomplete="off"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6 style="margin-left: 50px;">How Do You Want To Get Paid?</h6>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <center>
                                                <div class="form-group">
                                                    {{-- <a class="btn btn-primary" style="background: transparent;"
                                                        id="cash">
                                                        <img src="/images/cash.svg" alt="" srcset=""
                                                            width="150px" height="50px" onclick="cashClick()">
                                                    </a> --}}
                                                    <a class="btn btn-primary" id="gcash"
                                                        style="background: transparent;margin-left: 20px;"><img
                                                            src="/images/gcash.png" alt="" srcset=""
                                                            width="150px" height="50px" onclick="gcashClick()"></a>
                                                    {{-- <a class="btn btn-primary" id="credit"
                                                        style="background: transparent;margin-left: 20px;"><img
                                                            src="/images/mastercard.png" alt=""
                                                            srcset="" width="150px" height="50px"
                                                            onclick="creditClick()"></a> --}}
                                                    <input required type="hidden" name="paymentmethod"
                                                        id="payment">
                                                </div>
                                            </center>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="rowHead">
                                        <div class="columnBody">
                                            <a href="/signup?as={{ $as }}&step=2" class="btn btn-primary"
                                                style="background:transparent;color:#464646;border:none;">Back</a>
                                        </div>
                                        <div class="columnBody">
                                            <a class="btn btn-primary"
                                                style="background:transparent;color:#5F939A;border:none;float:right;"
                                                onclick="onDone()">Done</a>
                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="div" style="background: #EDEDED">
        <button style="visibility: hidden;" data-bs-toggle="modal" data-bs-target="#gcashModal"
            id="btnGcash"></button>
        <button style="visibility: hidden;" data-bs-toggle="modal" data-bs-target="#creditModal"
            id="btnCredit"></button>
        <button style="visibility: hidden;" data-bs-toggle="modal" data-bs-target="#cashModal"
            id="btnCashPayment"></button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="js/jquery-2.1.0.min.js"></script>
    <script>
        function cashClick() {
            // let cash = document.getElementById('cash');
            let gcash = document.getElementById('gcash');
            // let credit = document.getElementById('credit');

            // cash.removeAttribute("style");
            gcash.removeAttribute("style");
            // credit.removeAttribute("style");
            // credit.setAttribute("style", "background: transparent;margin-left: 20px;");
            gcash.setAttribute("style", "background: transparent;margin-left: 20px;");

            let pment = document.getElementById('payment');
            pment.value = "cash";
        }

        function gcashClick() {
            // let cash = document.getElementById('cash');
            let gcash = document.getElementById('gcash');
            // let credit = document.getElementById('credit');

            // cash.removeAttribute("style");
            gcash.removeAttribute("style");
            // credit.removeAttribute("style");
            // credit.setAttribute("style", "background: transparent;margin-left: 20px;");
            gcash.setAttribute("style", "margin-left: 20px;");
            // cash.setAttribute("style", "background: transparent;");

            let pment = document.getElementById('payment');
            pment.value = "gcash";
        }

        function creditClick() {
            let cash = document.getElementById('cash');
            let gcash = document.getElementById('gcash');
            let credit = document.getElementById('credit');

            cash.removeAttribute("style");
            credit.removeAttribute("style");
            gcash.removeAttribute("style");
            gcash.setAttribute("style", "background: transparent;margin-left: 20px;");
            cash.setAttribute("style", "background: transparent;");
            credit.setAttribute("style", "margin-left: 20px;");


            let pment = document.getElementById('payment');
            pment.value = "credit";

        }

        function onDone() {
            let pment = document.getElementById('payment');

            if (pment.value == "" || pment === undefined) {
                setTimeout(() => {
                    Swal.fire({
                        position: 'center',
                        icon: 'warning',
                        title: 'Please choose first your payment method',
                        showConfirmButton: false,
                        timer: 800
                    });
                }, 500);
            } else {
                if (pment.value == "gcash") {
                    let btnGcash = document.getElementById('btnGcash');
                    btnGcash.click();

                } else if (pment.value == "credit") {
                    let btnCredit = document.getElementById('btnCredit');
                    btnCredit.click();
                } else if (pment.value == "cash") {
                    let btnCashPayment = document.getElementById('btnCashPayment');
                    btnCashPayment.click();
                }
            }
        }
    </script>
    @if (session()->pull('successDeleteService'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Deleted Service',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('successDeleteService') }}
    @endif
    @if (session()->pull('errorDeleteService'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Failed to Delete Service, Please Try Again!',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('errorDeleteService') }}
    @endif
    @if (session()->pull('errorCreate'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Failed to Create Account, Please Try Again!',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('errorCreate') }}
    @endif

    <div class="modal fade" id="addServicesModal" tabindex="-1" role="dialog"
        aria-labelledby="addServicesModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: #EDEDED;border:none;">
                    <p style="font-family: 'Bebas Neue', cursive;font-size:25px; ">Add Service</p>
                </div>
                <form action="#" method="POST">
                    @csrf
                    <div class="modal-body" style="background: #EDEDED;border:none;">
                        <div class="row">
                            <div class="form-group" style="margin-left: 30px;">
                                <label for="servicename" class="for"
                                    style="font-family: 'Bebas Neue', cursive">Service Name</label>
                                <br>
                                <input required type="text" name="servicename" id="servicename"
                                    style="background: #EDEDED;width: 85%;">
                            </div>
                            <br>
                            <div class="form-group" style="margin-left: 30px;">
                                <label for="details" class="for"
                                    style="font-family: 'Bebas Neue', cursive">Details</label>
                                <br>
                                <textarea required name="details" id="details" cols="30" rows="5" style="width: 85%;"></textarea>
                            </div>
                            <br>
                            <div class="form-group" style="margin-left: 30px;">
                                <label for="price" class="for"
                                    style="font-family: 'Bebas Neue', cursive">Price</label>
                                <br>
                                <input required type="number" name="price" id="price"
                                    style="background: #EDEDED;width: 85%;">
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer" style="background: #EDEDED;border:none;">
                        <a id="btnAddService" class="btn btn-primary" style="background: #5F939A;border:none;"
                            name="btnAddService" value="true">Proceed</a>
                        <button id="btnAddServiceClose" type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="creditModal" tabindex="-1" role="dialog" aria-labelledby="creditModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('paymentmethod.store') }}" method="POST">
                    @csrf
                    <div class="modal-body" style="background: #EDEDED;border:none;">
                        <div class="row">
                            <div class="form-group" style="margin-left: 30px;">
                                <label for="accountname" class="for">Account Name</label>
                                <br>
                                <input required type="text" name="accountname" id=""
                                    style="background: #EDEDED;width: 85%;">
                            </div>
                            <br>
                            <div class="form-group" style="margin-left: 30px;">
                                <label for="acountnumber" class="for">Account Number</label>
                                <br>
                                <input required type="number" name="accountnumber" id=""
                                    style="background: #EDEDED;width: 85%;">
                            </div>
                            <br>
                            <div class="form-group" style="margin-left: 30px;">
                                <label for="cardnumber" class="for">Card Number</label>
                                <br>
                                <input required type="number" name="cardnumber" id=""
                                    style="background: #EDEDED;width: 85%;">
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer" style="background: #EDEDED;border:none;">
                        <button type="submit" class="btn btn-primary" style="background: #5F939A;border:none;"
                            name="btnCredit" value="true">Proceed</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="cashModal" tabindex="-1" role="dialog" aria-labelledby="cashModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('paymentmethod.store') }}" method="POST">
                    @csrf
                    <div class="modal-body" style="background: #EDEDED;border:none;">
                        <div class="row">
                            <div class="form-group" style="margin-left: 30px;">
                                <label for="accountname" class="for">Full Name</label>
                                <br>
                                <input required type="text" name="accountname" id=""
                                    style="background: #EDEDED;width: 85%;">
                            </div>
                            <br>
                            <div class="form-group" style="margin-left: 30px;">
                                <label for="acountnumber" class="for">Phone Number</label>
                                <br>
                                <input required type="number" name="accountnumber" id=""
                                    style="background: #EDEDED;width: 85%;" value="{{ $phoneNum }}">
                            </div>
                            <br>

                        </div>
                    </div>
                    <div class="modal-footer" style="background: #EDEDED;border:none;">
                        <button type="submit" class="btn btn-primary" style="background: #5F939A;border:none;"
                            name="btnCashPayment" value="true">Proceed</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="gcashModal" tabindex="-1" role="dialog" aria-labelledby="gcashModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('paymentmethod.store') }}" method="POST">
                    @csrf
                    <div class="modal-body" style="background: #EDEDED;border:none;">
                        <div class="row">
                            <div class="form-group" style="margin-left: 30px;">
                                <label for="gcashnumber" class="for">Gcash Number</label>
                                <br>
                                <input required type="number" name="accountnumber" id=""
                                    style="background: #EDEDED;width: 85%;">
                            </div>
                            <br>

                            <div class="form-group" style="margin-left: 30px;">
                                <label for="gcashname" class="for">Gcash Account Name</label>
                                <br>
                                <input required type="text" name="accountname" id=""
                                    style="background: #EDEDED;width: 85%;">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer" style="background: #EDEDED;border:none;">
                        <button type="submit" class="btn btn-primary" style="background: #5F939A;border:none;"
                            name="btnGcash" value="true">Proceed</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="cancelModal" tabindex="-1" role="dialog" aria-labelledby="cancelModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('home') }}" method="GET">
                    <div class="modal-body">
                        <input type="hidden" name="cancel" value="true">
                        <h5 class="modal-title" id="cancelModalLabel">Do you want to proceed to cancel creating
                            profile ?</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" style="background: #5F939A;border:none;">Yes,
                            Proceed</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="/js/ajax.js"></script>
</body>

</html>
