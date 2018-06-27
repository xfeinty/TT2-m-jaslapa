<tbody>
<tr>
<td>{{$task->id}}</td>
<td>{{$task->unit}}</td>
<td>{{$task->task}}</td>
<td>{{$task->status}}</td>
<td>{{$task->date}}</td>
@if(Auth::user())<td><a href="tasks/{{$task->id}}">vairāk</a></td></td>@endif
</tr>
@if(Auth::user())
<tr>
<td colspan="6">St. apl. nr.: {{$task->mainOrg}}
<br>Īpašas piezīmes: {{$task->helper}}
</tr>
@endif
</tbody>
