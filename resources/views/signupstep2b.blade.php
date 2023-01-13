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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
        }

        .columnBody {
            float: left;
            width: 50%;
            height: 550px;
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

        input[type="url"] {
            background: #FFFFFF;
            border: 0;
            border-bottom: 1.5px solid #5F939A;
            outline: 0;
        }

        input[type="search"] {
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

        /***     Tags input             ***/
        .tags-input {
            background: #FFFFFF;
            border: 0;
            border-bottom: 1.5px solid #5F939A;
            outline: 0;
            height: 40px;
            padding: 0 11px;
            font-size: 14px;
            display: flex;
            align-items: center;
            overflow: hidden;
            color: #888;
        }

        .tags-input span {
            background: #bbb;
            margin-right: 7px;
            color: #fff;
            padding: 4px 7px;
            border-radius: 20px;
        }

        .tags-input span[data-selected] {
            background: #71ccd5;
        }

        .tags-input::after {
            content: '';
            background: #888;
            width: 1px;
            height: 19px;
            margin: -1px 0 0 -1px;
            display: none;
            animation: blink 0.5s infinite alternate;
        }

        .tags-input:focus {
            border-color: #71ccd5;
            outline: none;
        }

        .tags-input:focus[data-cursor]::after {
            display: block;
        }

        @media screen and (max-width: 736px) {
            .tags-input:focus[data-cursor]::after {
                display: none;
            }
        }

        .tags-input:focus+h1 {
            color: #71ccd5;
        }

        .tags-input:focus+h1 span {
            border-color: #71ccd5;
        }

        @keyframes blink {
            0% {
                opacity: 1;
            }

            49% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 0;
            }
        }
    </style>

</head>

<body>
    <header style="background: #464646;padding:15px;">
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
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color:#FFFFFF !important;">Artist</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color:#FFFFFF !important;">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color:#FFFFFF !important;">About</a>
                        </li>
                    </ul>
                    <div class="d-flex" style="background: #464646">
                        <a class="rounded-pill"
                            style="margin-left: 20px;background: #5F939A;font-family: 'Roboto',sans-serif;color: #FFFFFF;text-decoration:none;padding-left:15px;padding-right:15px;padding-top: 5px;padding-bottom: 5px;">Login</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <section style="background: #EDEDED;height:990px;">
        <div class="container" style="padding-top: 100px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="card" style="filter: drop-shadow(-2px 2px 4px #464646); height:auto;">
                        <div class="card-header">
                            <div class="rowHead">
                                <div class="columnHead" style="font-family: 'Bebas Neue', cursive;font-size:23px;">
                                    <br>
                                    <center>
                                        ACCOUNT
                                    </center>

                                </div>
                                <div class="columnHead"
                                    style="left: 20%;font-family: 'Bebas Neue', cursive;font-size:23px;color:#5F939A;">
                                    <br>
                                    <center>
                                        PROFILE
                                    </center>
                                </div>
                                <div class="columnHead"
                                    style="left: 20%;font-family: 'Bebas Neue', cursive;font-size:23px;">
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

                                    </ul>
                                </center>
                            </div>
                            <br>
                        </div>
                        <div class="card-body" style="border-top: 5px solid #FFFFFF;height: auto;">
                            <div class="container">
                                <br>
                                <div class="row">
                                    <h3
                                        style="font-family: 'Roboto Regular',sans-serif; color: #979797;filter: drop-shadow(0.5px 0.5px 0.5px #2D2E2E);">
                                        PROFILE</h3>
                                </div>
                                <br>
                                <form action="/bandprofile?as={{ $as }}&step={{ $step }}"
                                    method="POST" autocomplete="off" enctype="multipart/form-data">
                                    @csrf
                                    <div class="rowHead">
                                        {{-- LEFT --}}
                                        <div class="columnBody">
                                            <div class="form-group">
                                                <center>
                                                    <img class="file-upload-image" src="/storage/images/user.png"
                                                        alt="" srcset="" width="150px" height="150px"
                                                        style="margin-bottom: 25px;">
                                                    <p>Add Picture <a onclick="fileOpen()"
                                                            style="border:none;background: transparent;cursor: pointer;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="24" fill="currentColor"
                                                                class="bi bi-file-plus" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5V6z" />
                                                                <path
                                                                    d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                                                            </svg>
                                                        </a></p>
                                                    <input required type="file" name="files" id="mFile"
                                                        style="visibility: hidden;"
                                                        accept=".jpg, .png, .jpeg, .bitmap" onchange="readURL(this)">
                                                </center>
                                            </div>
                                            <div class="form-group"
                                                style="padding-left: 30px;padding-right: 30px; margin-top: -23px;">
                                                <label for="email" class="for">Band Size</label>
                                                <br>
                                                <input required type="number" name="bandsize" id="bandsize"
                                                    style="width: 100%;margin-top: 10px;">
                                            </div>
                                            <br>
                                            <br>
                                            <div class="form-group"
                                                style="padding-left: 30px;padding-right: 30px;margin-top: -6px;">
                                                <label for="repertoire" class="for">Repertoire</label>
                                                <br>
                                                <select name="reper" id="reper" style="width: 100%;">
                                                    <option value="Cover">Cover</option>
                                                </select>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="form-group" style="padding-left: 30px;padding-right: 30px;">
                                                <label for="address" class="for">Address</label>
                                                <br>
                                                <select name="address" id="address" style="width: 100%;">
                                                    <option value="Valencia City">Valencia City, Bukidnon</option>
                                                    <option value="Malaybalay City">Malaybalay City, Bukidnon</option>
                                                    <option value="Kibawe">Kibawe, Bukidnon</option>
                                                    <option value="Cabanglasan">Cabanglasan, Bukidnon</option>
                                                    <option value="Quezon">Quezon, Bukidnon</option>
                                                    <option value="Maramag">Maramag, Bukidnon</option>
                                                    <option value="Lantapan">Lantapan, Bukidnon</option>
                                                    <option value="San Fernando">San Fernando, Bukidnon</option>
                                                </select>
                                            </div>
                                        </div>
                                        {{-- RIGHT --}}
                                        <div class="columnBody">
                                            <div class="form-group" style="padding-left: 30px;padding-right: 30px;">
                                                <label for="artist" class="for">Artist/Band Name</label>
                                                <br>
                                                <input required type="text" name="artist" id="artist"
                                                    style="width: 100%;">
                                            </div>
                                            <br>
                                            <div class="form-group" style="padding-left: 30px;padding-right: 30px;">
                                                <label for="bio" class="for">Bio</label>
                                                <br>
                                                <input required type="text" name="bio" id="bio"
                                                    style="width: 100%;">
                                            </div>
                                            <br>
                                            <div class="form-group" style="padding-left: 30px;padding-right: 30px;">
                                                <label for="type" class="for">Artist Type</label>
                                                <br>
                                                <select name="type" id="type" style="width: 100%">
                                                    <option value="Band">Band</option>
                                                    <option value="Solo">Solo</option>
                                                </select>
                                            </div>
                                            <br>
                                            <div class="form-group" style="padding-left: 30px;padding-right: 30px;">
                                                <label for="genre" class="for">Genre <span>(Max
                                                        3)</span></label>
                                                <br>
                                                {{-- <input required multiple type="search" name="genre" id="genre"> --}}
                                                <div class="tags-input"></div>
                                                <input required type="hidden" name="genre" id="genre"
                                                    multiple>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="form-group"
                                                style="padding-left: 30px;padding-right: 30px;margin-top: -10px;">
                                                <label for="exp" class="for">Years of Experience</label>
                                                <br>
                                                <select name="exp" id="exp" style="width: 100%;">
                                                    <option value="1-2 years">1-2 years</option>
                                                    <option value="2-3 years">2-3 years</option>
                                                    <option value="3-5 years">3-5 years</option>
                                                    <option value="5 years above">5 years above</option>
                                                </select>
                                            </div>
                                            <br>
                                            <div class="form-group" style="padding-left: 30px;padding-right: 30px;">
                                                <label for="demo" class="for"><b>Video Demo</b></label>
                                                <br>
                                                <label for="link" style="font-size: 12px;">Link To Youtube
                                                    Video</label>
                                                <input required type="url" name="youtube" id="youtube"
                                                    style="width: 100%">
                                            </div>
                                            <button type="submit"
                                                style="float: right;margin-top: 30px;border:none;background:transparent;"
                                                name="btnStep2" value="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                                    fill="#5F939A" class="bi bi-arrow-right-circle-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                                </svg>
                                            </button>
                                            <button type="reset" data-bs-toggle="modal"
                                                data-bs-target="#cancelModal"
                                                style="float: right;margin-top: 30px;border:none;background:transparent;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                                    fill="#5F939A" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                                </svg>
                                            </button>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="js/jquery-2.1.0.min.js"></script>
    <script>
        function fileOpen() {
            let tFile = document.getElementById("mFile");
            tFile.click();
        }

        function readURL(input) {
            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function(e) {
                    // $('.image-upload-wrap').hide();

                    $('.file-upload-image').attr('src', e.target.result);
                    // $('.file-upload-content').show();

                    // $('.image-title').html(input.files[0].name);
                };

                reader.readAsDataURL(input.files[0]);

            } else {
                removeUpload();
            }
        }

        function removeUpload() {
            $('.file-upload-image').attr('src', '/storage/images/user.png');
        }

        var TagsInput = function(element) {
            var self = this;
            var initChar = "\u200B";
            var initCharPattern = new RegExp(initChar, 'g');

            var insert = function(element) {
                if (self.textNode) self.element.insertBefore(element, self.textNode);
                else self.element.appendChild(element);
            };

            var updateCursor = function() {
                self.cursor = self.blank;
            };

            var keydown = function(event) {
                if (event.keyCode == 188) {
                    event.preventDefault();
                    setTimeout(function() {
                        var text = self.text;
                        if (text) {
                            self.text = initChar;
                            self.add(text);
                        }
                    }, 1);
                } else if (event.keyCode == 8) {
                    var input = document.getElementById('genre');
                    if (self.text.replace(initCharPattern, '') == '') {
                        self.text = initChar + initChar;
                        if (self.selected) {
                            self.element.removeChild(self.selected);
                            let mVal = input.value;
                            let sliceVal = mVal.split(",");
                            if (sliceVal.length == 1) {
                                input.value = "";
                            } else {
                                input.value = sliceVal.shift();
                            }

                        } else {
                            var tags = self.tags;
                            var keys = Object.keys(tags)
                            if (keys.length > 0) {
                                var tag = tags[keys[keys.length - 1]];
                                tag.setAttribute('data-selected', '');

                            }


                        }
                    }
                }

                if (event.keyCode !== 8) {
                    if (self.selected) self.selected.removeAttribute('data-selected');
                }
                setTimeout(function() {
                    updateCursor();
                }, 1);
            };

            var focus = function() {
                updateCursor();
            };

            Object.defineProperties(this, {
                element: {
                    get: function() {
                        return element;
                    },
                    set: function(v) {
                        if (typeof v == 'string') v = document.querySelector(v);
                        element = v instanceof Node ? v : document.createElement('div');
                        if (!element.className.match(/\btags-input\b/)) element.className += ' tags-input';
                        if (element.getAttribute('contenteditable') != 'true') element.setAttribute(
                            'contenteditable', 'true');

                        element.removeEventListener('keydown', keydown);
                        element.addEventListener('keydown', keydown);

                        element.removeEventListener('focus', focus);
                        element.addEventListener('focus', focus);
                        this.text = initChar;
                    }
                },
                tags: {
                    get: function() {
                        var element;
                        var elements = this.element.querySelectorAll('span');
                        var tags = {};
                        for (var i = 0; i < elements.length; i++) {
                            element = elements[i]
                            tags[element.innerText] = element;
                        }

                        return tags;
                    }
                },
                lastChild: {
                    get: function() {
                        return this.element.lastChild;
                    }
                },
                textNode: {
                    get: function() {
                        return this.element.lastChild instanceof Text ? this.element.lastChild : null;
                    }
                },
                text: {
                    get: function() {
                        return this.textNode ? this.textNode.data : null;
                    },
                    set: function(v) {
                        if (!this.textNode) this.element.appendChild(document.createTextNode(','));
                        this.textNode.data = v;
                    },
                },
                cursor: {
                    get: function() {
                        return this.element.getAttribute('data-cursor') !== null;
                    },
                    set: function(v) {
                        if (v) this.element.setAttribute('data-cursor', '');
                        else this.element.removeAttribute('data-cursor');
                    }
                },
                focused: {
                    get: function() {
                        return document.activeElement == this.element;
                    }
                },
                blank: {
                    get: function() {
                        return this.text.replace(initCharPattern, '') == '';
                    }
                },
                selected: {
                    get: function() {
                        return this.element.querySelector('span[data-selected]');
                    }
                }
            });

            this.add = function(tag) {
                tag = tag.replace(initCharPattern, '');
                tag = tag.replace(/^\s+/, '').replace(/\s+$/, '');
                tag = tag[0].toUpperCase() + tag.toLowerCase().slice(1);
                if (tag != '' && this.tags[tag] === undefined) {

                    var input = document.getElementById('genre');
                    let mVal = input.value;
                    let sliceVal = mVal.split(",");
                    if (sliceVal.length <= 2) {
                        var element = document.createElement('span');
                        element.appendChild(document.createTextNode(tag));
                        element.setAttribute('contenteditable', 'false');
                        let mVal = input.value;
                        if (mVal) {
                            input.value = mVal + "," + tag;
                        } else {
                            input.value = tag;
                        }


                        insert(element);
                    }

                }
            };

            this.remove = function(tag) {
                var element = this.tags[tag];
                if (element) this.element.removeChild(element);
            };

            this.element = element;
        };

        var input = new TagsInput('.tags-input');
    </script>
    @if (session()->pull('errorExistArtist'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Failed to Create Profile, Artist Exist Already, Please Try Again!',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>;
        {{ session()->forget('errorExistArtist') }}
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
</body>

</html>
