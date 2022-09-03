@extends('base')

@section('base.content')

<div class="wrapper">
	@include('partial.header')
	@include('partial.sidebar')
	<div class="content-wrapper">
	 @yield('master.content')
	</div>
	@include('partial.footer')
</div>
@stop
