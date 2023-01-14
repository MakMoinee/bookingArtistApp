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
    @if ($uType == 3)
        <style>
            .sidebar {
                --cui-sidebar-bg: #2D2E2E !important;
            }
        </style>
    @else
        <style>
            .sidebar {
                --cui-sidebar-bg: #352858 !important;
            }
        </style>
    @endif
    <style>
        input[type="number"] {
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

        .table-condensed {
            width: 100%;
            margin-left: 30px;
            background: #EDEDED;
            margin-top: 20px;
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
                            <div class="simplebar-content" style="padding: 0px;">
                                <li class="nav-item">
                                    <a href="#"></a>
                                </li>
                                @if ($uType == 3)
                                    <li class="nav-item"><a class="nav-link " href="/artistdash">
                                            <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-speedometer2"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                                                <path fill-rule="evenodd"
                                                    d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
                                            </svg> Dashboard</a></li>
                                @else
                                    <li class="nav-item"><a class="nav-link" href="/hostdash">
                                            <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-calendar-week"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                                                <path
                                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                            </svg> Calendar</a></li>
                                @endif
                                <li class="nav-item"><a class="nav-link" href="/bookings">
                                        <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-journal-text"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                            <path
                                                d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                            <path
                                                d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                                        </svg> Bookings</a></li>
                                <li class="nav-item"><a class="nav-link active" href="/events">
                                        <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-calendar4-event"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z" />
                                            <path
                                                d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                                        </svg> Events</a></li>
                                <div class="nav-group">
                                    <a class="nav-link nav-group-toggle" href="#">
                                        <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-gear-wide-connected"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434l.071-.286zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5zm0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78h4.723zM5.048 3.967c-.03.021-.058.043-.087.065l.087-.065zm-.431.355A4.984 4.984 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8 4.617 4.322zm.344 7.646.087.065-.087-.065z" />
                                        </svg> Settings</a>
                                    <ul class="nav-group-items">
                                        <li class="nav-item">
                                            <a href="/profile" class="nav-link">
                                                Profile
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/account" class="nav-link">
                                                Account
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/billing" class="nav-link">
                                                Billing Info
                                            </a>
                                        </li>
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
                        <li class="nav-item"><a class="nav-link" href="/artists">Artist</a></li>
                        <li class="nav-item"><a class="nav-link active" href="/events">Events</a></li>
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
                                <a class="dropdown-item" href="https://coreui.io/demos/bootstrap/4.2/free/#">
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
                    <div class="col-md-12">
                        <div class="col-md-5"
                            style="float: left;margin-right: 20px;font-family: 'Bebas Neue', cursive;color:white;">
                            <h1>Your Events</h1>
                            <h6 style="margin-top: -10px;font-family: 'Roboto', sans-serif;">
                                {{ date('M d, Y', strtotime(now())) }}</h6>
                        </div>
                    </div>
                </div>
                <br>
                {{-- <a href="#" data-coreui-target="#addEventModal" data-coreui-toggle="modal"
                    id="btnAddEventForModal">
                    <button class="btn btn-primary" style="border:none;background: #5F939A">Add Event</button>
                </a> --}}

                <br>
                <br>
                <div class="row">
                    <div class="col-lg-12">
                        @foreach ($events as $e)
                            <div class="col-lg-5" style="float:left;margin-right: 20px;">
                                <div class="card mb-4" style="background: #e3e2da;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <center>
                                                        <img style="height: 150px; width: 100%"
                                                            src="/images/landingpageimg.jpg" alt=""
                                                            srcset="">
                                                    </center>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <h5>{{ $e['bandName'] }} at {{ $e['location'] }}</h5>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <h6 style="font-size: 15px;"><i class="bi bi-geo-alt-fill"
                                                            style="margin-right: 5px;"></i>{{ $e['location'] }}
                                                    </h6>
                                                </div>
                                                <div class="row">
                                                    <h6 style="font-size: 15px;"><i class="bi bi-calendar3-event-fill"
                                                            style="margin-right: 5px;"></i>{{ $e['eventdate'] }}
                                                    </h6>
                                                </div>
                                                <div class="row">
                                                    <h6 style="font-size: 15px;"><i class="bi bi-person-fill"
                                                            style="margin-right: 5px;"></i>{{ $e['bandName'] }}
                                                    </h6>
                                                </div>
                                                <br>
                                                {{-- <div class="row">
                                                    <h6 style="font-size:15px;">Lorem ipsum dolor sit amet consectetur
                                                        adipisicing elit. Perspiciatis harum voluptate inventore maxime
                                                        facilis! Magnam aut, dolore voluptatibus consequuntur dolor
                                                        quae?
                                                        Impedit, pariatur neque ut molestiae alias est rerum
                                                        repellendus.
                                                    </h6>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        <script src="./Dashboard_files/coreui.bundle.min.js.download"></script>
        <script src="./Dashboard_files/simplebar.min.js.download"></script>

        <script src="./Dashboard_files/coreui-chartjs.js.download"></script>
        <script src="./Dashboard_files/coreui-utils.js.download"></script>
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
        <div class="modal fade" id="logOutModal" data-coreui-backdrop="static" data-coreui-keyboard="false"
            tabindex="-1" role="dialog" aria-labelledby="logOutModalLabel" aria-hidden="true">
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

        <div class="modal fade" id="addArtistForEventModal" tabindex="-1" role="dialog"
            aria-labelledby="addArtistForEventModalLabel" aria-hidden="true" data-coreui-backdrop="static"
            data-coreui-keyboard="false">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <form action="#" method="POST" autocomplete="off" onsubmit="return false;">
                        @csrf
                        <div class="modal-header">
                            <h3 style="font-family: 'Bebas Neue', cursive">
                                Add Artist For Event
                            </h3>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <center>
                                            <div class="col-lg-6">
                                                <label for="searchArtist" class="for">Search Artist:</label>
                                                <input id="searchField" required class="form-control" type="text"
                                                    name="searchArtist">
                                                <input type="hidden" id="artistid" name="cid">
                                            </div>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer" style="border:none;">
                            <div class="col-lg-12">
                                <div class="col-lg-6" style="float: left;">
                                    <button class="btn btn-secondary" data-coreui-dismiss="modal"
                                        onclick="document.getElementById('btnShowEvent').click();">back</button>
                                </div>
                                <div class="col-lg-6"style="float: right;">
                                    <a id="btnAddArtist" class="btn btn-primary"
                                        style="float: right;background: transparent;border:none;float:right;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                            fill="#5F939A" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                        </svg>
                                    </a>
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
                    <form action="/events" method="POST" autocomplete="off" onsubmit="return false;">
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

        <div class="modal fade" id="addEventModal" tabindex="-1" role="dialog"
            aria-labelledby="addEventModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <form action="#" method="POST" autocomplete="off" onsubmit="return false;">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="eventname" class="for"
                                    style="font-family: 'Roboto', sans-serif;"><b>Event Name</b><span
                                        style="color:red;">*</span></label>
                                <br>
                                <input required type="text" name="eventname" id="">
                            </div>
                            <br>
                            <br>
                            <h2 style="font-family: 'Bebas Neue', cursive">BOOKING REQUEST</h2>
                            <hr style="margin-top: -5px; font-weight: 2px; color:#2D2E2E;">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-lg-6" style="float: left;">
                                            <label for="selectdate" class="for">Select Date:</label>
                                            <input required type="text" name="eventdate" id="eventdate"
                                                style="cursor: not-allowed" onkeypress="return false;"
                                                onclick="return false;"
                                                pattern="[0-9][0-9][0-9][0-9]/[0-9][0-9]/[0-9][0-9]">
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

        <div class="modal fade" id="cashModal" tabindex="-1" role="dialog" aria-labelledby="cashModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{ route('events.store') }}" method="POST">
                        @csrf
                        <div class="modal-body" style="background: #EDEDED;border:none;">
                            <div class="row">
                                <div class="form-group" style="margin-left: 30px;">
                                    <img class="img-responsive" src="/images/qr.jpg" alt="" srcset=""
                                        width="250px" height="250px">
                                </div>
                                <br>
                                <div class="form-group" style="margin-left: 30px;">
                                    <label for="accountname" class="for">Reference Number:</label>
                                    <br>
                                    <input required type="text" name="reference" id="reference"
                                        style="background: #EDEDED;width: 85%;">
                                </div>
                                <br>
                                <div class="form-group" style="margin-left: 30px;">
                                    <label for="acountnumber" class="for">Phone Number</label>
                                    <br>
                                    <input required type="number" name="accountnumber" id=""
                                        style="background: #EDEDED;width: 85%;"">
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

        <script>
            let bandNames = {!! json_encode($allnames, JSON_HEX_TAG) !!};
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
                    format: "mm/dd/yyyy",
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

                $('#btnAddEventForModal').on("click", function() {
                    $('#datepicker').datepicker({
                        format: "mm/dd/yyyy",
                        todayHighlight: true,
                        startDate: new Date(),
                        autoclose: "true"
                    });
                    $('#eventdate').val("");

                    let active = document.querySelectorAll('.active');
                    active.forEach(element => {
                        if (element.className === "active day") {
                            element.remove();
                        }
                    });

                });


                $('#btnContinueShowArtist').on("click", function() {
                    let btnShowArtist = document.getElementById('btnShowArtist');
                    btnShowArtist.click();
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
                        url: "/events",
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
                        window.location = "/events";
                    });
                });

                $('#btnAddArtist').on("click", function() {
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

                $(document).on('submit', '#btnContinueShowArtist', function() {
                    // do your things
                    return false;
                });
            });

            function autocomplete(inp, arr, arr2) {
                /*the autocomplete function takes two arguments,
                the text field element and an array of possible autocompleted values:*/
                var currentFocus;
                /*execute a function when someone writes in the text field:*/
                inp.value = '';
                inp.addEventListener("input", function(e) {
                    var a, b, i, val = this.value;
                    /*close any already open lists of autocompleted values*/
                    closeAllLists();
                    if (!val) {
                        return false;
                    }
                    currentFocus = -1;
                    /*create a DIV element that will contain the items (values):*/
                    a = document.createElement("DIV");
                    a.setAttribute("id", this.id + "autocomplete-list");
                    a.setAttribute("class", "autocomplete-items");
                    /*append the DIV element as a child of the autocomplete container:*/
                    this.parentNode.appendChild(a);
                    /*for each item in the array...*/
                    for (i = 0; i < arr.length; i++) {
                        /*check if the item starts with the same letters as the text field value:*/
                        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                            /*create a DIV element for each matching element:*/
                            b = document.createElement("DIV");
                            /*make the matching letters bold:*/
                            b.innerHTML = "<strong style='cursor:pointer;'>" + arr[i].substr(0, val.length) +
                                "</strong>";
                            b.innerHTML += arr[i].substr(val.length);
                            /*insert a input field that will hold the current array item's value:*/
                            b.innerHTML += "<input type='hidden' value='" + arr[i] + "' mid='" + arr2[i] + "'>";
                            /*execute a function when someone clicks on the item value (DIV element):*/
                            b.addEventListener("click", function(e) {
                                /*insert the value for the autocomplete text field:*/
                                inp.value = this.getElementsByTagName("input")[0].value;
                                inp.setAttribute('mid', this.getElementsByTagName("input")[0].getAttribute(
                                    'mid'));
                                let cid = document.getElementById('artistid');
                                cid.value = this.getElementsByTagName("input")[0].getAttribute(
                                    'mid');
                                /*close the list of autocompleted values,
                                (or any other open lists of autocompleted values:*/
                                closeAllLists();
                            });
                            a.appendChild(b);
                        }
                    }
                });
                /*execute a function presses a key on the keyboard:*/
                inp.addEventListener("keydown", function(e) {
                    var x = document.getElementById(this.id + "autocomplete-list");
                    if (x) x = x.getElementsByTagName("div");
                    if (e.keyCode == 40) {
                        /*If the arrow DOWN key is pressed,
                        increase the currentFocus variable:*/
                        currentFocus++;
                        /*and and make the current item more visible:*/
                        addActive(x);
                    } else if (e.keyCode == 38) { //up
                        /*If the arrow UP key is pressed,
                        decrease the currentFocus variable:*/
                        currentFocus--;
                        /*and and make the current item more visible:*/
                        addActive(x);
                    } else if (e.keyCode == 13) {
                        /*If the ENTER key is pressed, prevent the form from being submitted,*/
                        e.preventDefault();
                        if (currentFocus > -1) {
                            /*and simulate a click on the "active" item:*/
                            if (x) x[currentFocus].click();
                        }
                    }
                });

                function addActive(x) {
                    /*a function to classify an item as "active":*/
                    if (!x) return false;
                    /*start by removing the "active" class on all items:*/
                    removeActive(x);
                    if (currentFocus >= x.length) currentFocus = 0;
                    if (currentFocus < 0) currentFocus = (x.length - 1);
                    /*add class "autocomplete-active":*/
                    x[currentFocus].classList.add("autocomplete-active");
                }

                function removeActive(x) {
                    /*a function to remove the "active" class from all autocomplete items:*/
                    for (var i = 0; i < x.length; i++) {
                        x[i].classList.remove("autocomplete-active");
                    }
                }

                function closeAllLists(elmnt) {
                    /*close all autocomplete lists in the document,
                    except the one passed as an argument:*/
                    var x = document.getElementsByClassName("autocomplete-items");
                    for (var i = 0; i < x.length; i++) {
                        if (elmnt != x[i] && elmnt != inp) {
                            x[i].parentNode.removeChild(x[i]);
                        }
                    }
                }
                /*execute a function when someone clicks in the document:*/
                document.addEventListener("click", function(e) {
                    closeAllLists(e.target);
                });
            }

            function chooseService(id) {
                let btnServicePanel = this;
                console.log(document.querySelectorAll('servicePanel'));
                btnServicePanel.setAttribute("style", "background: #5F939A");
                let serviceID = parseInt(id);
                let listofservice = document.getElementById('listofservice');
                if (listofservice.value === "") {

                } else {
                    listofservice.value = listofservice.value + "," + serviceID;
                }

            }

            autocomplete(document.getElementById("searchField"), bandNames, idData);
        </script>
        @if (session()->pull('successAddEvent'))
            <script>
                setTimeout(() => {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Successfully Added Event',
                        showConfirmButton: false,
                        timer: 800
                    });
                }, 500);
            </script>;
            {{ session()->forget('successAddEvent') }}
        @endif
        @if (session()->pull('errorAddEvent'))
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
            {{ session()->forget('errorAddEvent') }}
        @endif
</body>

</html>
