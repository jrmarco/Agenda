@extends('layout.person')
@section('title','Sheet in Agenda')
@section('content')
	<table class="table">
	@if(count($sheetList)!=0)
		@foreach ($sheetList as $s)
			<tr><td><p>{{ $s->id }} <a href="{{ route('sheet.show',['id'=>$s->id]) }}">{{ $s->name }}</a></p></td></tr>
		@endforeach
	@else <tr><td>No Data</td></tr>
	@endif
	</table>
	<p><a href="/">Home</a></p>
@endsection