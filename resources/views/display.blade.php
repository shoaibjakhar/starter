
@extends('layout')

@section('content')

{!! $foo !!}

<ul>
	@foreach($tasks as $task)
	<li>{{ $task }}</li>
	@endforeach
</ul>

@endsection