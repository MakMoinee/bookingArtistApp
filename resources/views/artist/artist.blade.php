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
    <style>
        .sidebar {
            --cui-sidebar-bg: #2D2E2E !important;
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
                        <li class="nav-item"><a class="nav-link active" href="/artists">Artist</a></li>
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
                                                        <img style="height: 100px; width: 100px;"
                                                            src="/images/person.svg" alt="" srcset="">
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
                                                                <h6><i class="bi bi-star-fill"
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
                                                                </h6>
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
                                                                    style="background: transparent; color:black;border: 1px solid black;">View
                                                                    Services</button>
                                                            </div>
                                                            <div class="col-lg-6" style="float:left;">
                                                                <button class="btn btn-primary rounded-pill"
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

                    </div>
                </div>
            </div>
        </div>

        <script src="./Dashboard_files/coreui.bundle.min.js.download"></script>
        <script src="./Dashboard_files/simplebar.min.js.download"></script>

        <script src="./Dashboard_files/chart.min.js.download"></script>
        <script src="./Dashboard_files/coreui-chartjs.js.download"></script>
        <script src="./Dashboard_files/coreui-utils.js.download"></script>
        <script src="./Dashboard_files/main.js.download"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

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
</body>

</html>
