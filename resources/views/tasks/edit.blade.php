@extends('layouts.app')
@section('content')
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">
@if(Auth::user())
@if (Auth::user()->hasrole('Admins'))
<div class="panel-heading"><h1>{{__('nav.edit')}}</h1></div>
<div class="panel-body">
@include('layouts.error')
{!! Form::model($task, ['method' => 'PATCH','route' => ['tasks.update', $task->id]]) !!}
<div class="form-group row">
<div class="col-xs-12">
<label class="sr-only">Darbs</label>
<input type="text" class="form-control" id="task" name="task" value="{{$task->task}}">
</div>
</div>
<div class="form-group row">
<div class="col-xs-2">
<label class="sr-only">Kurss</label>
<select class="form-control" id="unit" name="unit" value="{{$task->unit}}">
<option value="Visos">Visos</option>
<option value="TT2">TT2</option>
<option value="PIP">PIP</option>
<option value="MAI">MAI</option>
</select>
</div>
<div class="col-xs-3">
<label class="sr-only" f>Statuss</label>
<select class="form-control" id="status" name="status" value="{{$task->status}}">
<option value="Gatavs">Izdarīts</option>
<option value="Tiek darīts">Tiek darīts</option>
<option value="Nav zināms">Nav zināms</option>
<option value="Neiesākts">Neiesākts</option>
</select>
</div>
<div class="col-xs-3">
<label class="sr-only">Datums</label>
<input type="date" class="form-control" id="date" name="date" value="{{$task->date}}">
</div>
<div class="col-xs-4">
<label class="sr-only">St. apl. nr.</label>
<input type="text" class="form-control" id="mainOrg" name="mainOrg"
value="{{$task->mainOrg}}">
</div>
</div>
<div class="form-group row">
<div class="col-xs-12">
<label class="sr-only">Īpašas piebildes</label>
<input type="text" class="form-control" id="helper" name="helper"
value="{{$task->helper}}">
</div>
</div>
<div class="row">
<div class="col-xs-3">
<button type="submit" class="btn btn-primary">Labot</button>
</div>
</div>
{!! Form::close() !!}
</div>
@endif
@endif
</div>
</div>

@endsection
