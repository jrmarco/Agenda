@extends('layout.person')
@section('title','Sheet - Details')
@section('content')
	<div>
		<p>{{ $sheet->name }} -- key: {{ $sheet->attr }} , val: {{ $sheet->value }}</p>
		
	</div>
	<div>
		Richiesta -> {{ Request::method() }} {{ Request::url() }}
	</div>
	<p><a href='{{ route('sheet.index') }}'>Back</a></p>
@endsection