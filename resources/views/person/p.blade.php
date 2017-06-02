@extends('layout.person')
@section('title','Person - Details')
@section('content')
	<div>
		<p>{{ $person->firstname }}, {{ $person->lastname }} known as [{{ $person->nickname }} ] </p>
		<p>Date of Birth : {{ $person->birthdate }}</p>
		<p>Personal informations: </p>
		<p>{{ $person->email }} - {{ $person->home }} - {{ $person->mobile }} - {{ $person->work }} </p>
	</div>
	<div>
		Richiesta -> {{ Request::method() }} {{ Request::url() }}
	</div>
	<p><a href='{{ route('person.index') }}'>Back</a></p>
@endsection