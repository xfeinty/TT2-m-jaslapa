<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<!-- <meta charset="utf-8"> -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.name', 'Laravel') }}</title>
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
<nav class="navbar navbar-default navbar-static-top">
<div class="container">
<div class="navbar-header">
<!-- Collapsed Hamburger -->
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
data-target="#app-navbar-collapse" aria-expanded="false">
<span class="sr-only">Toggle Navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<!-- Branding Image -->
<a class="navbar-brand" href="{{ url('/') }}">
{{ config('app.name', 'Laravel') }}
</a>
</div>
<div class="collapse navbar-collapse" id="app-navbar-collapse">
<!-- Left Side Of Navbar -->
<ul class="nav navbar-nav">
&nbsp;
</ul>
<!-- Right Side Of Navbar -->
<ul class="nav navbar-nav navbar-right">
<!-- Authentication Links -->
@guest
<li><a href="{{ route('login') }}">{{__('nav.login')}}</a></li>
<li><a href="{{ route('register') }}">{{__('nav.register')}}</a></li>
<li><form action="language" method="post">
<select name="locale">
<option value="lv" {{ App::getLocale() == 'lv' ? ' selected' : '' }}>Latviešu</option>
<option value="en" {{ App::getLocale() == 'en' ? ' selected' : '' }}>English</option>
</select>
{{csrf_field()}}
<input type="submit" value="Mainīt">
</form>
</li>
@else
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
aria-expanded="false" aria-haspopup="true">
{{ Auth::user()->name }} <span class="caret"></span>
</a>
<ul class="dropdown-menu">
<li><a href="/tasks">Uzdevumi</a></li>
<li><a href="/profile">Profils</a></li>
@if(Auth::user()->hasrole('Admins'))
<li><a href="/admins">Admins</a></li>
@endif
<li>
<a href="{{ route('logout') }}"
onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
Iziet
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST"
style="display: none;">
{{ csrf_field() }}
</form>
</li>
</ul>
</li>
@endguest
</ul>
</div>
</div>
</nav>
<div class="container">
<div class="row">
@yield('addTask')
@yield('task_table')
@yield('content')
</div>
</div>

</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
