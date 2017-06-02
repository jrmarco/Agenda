@extends('layout.person')
@section('title','List of Person in Agenda')
@section('content')
	<table class="table">
	@if(count($personList)!=0)
		@foreach ($personList as $p)
			<tr><td><p>{{ $p->id }} <a href="{{ route('person.show',['id'=>$p->id]) }}">{{ $p->nickname }}</a> - DoB : {{ $p->birthdate }}</p></td></tr>
		@endforeach
	@else <tr><td>No Data</td></tr>
	@endif
	</table>
	<p><a href="/">Home</a></p>
@endsection