@extends('layouts.app')

@section('content')
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading"><h1>{{ __('nav.welcome')}}</h1></div>
@endsection
@yield ('task_table')
