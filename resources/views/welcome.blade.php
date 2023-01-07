<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="/storage/images/favicon.ico" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bukidnon Groove</title>
    <link href="https://fonts.cdnfonts.com/css/slasher-film" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .columnModal {
            float: left;
            width: 50%;
            height: 400px;
        }

        /* Clear floats after the columns */
        .rowModal:after {
            content: "";
            display: table;
            clear: both;
        }

        .columnSignupModal {
            float: left;
            width: 50%;
            height: 80px;
        }

        /* Clear floats after the columns */
        .rowSignupModal:after {
            content: "";
            display: table;
            clear: both;
        }

        input[type="email"] {
            background: #EDEDED;
            border: 0;
            border-bottom: 1.5px solid #5F939A;
            outline: 0;
        }

        input[type="password"] {
            background: #EDEDED;
            border: 0;
            border-bottom: 1.5px solid #5F939A;
            outline: 0;
        }
    </style>
</head>

<body style="background: #afafafc5;">
    <header style="background: #afafafc5;padding:15px;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: transparent !important;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"
                    style="font-family: 'Roboto Medium',sans-serif;font-size: 20px;color:#2D2E2E;filter: drop-shadow(0.5px 0.5px 0.5px #2D2E2E);line-height: 18px;">BUKIDNON
                    <span style="margin-top: -20px;"><br>GROOVE</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0"
                        style="margin-left: 100px;font-family: 'Roboto Medium',sans-serif;color:#2D2E2E;filter: drop-shadow(0.5px 0.5px 0.5px #2D2E2E);">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Artist</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                    <div class="d-flex" style="background: #afafafc5">
                        <button
                            style="background: #afafafc5;border:none;color:black;text-decoration: none;margin-top: 5px;font-family: 'Roboto',sans-serif;cursor:pointer;"
                            data-bs-toggle="modal" data-bs-target="#loginModal"
                            onclick="clearLoginFields()">Login</button>
                        <a href="#"
                            style="margin-left: 20px;font-family:'Roboto',sans-serif;background: #5F939A;text-decoration:none;color:white;padding-left:15px;padding-right:15px;padding-top: 5px;padding-bottom: 5px;"
                            class="rounded-pill" onclick="openSignUpModal()">Signup</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <section style="background: #afafafc5;width:100%;height:1150px;">
        <div class="container">
            <div class="row">
                <img src="/images/landingpageimg.jpg" alt="" srcset="" class="img-responsive">
            </div>

            <div class="row" style="margin-top: 30px;">
                <img src="/storage/images/banner.png" alt="" srcset="" class="img-responsive"
                    style="margin-left: -120px; width: 450px;">
                <div class="col-md-8">
                    <h4 style="color:#2D2E2E; font-family: 'Roboto Medium',sans-serif;top: 587px;filter: drop-shadow(0.5px 0.5px 0.5px #2D2E2E);"
                        class="r0">
                        THE FASTEST WAY
                        TO FIND AND BOOK GREAT EMERGING</h4>
                </div>
                <br>
                <div class="col-md-8" style="margin-left: 330px;margin-top: -20px;">
                    <h1
                        style="position: absolute;color:#2D2E2E;font-family: 'Roboto Black',sans-serif;filter: drop-shadow(0.5px 0.5px 0.5px #2D2E2E);">
                        BUKIDNON ARTISTS</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                    <div class="container" style="margin-top: 150px;">
                        <div class="row">
                            <div class="col-xs-1">
                                <h5 style="color:#2D2E2E;">ARTIST</h5>
                                <a href="/signup?as=BAND&step=1">
                                    <button class="btn btn-outline-secondary rounded-pill p-3 mt-3"
                                        style="color:#2D2E2E;margin-left: -40px;width: 200px;">SIGNUP AS AN
                                        ARTIST</button>
                                </a>
                            </div>
                            <div class="col-xs-1" style="margin-top: -105px;margin-left: 220px; color:#2D2E2E;">
                                <h5 style="padding-left: 20px;">INDUSTRY</h5>
                                <a href="/signup?as=HOST&step=1">
                                    <button class="btn btn-outline-secondary rounded-pill p-3 mt-3"
                                        style="color:#2D2E2E; width: 200px;">SIGNUP AS A HOST</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="/storage/images/Vector.png" alt="" srcset="" class="img-responsive"
                        width="40.75px" height=" 501.89px" style="float: right;margin-top: 350px;">
                </div>
            </div>

        </div>
        <div class="custom" style="width: 400px;">
            <div class="mbox" style="margin-top: -390px;margin-left: 110px;box-shadow: -2px 0px 0px 0px #2D2E2E;">
                <br>
                <h5
                    style="padding-left:15px;filter: drop-shadow(0.5px 0.5px 0.5px #2D2E2E);font-family: 'Roboto Medium',sans-serif;">
                    104 ARTIST</h5>
                <h5
                    style="padding-left:15px;filter: drop-shadow(0.5px 0.5px 0.5px #2D2E2E);font-family: 'Roboto Medium',sans-serif;">
                    80 HOST</h5>
                <h6
                    style="padding-left:15px;filter: drop-shadow(0.5px 0.5px 0.5px #2D2E2E);font-family: 'Roboto Medium',sans-serif;">
                    420 GIGS ORGANISED</h6>
                <br>
            </div>
        </div>
    </section>
    <section style="background: #F8F8F6;height:800px;">
        <div class="container">
            <div class="row" style="padding-top: 150px;">
                <div class="d-flex justify-content-center">
                    <img src="/storage/images/favicon.ico" alt="" class="img-responsive" height="100px;">
                    <h2
                        style="margin-top: 15px;color:#5F939A;font-family: 'Roboto Medium',sans-serif;filter: drop-shadow(0.5px 0.5px 0.5px #2D2E2E);">
                        BUKIDNON<br>GROOVE</h2>
                </div>
            </div>
            <div class="row" style="margin-top: 50px;">
                <div class="d-flex justify-content-center">
                    <h4 class="text-center" style="color:#2D2E2E;font-family: 'Roboto Light',sans-serif;">Lorem
                        ipsum dolor sit amet,
                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
                </div>
            </div>
        </div>
    </section>
    <section style="background: #5F939A;height: 900px;">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="container" style="margin-top: 140px;margin-left: 30px;">
                        <div class="row">
                            <div class="col-md-4">
                                <h1
                                    style="font-family: 'Roboto Medium',sans-serif; color: #2D2E2E;filter: drop-shadow(0.5px 0.5px 0.5px #2D2E2E);">
                                    ARTIST</h1>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <h1
                                                style="font-family: 'Roboto Medium',sans-serif; color: #2D2E2E;filter: drop-shadow(0.5px 0.5px 0.5px #2D2E2E);font-size: 80px;">
                                                01</h1>
                                        </div>
                                        <div class="col-xs-2"
                                            style="margin-top: -90px;margin-left: 110px;box-shadow: -2px 0px 0px 0px #2D2E2E;">
                                            <h5 style="padding-left:15px;">SET PROFILE</h5>
                                            <h6 class="text-left"
                                                style="padding-left:15px;font-family: 'Roboto Thin',sans-serif;filter: drop-shadow(0.5px 0.5px 0.5px #2D2E2E);">
                                                Lorem
                                                ipsum dolor sit amet,
                                                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                exercitation ullamco
                                                laboris nisi ut aliquip ex ea commodo consequat.</h6>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <h1
                                                style="float:left;padding-top: 50px;font-family: 'Roboto Medium',sans-serif; color: #2D2E2E;filter: drop-shadow(0.5px 0.5px 0.5px #2D2E2E);font-size: 80px;">
                                                02</h1>
                                        </div>
                                        <div class="col-xs-2"
                                            style="margin-top: -90px;margin-left: 110px;box-shadow: -2px 0px 0px 0px #2D2E2E;">
                                            <h5 style="padding-left:15px;">LET VENUE AND HOST FIND YOU</h5>
                                            <h6 class="text-left"
                                                style="padding-left:15px;font-family: 'Roboto Thin',sans-serif;filter: drop-shadow(0.5px 0.5px 0.5px #2D2E2E);">
                                                Lorem
                                                ipsum dolor sit amet,
                                                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                exercitation ullamco
                                                laboris nisi ut aliquip ex ea commodo consequat.</h6>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">

                            </div>
                            <div class="col-md-4">
                                <h1
                                    style="font-family: 'Roboto Medium',sans-serif; color: #2D2E2E;filter: drop-shadow(0.5px 0.5px 0.5px #2D2E2E);">
                                    HOST</h1>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <h1
                                                style="font-family: 'Roboto Medium',sans-serif; color: #2D2E2E;filter: drop-shadow(0.5px 0.5px 0.5px #2D2E2E);font-size: 80px;">
                                                01</h1>
                                        </div>
                                        <div class="col-xs-2"
                                            style="margin-top: -90px;margin-left: 110px;box-shadow: -2px 0px 0px 0px #2D2E2E;">
                                            <h5 style="padding-left:15px;">CREATE</h5>
                                            <h6 class="text-left"
                                                style="padding-left:15px;font-family: 'Roboto Thin',sans-serif;filter: drop-shadow(0.5px 0.5px 0.5px #2D2E2E);">
                                                Lorem
                                                ipsum dolor sit amet,
                                                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                exercitation ullamco
                                                laboris nisi ut aliquip ex ea commodo consequat.
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 50px;">
                                        <div class="col-xs-1">
                                            <h1
                                                style="font-family: 'Roboto Medium',sans-serif; color: #2D2E2E;filter: drop-shadow(0.5px 0.5px 0.5px #2D2E2E);font-size: 80px;">
                                                02</h1>
                                        </div>
                                        <div class="col-xs-2"
                                            style="margin-top: -90px;margin-left: 110px;box-shadow: -2px 0px 0px 0px #2D2E2E;">
                                            <h5 style="padding-left:15px;">CHOOSE</h5>
                                            <h6 class="text-left"
                                                style="padding-left:15px;font-family: 'Roboto Thin',sans-serif;filter: drop-shadow(0.5px 0.5px 0.5px #2D2E2E);">
                                                Lorem
                                                ipsum dolor sit amet,
                                                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                exercitation ullamco
                                                laboris nisi ut aliquip ex ea commodo consequat.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section style="background: #EDEDED;height: 900px;">
        <div class="container">
            <div class="row" style="padding-top: 150px;">
                <div class="col-md-12">
                    <h3>TOP ARTIST</h3>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body p-3" style="background: #444444;color:white;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body p-3" style="background: #444444;color:white;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body p-3" style="background: #444444;color:white;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            {{-- SECOND ROW --}}
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body p-3" style="background: #444444;color:white;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body p-3" style="background: #444444;color:white;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body p-3" style="background: #444444;color:white;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div>
        <button class="btn" id="btnShowSignup" style="visibility: hidden;" data-bs-toggle="modal"
            data-bs-target="#signUpModal">open</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: #EDEDED;border:none;">
                    <h5 class="modal-title" id="loginModalLabel"></h5>
                    <button style="background: #EDEDED;color:black;border:none;" type="button" class="close"
                        data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="background: #EDEDED;">
                    <div class="rowModal">

                        <div class="columnModal">
                            <div class="group" style="margin-top: 70px;">
                                <center>
                                    <img src="/storage/images/favicon.ico" alt="" srcset=""
                                        height="80px" width="80px">
                                    <h5
                                        style="font-size: 20px; margin-top: 13px; float:right;;margin-right: 100px;margin-left: -100px;color:black;font-family: 'Roboto Medium',sans-serif;filter: drop-shadow(0.5px 0.5px 0.5px #2D2E2E);">
                                        BUKIDNON<br>GROOVE</h5>
                                    <br>
                                    <br>
                                    <button class="btn btn-primary rounded-pill"
                                        style="background-color: #F8F8F6;width: 75%;margin-top: 85px;border:1px solid black;color:black;"
                                        onclick="openSignUpModal();" data-bs-dismiss="modal" aria-label="Close">Sign
                                        Up</button>
                                </center>

                            </div>
                        </div>
                        <form action="/login" method="POST" autocomplete="off" enctype="multipart/form-data"
                            autocomplete="off">
                            @csrf
                            <div class="columnModal" style="left: 50%;border-left: 1.5px solid black;">

                                <center>
                                    <h3 style="font-family: 'Roboto Medium',sans-serif;margin-top: 50px;">Login</h3>
                                </center>
                                <div class="form-group" style="margin-left: 60px;">
                                    <label for="email" class="for">Email:</label>
                                    <br>
                                    <input required type="email" name="email" id="email" style="width: 85%">
                                </div>
                                <br>
                                <div class="form-group" style="margin-left: 60px;margin-top: 20px;">
                                    <label for="password" class="for">Pasword:</label>
                                    <br>
                                    <input required type="password" name="password" id="password"
                                        style="width: 85%">
                                </div>
                                <center>
                                    <button type="submit" class="btn btn-primary rounded-pill"
                                        style="background-color: #5F939A;width: 75%;margin-top: 20px;border:none;">Login</button>
                                    <br>
                                    <br>
                                    <a href="#"
                                        style="text-decoration: none;color:black;font-family: 'Roboto Medium',sans-serif;filter: drop-shadow(0.5px 0.5px 0.5px #2D2E2E);">Forgot
                                        Your
                                        Password?</a>
                                </center>

                            </div>
                    </div>


                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document" style="background: #EDEDED">
            <div class="modal-content">
                <div class="modal-header" style="background: #EDEDED;border:none;">
                    <h5 class="modal-title" id="signUpModalLabel"></h5>
                    <button style="background: #EDEDED;color:black;border:none;" type="button" class="close"
                        data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="background: #EDEDED;border:none;">
                    <center>
                        <img src="/storage/images/favicon.ico" alt="" srcset="" height="80px"
                            width="80px">
                        <h5
                            style="font-size: 20px; margin-top: 13px; float:right;;margin-right: 130px;margin-left: -130px;color:black;font-family: 'Roboto Medium',sans-serif;filter: drop-shadow(0.5px 0.5px 0.5px #2D2E2E);">
                            BUKIDNON<br>GROOVE</h5>
                        <br>
                    </center>
                    <br>
                    <br>
                    <div class="rowSignupModal">
                        <div class="columnSignupModal">
                            <center>
                                <a href="/signup?as=BAND&step=1" class="btn btn-primary rounded-pill"
                                    style="background-color: #5F939A;width: 75%;margin-top: 20px;border:none;">SIGN UP
                                    AS A
                                    ARTIST</a>
                            </center>
                            <br>
                        </div>
                        <div class="columnSignupModal" style="left: 50%;border-left: 1.5px solid black;">
                            <center>
                                <a href="/signup?as=HOST&step=1" class="btn btn-primary rounded-pill"
                                    style="background-color: #5F939A;width: 75%;margin-top: 20px;border:none;">SIGN UP
                                    AS A
                                    HOST</a>
                            </center>
                            <br>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="js/owl-carousel.js"></script>
    <script src="js/scrollreveal.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imgfix.min.js"></script>

    <script>
        function openSignUpModal() {
            let md = document.getElementById("btnShowSignup");
            setTimeout(() => {
                md.click();
            }, 200);
        }

        function clearLoginFields() {
            let email = document.getElementById("email");
            let password = document.getElementById("password")
            email.value = "";
            password.value = "";
        }
    </script>

    @if (session()->pull('successCreate'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Created Account',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('successCreate') }}
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
</body>

</html>
