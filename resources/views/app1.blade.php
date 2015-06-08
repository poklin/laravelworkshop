<!doctype html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My First App</title>

	<link rel="stylesheet" href="{{ URL::asset('css/all.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}"/>

</head>
<body>

    {{--<nav class="collapse navbar-collapse bs-navbar-collapse">--}}
        {{--<ul class="nav navbar-nav">--}}
            {{--<li>--}}
                {{--<a href="../getting-started/">Getting started</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="../css/">CSS</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="../components/">Components</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="../javascript/">JavaScript</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="../customize/">Customize</a>--}}
            {{--</li>--}}
        {{--</ul>--}}
        {{--<ul class="nav navbar-nav navbar-right">--}}
            {{--<li><a href="http://expo.getbootstrap.com" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Expo');">Expo</a></li>--}}
            {{--<li><a href="http://blog.getbootstrap.com" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Blog');">Blog</a></li>--}}
        {{--</ul>--}}
    {{--</nav>--}}

    @include('partials.nav')


	<div class="container">
        @include('flash::message')

		@yield('content')
	</div>

    <script src="{{ URL::asset('js/all.js') }}"></script>

    @yield('footer')
</body>
</html>