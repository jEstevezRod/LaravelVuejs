<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Joy Nuts !</title>

        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
              integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">

    </head>
    <body>
    <div class="container is-fluid">

        <nav class="level">
            <!-- Left side -->
            <div class="level-left">
                <div class="level-item">
                    <img src="{{ asset('images/favicon.png') }}" width="60px" height="40px">
                </div>

            </div>

            <!-- Right side -->
            <div class="level-right">

                <p class="level-item"><strong id="login"><a id="demo02" href="#lightSpeedIn">LOGIN</a></strong></p>
                <p class="level-item"><strong id="register"><a id="demo03" href="#teste">REGISTER</a></strong></p>
            </div>
        </nav>

        <div id="flow">
            <span class="flow-1"></span>
            <span class="flow-2"></span>
            <span class="flow-3"></span>
        </div>
        <div class="container is-fluid">
            <div class="columns is-vcentered full-height">
                <div class="column has-text-centered is-6">
                    <div class="animated fadeInDown">
                        <p class="is-size-1 is-size-3-mobile title">Joy Nuts</p>
                        <p class="m-5">Your team needs a better way to stay organized</p>
                    </div>
                </div>
                <div class="column is-6">
                    <div class="animated fadeInUp is-size-6 ">
                        <img class="image is-hidden-mobile" src="{{ asset('images/schema4.png') }}" alt="">
                        <div class="columns">
                            <div class="column is-1"><img src="{{ asset('images/arrow-tomato.png')}}"></div>
                            <div class="column is-11"><p>  Organize and manage your team’s plans, projects, and processes with Joy Nuts.
                                    And empower everyone to focus on the work that grows your business.</p></div>

                        </div>
                        <div class="columns">
                            <div class="column is-1"><img src="{{ asset('images/arrow-tomato.png')}}"></div>
                            <div class="column is-11"><p>Keep your priorities straight and your goals in sight. Customize dashboards so you only see what
                                    you want to see.</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <section>

        <div id="lightSpeedIn">

            <div class="columns is-fullheight is-vcentered h-100 ">
                <div class="column">
                    <div class="modal-content">
                        <div class="thum">

                            <div class="box">
                                <div class="field">
                                    <label class="label">Username</label>
                                    <div class="control has-icons-left has-icons-right">
                                        <input class="input is-default" type="text" placeholder="Text input">
                                        <span class="icon is-small is-left">
                                        <i class="fas fa-user"></i>
                                    </span>
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Password</label>
                                    <div class="control has-icons-left has-icons-right">
                                        <input class="input is-default" type="password" placeholder="******">
                                        <span class="icon is-small is-left">
                                    <i class="fas fa-unlock-alt"></i>
                                    </span>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <label class="checkbox">
                                            <input type="checkbox" checked="checked">
                                            Keep me logged
                                        </label>
                                    </div>
                                </div>
                                <div class="field">
                                    <a href="login/github" class="button is-dark "> Login with GitHub <i class="fab fa-github m-4"></i> </a>
                                    <div class="control is-flex-tablet jc-right">
                                        <button class="button is-link"><a href="#" class="has-text-white ">Login</a>
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <div class="close-lightSpeedIn has-text-centered"><span class="icon has-text-danger "><i
                                            class="fas fa-times"></i></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="teste">
            <div class="columns is-fullheight is-vcentered h-100 ">
                <div class="column">
                    <div class="modal-content">
                        <div class="thum">

                            <div class="box">
                                <div class="field">
                                    <label class="label">Username</label>
                                    <div class="control has-icons-left has-icons-right">
                                        <input class="input is-default" type="text" placeholder="Text input">
                                        <span class="icon is-small is-left"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Email</label>
                                    <div class="control has-icons-left has-icons-right">
                                        <input class="input is-default" type="email" placeholder="Email input">
                                        <span class="icon is-small is-left"><i class="fas fa-envelope"></i></span>

                                        <div class="field">
                                            <label class="label">Password</label>
                                            <div class="control has-icons-left has-icons-right">
                                                <input class="input is-default" type="password" placeholder="******">
                                                <span class="icon is-small is-left">
                                    <i class="fas fa-unlock-alt"></i>
                                    </span>

                                            </div>
                                        </div>
                                        <div class="field">
                                            <label class="label">Repeat password</label>
                                            <div class="control has-icons-left has-icons-right">
                                                <input class="input is-default" type="password" placeholder="******">
                                                <span class="icon is-small is-left">
                                    <i class="fas fa-unlock-alt"></i>
                                    </span>

                                            </div>
                                        </div>


                                        <div class="field">
                                            <div class="control">
                                                <label class="checkbox">
                                                    <input type="checkbox">
                                                    I agree to the <a href="#">terms and conditions</a>
                                                </label>
                                            </div>
                                        </div>


                                        <div class="field">
                                            <div class="control is-flex-tablet jc-right">
                                                <button class="button is-link ">Sign up</button>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="close-teste has-text-centered"><span class="icon has-text-danger "><i
                                            class="fas fa-times"></i></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>
