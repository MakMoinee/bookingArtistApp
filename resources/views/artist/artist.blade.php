<!DOCTYPE html>
<!-- saved from url=(0053)https://coreui.io/demos/bootstrap/4.2/free/index.html -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html;">
    <meta charset="utf-8">
    <link rel="icon" href="/storage/images/favicon.ico" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bukidnon Groove</title>
    <link rel="icon" type="image/x-icon" sizes="192x192" href="/storage/images/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="/storage/images/favicon.ico">
    <link rel="icon" type="image/x-icon" sizes="96x96" href="/storage/images/favicon.ico">
    <link rel="icon" type="image/x-icon" sizes="16x16" href="/storage/images/favicon.ico">
    <link rel="manifest" href="https://coreui.io/demos/bootstrap/4.2/free/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="./Dashboard_files/simplebar.css">
    <link rel="stylesheet" href="./Dashboard_files/simplebar(1).css">

    <link href="./Dashboard_files/style.css" rel="stylesheet">

    <link rel="stylesheet" href="./Dashboard_files/prism.css">
    <link href="./Dashboard_files/examples.css" rel="stylesheet">
    <script type="text/javascript" async="" src="./Dashboard_files/js"></script>
    <script src="./Dashboard_files/667090843876081" async=""></script>
    <script src="./Dashboard_files/identity.js.download" async=""></script>
    <script type="text/javascript" async="" src="./Dashboard_files/fbevents.js.download"></script>
    <script type="text/javascript" async="" src="./Dashboard_files/analytics.js.download"></script>
    <script async="" src="./Dashboard_files/gtm.js.download"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KX4JH47');
    </script>
    <link href="./Dashboard_files/coreui-chartjs.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"
        integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .sidebar {
            --cui-sidebar-bg: #2D2E2E !important;
        }

        .table-condensed {
            width: 100%;
            margin-left: 30px;
            background: #EDEDED;
            margin-top: 20px;
        }

        input[type="text"] {
            background: #FFFFFF;
            border: 0;
            border-bottom: 1.5px solid #5F939A;
            outline: 0;
        }

        .today {
            background: #5F939A;
            color: white;
        }

        .active.day {
            background: blue;
            color: white;
        }

        .old.disabled.day,
        .disabled.day {
            background: gray;
        }
    </style>
</head>

<body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
        <div class="sidebar-brand d-none d-md-flex" style="font-family: 'Bebas Neue', cursive">
            <h3>Bukidnon Groove</h3>
        </div>
        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="init">
            <div class="simplebar-wrapper" style="margin: 0px;">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask">
                    <div class="simplebar-offset" style="right:
              0px; bottom: 0px;">
                        <div class="simplebar-content-wrapper" tabindex="0" role="region"
                            aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                            <div class="simplebar-content" style="padding: 10px;color:white;">
                                <h2 style="font-family: 'Bebas Neue', cursive">Filter By:</h2>
                                <hr style="margin-top: -5px;color:white;font-weight: 4px;">
                                <li class="nav-group">
                                    <a href="#" class="nav-link nav-group-toggle" style="background:transparent;">
                                        Location
                                    </a>
                                    <ul class="nav-group-items">
                                        <select name="location" id=""
                                            style="padding:5px;background:white;border:none;">
                                            <option value="Valencia City, Bukidnon">Valencia City, Bukidnon</option>
                                        </select>
                                    </ul>
                                </li>
                                <hr style="color:white;font-weight: 4px;">
                                <li class="nav-group">
                                    <a href="#" class="nav-link nav-group-toggle">
                                        Genre
                                    </a>
                                    <ul class="nav-group-items">
                                        <input style="margin-left: 20px;margin-bottom: 5px;" type="search"
                                            name="genre" id="" multiple placeholder="Filter Genre ...">
                                    </ul>
                                </li>
                                <hr style="color:white;font-weight: 4px;">
                                <div class="nav-group">
                                    <a href="#" class="nav-link nav-group-toggle">
                                        Profile Type
                                    </a>
                                    <ul class="nav-group-items">
                                        <input type="checkbox" name="band" id="">&nbsp;<span>Band</span>
                                        <br>
                                        <input type="checkbox" name="singer" id=""
                                            value="Music/Singer">&nbsp;<span>Music/Singer</span>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder" style="width: 256px; height: 841px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility:
          hidden;">
                <div class="simplebar-scrollbar" style="width: 0px; display:
            none;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar"
                    style="height: 247px; transform: translate3d(0px, 0px, 0px);
            display: block;"></div>
            </div>
        </ul>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <header class="header header-sticky" style="background:#e3e2da">
            <div class="container-fluid">
                <button class="header-toggler px-md-0 me-md-3" type="button"
                    onclick="coreui.Sidebar.getInstance(document.querySelector(&#39;#sidebar&#39;)).toggle()">
                    <svg class="icon icon-lg" xmlns="http://www.w3.org/2000/svg" width="118" height="46"
                        fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </button>
                <a class="header-brand d-md-none" href="https://coreui.io/demos/bootstrap/4.2/free/#"
                    style="background:#e3e2da">

                    <ul class="header-nav d-none d-md-flex" style="float:right;">
                        {{--  --}}
                    </ul>
                    <ul class="header-nav d-none d-md-flex ms-auto" style="font-family: 'Roboto', sans-serif;">
                        <li class="nav-item"><a class="nav-link" href="/artistdash">Dashboard</a></li>
                        @if ($uType == 2)
                            <li class="nav-item"><a class="nav-link active" href="/artists">Artist</a></li>
                        @endif
                        <li class="nav-item"><a class="nav-link" href="/events">Events</a></li>
                    </ul>
                    <ul class="header-nav ms-3">
                        <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown"
                                href="https://coreui.io/demos/bootstrap/4.2/free/#" role="button"
                                aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-md">
                                    @if ($pic == '')
                                        <img class="avatar-img" src="./Dashboard_files/8.jpg" alt="user@email.com">
                                    @else
                                        <img class="avatar-img" src="/storage/profiles/{{ $pic }}"
                                            alt="user@email.com">
                                    @endif
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end pt-0">

                                <div class="dropdown-header bg-light py-2">
                                    <div class="fw-semibold">Account</div>
                                </div>
                                <a class="dropdown-item" href="/profile">
                                    <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-person-fill"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                    </svg> Profile
                                </a>
                                <a class="dropdown-item" href="/verify">
                                    <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-patch-check-fill"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                                    </svg>Verification
                                </a>
                                <a class="dropdown-item" href="https://coreui.io/demos/bootstrap/4.2/free/#">
                                    <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-gear-wide-connected"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434l.071-.286zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5zm0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78h4.723zM5.048 3.967c-.03.021-.058.043-.087.065l.087-.065zm-.431.355A4.984 4.984 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8 4.617 4.322zm.344 7.646.087.065-.087-.065z" />
                                    </svg> Settings
                                </a>
                                <a class="dropdown-item" href="#" data-coreui-toggle="modal"
                                    data-coreui-target="#logOutModal">
                                    <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-box-arrow-right"
                                        viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                        <path fill-rule="evenodd"
                                            d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                    </svg> Logout
                                </a>
                        </li>
                    </ul>
            </div>
            <div class="header-divider"></div>
            <div class="container-fluid">

            </div>
        </header>
        <div class="body flex-grow-1 px-3" style="background: #504c4c; padding-top: 20px;">
            <div class="container-lg">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="" autocomplete="off">
                            <div class="form-group" style="width: 80%">

                                <input class="form-control" type="text" name="search" id=""
                                    style="float:left;width: 50%;font-size:15px;background: #e3e2da;"
                                    placeholder="Search Artist">
                                <button class="btn btn-primary" style="background: #5F939A;border:none;"><i
                                        class="bi bi-search" style="cursor: pointer;"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12">
                        @foreach ($bands as $b)
                            <div class="col-lg-5" style="float:left;margin-right: 20px;">
                                <div class="card mb-4" style="background: #e3e2da;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <center>
                                                        <img class="avatar-img" style="height: 150px; width: 150px;"
                                                            src="/storage/profiles/{{ $b['bandPic'] }}" alt=""
                                                            srcset="">
                                                    </center>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <center>
                                                        <h3>{{ $b['bandName'] }}</h3>
                                                    </center>
                                                </div>
                                                <div class="row">
                                                    <center>
                                                        <label>Band</label>
                                                    </center>
                                                </div>
                                                <br>
                                                <br>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <center>
                                                            <div class="col-lg-6" style="float: left;">
                                                                <h6><i class="bi bi-geo-alt-fill"
                                                                        style="margin-right: 5px;"></i>{{ $b['address'] }}
                                                                </h6>
                                                                <br>
                                                                <h6><i class="bi bi-file-earmark-music-fill"
                                                                        style="margin-right: 5px;"></i>{{ $b['genres'] }}
                                                                </h6>
                                                            </div>
                                                            <div class="col-lg-6" style="float: left;">
                                                                <h6><i class="bi bi-people-fill"
                                                                        style="margin-right: 5px;"></i>{{ $b['bandSize'] }}
                                                                    Members</h6>
                                                                <br>
                                                                {{-- <h6><i class="bi bi-star-fill"
                                                                        style="margin-right: 5px;"></i>
                                                                    <i class="bi bi-star-fill"
                                                                        style="color:yellow;"></i>
                                                                    <i class="bi bi-star-fill"
                                                                        style="color:yellow;"></i>
                                                                    <i class="bi bi-star-fill"
                                                                        style="color:yellow;"></i>
                                                                    <i class="bi bi-star-fill"
                                                                        style="color:yellow;"></i>
                                                                    <i class="bi bi-star-fill"
                                                                        style="color:yellow;"></i>
                                                                </h6> --}}
                                                            </div>
                                                        </center>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <center>
                                                            <div class="col-lg-6" style="float:left;">
                                                                <button class="btn btn-primary rounded-pill"
                                                                    data-coreui-toggle="modal"
                                                                    data-coreui-target="#viewServicesModal{{ $b['profileID'] }}"
                                                                    style="background: transparent; color:black;border: 1px solid black;">View
                                                                    Services</button>

                                                                <div class="modal fade"
                                                                    id="viewServicesModal{{ $b['profileID'] }}"
                                                                    tabindex="-1" role="dialog"
                                                                    aria-labelledby="viewServicesModalLabel{{ $b['profileID'] }}"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body">
                                                                                <h5 class="modal-title"
                                                                                    id="viewServicesModalLabel{{ $b['profileID'] }}">
                                                                                    Services
                                                                                </h5>
                                                                                <br>
                                                                                <br>
                                                                                <div class="row">
                                                                                    <div class="col-lg-12">
                                                                                        <div class="col-lg-6"
                                                                                            style="float:left;margin-left: 30px;">
                                                                                            @if (array_key_exists($b['userID'], $serviceMap))
                                                                                                @foreach ($serviceMap[$b['userID']] as $item)
                                                                                                    <h5
                                                                                                        style="text-align: start">
                                                                                                        {{ $item['serviceName'] }}
                                                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                        {{ $item['price'] }}
                                                                                                    </h5>
                                                                                                @endforeach
                                                                                            @endif

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer"
                                                                                style="border:none;">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-coreui-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6" style="float:left;">
                                                                <button onclick="sendRequest('{{ $b['profileID'] }}')"
                                                                    data-coreui-toggle="modal"
                                                                    data-coreui-target="#addEventModal"
                                                                    class="btn btn-primary rounded-pill"
                                                                    style="background: #5F939A;border:none;">Send
                                                                    Booking
                                                                    Request</button>
                                                            </div>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <input type="hidden" name="artistid" id="artistid">
                    </div>
                </div>
            </div>
        </div>
        <div>
            <button id="btnShowArtist" class="btn btn-primary" style="visibility: hidden;"
                data-coreui-toggle="modal" data-coreui-target="#addArtistForEventModal"></button>
            <button id="btnShowEvent" class="btn btn-primary" style="visibility: hidden;" data-coreui-toggle="modal"
                data-coreui-target="#addEventModal"></button>
            <button id="btnShowServicesModal" class="btn btn-primary" style="visibility: hidden;"
                data-coreui-toggle="modal" data-coreui-target="#showServiceModal"></button>
            <button id="btnShowPaymentModal" class="btn btn-primary" style="visibility: hidden;"
                data-coreui-toggle="modal" data-coreui-target="#cashModal"></button>
        </div>
        <script src="./Dashboard_files/coreui.bundle.min.js.download"></script>
        <script src="./Dashboard_files/simplebar.min.js.download"></script>

        <script src="./Dashboard_files/coreui-utils.js.download"></script>
        <div class="modal fade" id="logOutModal" tabindex="-1" role="dialog" aria-labelledby="logOutModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="/logout" method="GET">
                        <div class="modal-body">
                            <h5 class="modal-title" id="logOutModalLabel">Do you want to proceed logging out ?</h5>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Yes, Proceed</button>
                            <button type="button" class="btn btn-secondary"
                                data-coreui-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="addEventModal" tabindex="-1" role="dialog"
            aria-labelledby="addEventModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <form action="#" method="POST" autocomplete="off" onsubmit="return false;">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="row">
                                    <label for="eventnames" class="for"
                                        style="font-family: 'Roboto', sans-serif;"><b>Event Name</b><span
                                            style="color:red;">*</span></label>
                                    <br>
                                    <input required type="text" name="event" id="eventName"
                                        style="width: 150px;">
                                </div>
                                <br>
                                <br>
                                <h2 style="font-family: 'Bebas Neue', cursive">BOOKING REQUEST</h2>
                                <hr style="margin-top: -5px; font-weight: 2px; color:#2D2E2E;">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-lg-6" style="float: left;">
                                            <label for="selectdate" class="for">Select Date:</label>
                                            <input required type="text" name="eventdate" id="eventdate"
                                                style="cursor: not-allowed" onkeypress="return false;"
                                                onclick="return false;"
                                                pattern="[0-9][0-9][0-9][0-9]-[0-9][0-9]-[0-9][0-9]">
                                            <br>
                                            <div class="date" style="width: 80%;cursor:pointer;" id="datepicker">
                                            </div>

                                        </div>
                                        <div class="col-lg-6" style="float: left;">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="col-lg-6" style="float:left;">
                                                        <label for="fromTime" class="for"><b>From
                                                                (hh:mm):</b></label>
                                                        <input required type="text" class="form-control"
                                                            name="fromTime" id="fromTime" style="width: 80%;">
                                                    </div>
                                                    <div class="col-lg-6" style="float:left;">
                                                        <label for="toTime" class="for"><b>To
                                                                (hh:mm):</b></label>
                                                        <input required type="text" class="form-control"
                                                            name="toTime" id="toTime" style="width: 80%;">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label for="location" class="for"><b>Location</b></label>
                                                    <center>
                                                        <div class="col-lg-6">
                                                            <select required class="form-control" name="location"
                                                                id="location">
                                                                <option value=""></option>
                                                                <option value="Valencia City">Valencia City, Bukidnon
                                                                </option>
                                                                <option value="Malaybalay City">Malaybalay City,
                                                                    Bukidnon</option>
                                                                <option value="Kibawe">Kibawe, Bukidnon</option>
                                                                <option value="Cabanglasan">Cabanglasan, Bukidnon
                                                                </option>
                                                                <option value="Quezon">Quezon, Bukidnon</option>
                                                                <option value="Maramag">Maramag, Bukidnon</option>
                                                                <option value="Lantapan">Lantapan, Bukidnon</option>
                                                                <option value="San Fernando">San Fernando, Bukidnon
                                                                </option>
                                                            </select>
                                                            <br>
                                                            <label for="add" class="for">Additional
                                                                Info:</label>
                                                            <br>

                                                            <textarea required style="text-align: start;" name="add" id="addInfo" cols="30" rows="5"
                                                                value="">
                                                        </textarea>
                                                        </div>
                                                    </center>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer" style="border:none;">
                            <div class="col-lg-12">
                                <div class="col-lg-6" style="float: left;">
                                    <button class="btn btn-secondary" data-coreui-dismiss="modal">Cancel</button>
                                </div>
                                <div class="col-lg-6"style="float: right;">
                                    <button id="btnContinueShowArtist" type="submit" class="btn btn-primary"
                                        style="float: right;background: transparent;border:none;float:right;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                            fill="#5F939A" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="showServiceModal" tabindex="-1" role="dialog"
            aria-labelledby="showServiceModalLabel" aria-hidden="true" data-coreui-backdrop="static"
            data-coreui-keyboard="false">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <form action="/artists" method="POST" autocomplete="off" onsubmit="return false;">
                        @csrf
                        <div class="modal-header">
                            <h3 style="font-family: 'Bebas Neue', cursive">
                                Services
                            </h3>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12" id="serviceCol">
                                        <center>
                                            {{-- <div class="col-md-6" style="float: left;">

                                                <button class="btn btn-primary"
                                                    style="background:transparent;font-family: 'Bebas Neue', cursive;color:black; width:100%; text-align: start;">
                                                    <div class="row">
                                                        <div class="col-md-3" style="font-size: 20px;">
                                                            serviceName
                                                        </div>
                                                        <div class="col-md-2" style="font-size: 20px;">
                                                            price
                                                        </div>
                                                        <div class="col-md-4"
                                                            style="display: inline-block;margin-left: 45px;">
                                                            <h6 style="margin-top: 7px;float:left;">view details
                                                            </h6>

                                                        </div>


                                                    </div>
                                                </button>
                                            </div> --}}
                                        </center>
                                    </div>
                                    <input type="hidden" name="services" id="listofservice" multiple>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer" style="border:none;">
                            <div class="col-lg-12">
                                <div class="col-lg-6" style="float: left;">
                                    <button class="btn btn-secondary" data-coreui-dismiss="modal"
                                        onclick="document.getElementById('btnShowArtist').click();">back</button>
                                </div>
                                <div class="col-lg-6"style="float: right;">
                                    <a id="btnSelectServices" class="btn btn-primary"
                                        style="float: right;background: transparent;border:none;float:right;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                            fill="#5F939A" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                        </svg>
                                    </a>
                                </div>
                                <button class="btn btn-primary" style="visibility: hidden" id="btnSubmitEvent"
                                    type="submit"></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <script>
            let idData = {!! json_encode($idData, JSON_HEX_TAG) !!};
            let bandData = {!! json_encode($bandData, JSON_HEX_TAG) !!};
            let serviceMap = {!! json_encode($serviceMap, JSON_HEX_TAG) !!};
            let selectedID = 0;
            $(document).ready(function() {
                $.ajaxSetup({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                });
                $('#datepicker').datepicker({
                    format: "yyyy-mm-dd",
                    todayHighlight: true,
                    startDate: new Date(),
                    autoclose: "true"
                });
                $('#datepicker').on('changeDate', function() {
                    $('#eventdate').val(
                        $('#datepicker').datepicker('getFormattedDate')
                    );
                    document.getElementById('eventdate').setAttribute("value", $('#datepicker').datepicker(
                        'getFormattedDate'));
                });

                $('#btnContinueShowArtist').on("click", function() {
                    let btnShowArtist = document.getElementById('btnShowArtist');
                    btnShowArtist.click();
                });

                $('#eventName').on('change', function(e) {
                    console.log(e);
                });

                $('#btnSelectServices').on('click', function() {
                    let panels = document.querySelectorAll(".panelService");
                    let ids = "";
                    panels.forEach(element => {
                        console.log(element);
                        if (element.getAttribute('senabled')) {
                            let serviceID = element.getAttribute('serviceid');
                            if (ids == "") {
                                ids = serviceID;
                            } else {
                                ids += "," + serviceID;
                            }
                            let listService = document.getElementById('listofservice');
                            listService.setAttribute("value", ids);
                        }
                    });

                    let formData = new FormData();
                    formData.append("eventname", document.getElementById('eventName').value);
                    formData.append("eventdate", document.getElementById('eventdate').getAttribute('value'));
                    formData.append("fromTime", document.getElementById('fromTime').value);
                    formData.append("toTime", document.getElementById('toTime').value);
                    formData.append("location", document.getElementById('location').value);
                    formData.append("addInfo", document.getElementById('addInfo').value);
                    formData.append("artistid", document.getElementById('artistid').value);
                    formData.append("services", ids);

                    let rBody = {};
                    for (let [k, v] of formData.entries()) {
                        rBody[k] = v;
                    }
                    $.ajax({
                        url: "/artists",
                        type: "POST",
                        data: rBody,
                        error: function(xhr, status, error) {
                            if (xhr.responseJSON) {
                                Swal.fire({
                                    position: "center",
                                    icon: "warning",
                                    title: "Failed to add Event",
                                    showConfirmButton: false,
                                    timer: 800,
                                });
                            } else {}
                        },
                    }).done(function(data) {
                        window.location = "/artists";
                    });
                });
                $('#btnShowArtist').on("click", function() {
                    let searchKey = $('#artistid').val();
                    let bData = bandData.length === 0 ? [] : JSON.parse(JSON.stringify(bandData));
                    let fData = bData[searchKey];
                    let userID = fData['userID'];
                    let serviceData = serviceMap[userID];
                    serviceData.forEach(element => {
                        let el = $('#serviceCol');
                        el.append(`<div class="col-md-6 panelService" style="float: left;"  id="servicePanel${element['serviceID']}" serviceID="${element['serviceID']}">
                    <button class="btn btn-primary"
                        style="background:transparent;font-family: 'Bebas Neue', cursive;color:black; width:100%; text-align: start;">
                        <div class="row">
                            <div class="col-md-3" style="font-size: 20px;">
                                ${element['serviceName']}
                            </div>
                            <div class="col-md-2" style="font-size: 20px;">
                                ${element['price']}
                            </div>
                            
                            <div class="col-md-4"
                                style="display: inline-block;margin-left: 45px;">
                                <h6 style="margin-top: 7px;float:left;">view details
                                </h6>
                            </div>
                            
                        </div>
                    </button>
                    </div>`);



                        $(`#servicePanel${element['serviceID']}`).on('click', function() {
                            console.log(this.getAttribute("serviceid"));

                            let mStyle = this.style;
                            if (mStyle[0] != "float") {
                                this.style = "float:left;"
                                this.removeAttribute('senabled');
                            } else {
                                this.style = "background: #5F939A;float:left;";
                                this.setAttribute('senabled', 'true');
                            }
                        });
                    });


                    let btnShowServicesModal = document.getElementById('btnShowServicesModal');
                    btnShowServicesModal.click();
                });
            });

            function sendRequest(id) {
                document.getElementById('artistid').value = id
            }
        </script>
        @if (session()->pull('successAddBooking'))
            <script>
                setTimeout(() => {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Successfully Added Booking',
                        showConfirmButton: false,
                        timer: 800
                    });
                }, 500);
            </script>;
            {{ session()->forget('successAddBooking') }}
        @endif
        @if (session()->pull('errorAddBooking'))
            <script>
                setTimeout(() => {
                    Swal.fire({
                        position: 'center',
                        icon: 'warning',
                        title: 'Failed To Add Event',
                        showConfirmButton: false,
                        timer: 800
                    });
                }, 500);
            </script>;
            {{ session()->forget('errorAddBooking') }}
        @endif
</body>

</html>
