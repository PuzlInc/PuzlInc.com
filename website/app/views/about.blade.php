@extends('layouts.master')
@section('content')
<div class="header-text">
	<div class="grid-container">
		<div class="grid-100">
			<p>Puzl Inc. only hires top of the line developers and designers for our clients. Our employees are hand picked by our board of administrators to ensure that we're hiring the best of the best.</p>
		</div>
	</div>
</div>
<div class="grid-container">
	@foreach($staff as $dept)
	<div class="grid-100">
		<h2>{{ $dept->name }}</h2>
	</div>
	<div class="grid-100 grid-parent">
		@foreach($dept->members as $member)
		<div class="grid-20">
			<div class="info-box about-object text-center">
				<img src="{{ $member->avatar }}" width="100%" />
				<h4>{{ $member->name }}</h4>
				<p>{{ $member->role }}</p>
				<p class="social-media">
					<a href="https://twitter.com/{{ $member->twitter }}"><i class="fa fa-twitter fa-lg"></i></a>
				</p>
			</div>
		</div>
		@endforeach
	</div>
	@endforeach
</div>
@stop