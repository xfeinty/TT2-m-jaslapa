@extends('layouts.app')
@section ('content')
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">
<div class="panel-heading"><h1>{{__('nav.todo')}}</h1></div>
<div class="panel-body">
@if(Auth::user())
@if (Auth::user()->hasrole('Admins'))
@include('layouts.error')
<form method="POST" action="/tasks">
{{csrf_field()}}
<div class="form-group row">
<div class="col-xs-12">
<label class="sr-only">Darbs</label>
<input type="text" class="form-control" id="task" name="task" placeholder="Darbs" required>
</div>
</div>
<div class="form-group row">
<div class="col-xs-2">
<label class="sr-only">Kurss</label>
<select class="form-control" id="unit" name="unit" required>
<option value="Visos">Visos</option>
<option value="TT2">TT2</option>
<option value="PIP">PIP</option>
<option value="MAI">MAI</option>
</select>
</div>
<div class="col-xs-3">
<label class="sr-only" f>Statuss</label>
<select class="form-control" id="status" name="status" required>
<option value="Izdarīts">Izdarīts</option>
<option value="Tiek darīts">Tiek darīts</option>
<option value="Nav zināms">Nav zināms</option>
<option value="Neiesākts">Neiesākts</option>
</select>
</div>
<div class="col-xs-3">
<label class="sr-only">Datums</label>
<input type="date" class="form-control" id="date" name="date" placeholder="Datums" required>
</div>
<div class="col-xs-4">
<label class="sr-only">St. apl. nr.</label>
<input type="text" class="form-control" id="mainOrg" name="mainOrg"
placeholder="St. apl. nr." required>
</div>
</div>
<div class="form-group row">
<div class="col-xs-12">
<label class="sr-only">Īpašas piebildes</label>
<input type="text" class="form-control" id="helper" name="helper"
placeholder="Īpašas piebildes" required>
</div>
</div>
<div class="row">
<div class="col-xs-3">
<button type="submit" class="btn btn-primary">Pievienot šo darbu</button>
</div>
</div>
</form>
@endif
@endif
<br>
<table class="table table-striped table-hover">
<thead>
<tr>
<th>Numurs</th>
<th>Kurss</th>
<th>Darbs</th>
<th>Statuss</th>
<th>Datums</th>
</tr>
</thead>
@foreach($tasks as $task)
@include('tasks.task')
@endforeach
</table>
</div>
</div>
</div>
@endsection
