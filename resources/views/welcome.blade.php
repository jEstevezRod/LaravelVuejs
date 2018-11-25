<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Taskland !</title>

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
                    <img src="{{ asset('images/aa.png') }}" width="60px" height="40px">
                </div>

            </div>

            <!-- Right side -->
            <div class="level-right">

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
                        <p class="is-size-1 is-size-3-mobile title">Taskland</p>
                        <p class="m-5">Your team needs a better way to stay organized</p>
                        @guest
                            <div class="field is-grouped is-grouped-centered m-5">
                                <p class="control">
                                    <a class="button is-medium is-danger is-outlined" href="{{ route('login') }}">
                                        LOGIN
                                    </a>
                                </p>

                                <p class="control">
                                    <a class="button is-medium is-info is-outlined" href="{{ route('register') }}">
                                        REGISTER
                                    </a>
                                </p>
                            </div>
                            @else

                            <button class="button is-medium is-dark is-outlined" href="{{ route('home') }}">
                                Go home !
                            </button>
                        @endguest
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>



