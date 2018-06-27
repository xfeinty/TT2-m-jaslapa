@extends('layouts.app')

@if (Auth::user()->hasrole('Admins'))
@section ('content')
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">
<p>Tā kā tev ir piešķirtas admina tiesības šajā sistēmā, tu esi atbildīgs par to, ka tu informē studentus par to, ka viņi zin, kādi darbi viņiem jādara. Kādi ir ieteikumi viņu veikšanai un tā tālāk. Tu esi kursa vecākais un tas ir tavs darbs.</p>
</div>
</div>
@else return view('/');
@endif
@endsection
