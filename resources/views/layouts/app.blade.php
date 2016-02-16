<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Library</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
     <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Library
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    @if (!Auth::guest() && Auth::user()->isAdmin())
                        <li><a href="{{ url('/admin/users') }}">Users</a></li>
                        <li><a href="{{ url('/admin/biblios') }}">Biblios</a></li>
                    @endif

                    @if (!Auth::guest())
                        <li><a href="{{ url('/admin/itemtypes') }}">Itemtypes</a></li>
                        <li><a href="{{ url('/admin/marcfields') }}">Marcfields</a></li>
                        <li><a href="{{ url('/admin/records') }}">Records</a></li>
                    @endif
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        @if (!Auth::guest())
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Create new
                            <span class="caret"></span>
                            </a>
                        @endif

                        <ul class="dropdown-menu" role="menu">
                        @if (Session::has('itemtypes') && !Auth::guest())
                            @foreach(Session::get('itemtypes') as $itemtype)
                                <li><a href="{{ url('/admin/itemtypes/' . $itemtype->id . '/change') }}"><i class="fa fa-btn fa-sign-out"></i>{{ $itemtype->name }}</a></li>
                            @endforeach
                        @endif
                        </ul>
                    </li>

                    <li class="dropdown">
                        @if (!Auth::guest())
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                @if (Session::has('biblio_name'))
                                    {{ Session::get('biblio_name') }}
                                @else
                                    Select Biblio
                                @endif
                                <span class="caret"></span>
                            </a>
                        @endif

                        <ul class="dropdown-menu" role="menu">
                        @if (Session::has('biblios') && !Auth::guest())
                            @foreach(Session::get('biblios') as $biblio)
                                <li><a href="{{ url('/admin/biblios/' . $biblio->id . '/change') }}"><i class="fa fa-btn fa-sign-out"></i>{{ $biblio->name }}</a></li>
                            @endforeach
                        @endif
                        </ul>
                    </li>
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    @include ('admin._confirmBox')      
    @include('admin._scripts')

    @yield ('footer')

</body>
</html>
