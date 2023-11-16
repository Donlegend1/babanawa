@extends('Layouts.app')
@livewireStyles

@section('content')
	<div class="page-container">
		@include('Layouts.sidebar')

		@if (Auth::user()->role_id === 1)
			<livewire:dashboard />
			@include('dashboard.charts.expense')
		@else
			@include('messages.userdashboard')
		@endif

	

	@livewireScripts
@endsection
