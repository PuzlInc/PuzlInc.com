@extends('layouts.master')
@section('content')
<div class="grid-container">
	<div class="grid-100">
		<div class="slider">
			<div class="slider-item active" data-id="1">
				<div class="slider-image">
					<img src="/assets/img/slides/s1.png" width="100%" />
				</div>
				<div class="slider-text">
					<h3>People</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sodales lacus ut tellus volutpat ultricies.</p>
				</div>
			</div>
			<div class="slider-item" data-id="2">
				<div class="slider-image">
					<img src="/assets/img/slides/s2.png" width="100%" />
				</div>
				<div class="photo-by">
					Photo By Lorem Ipsum
				</div>
			</div>
			<div class="slider-item" data-id="3">
				<div class="slider-image">
					<img src="http://p-hold.com/technology/1200/600" width="100%" />
				</div>
				<div class="slider-text">
					<h3>Technology</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sodales lacus ut tellus volutpat ultricies.</p>
				</div>
			</div>
			<div class="slider-arrow left-arrow"><i class="fa fa-chevron-left"></i></div>
			<div class="slider-arrow right-arrow"><i class="fa fa-chevron-right"></i></div>
			<div class="slider-icon-group">
				<div class="slider-icon active" data-id="1"></div>
				<div class="slider-icon" data-id="2"></div>
				<div class="slider-icon" data-id="3"></div>
			</div>
		</div>
	</div>
	<div class="grid-25">
		<div class="info-box">
			<h3>We're Hiring!</h3>
			<p><i class="fa fa-group fa-4x"></i></p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sodales lacus ut tellus volutpat ultricies.</p>
			<div class="more"><a href="/jobs">Click here for more..</a></div>
		</div>
	</div>
	<div class="grid-25">
		<div class="info-box">
			<h3>Free Support</h3>
			<p><i class="fa fa-question fa-4x"></i></p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sodales lacus ut tellus volutpat ultricies.</p>
			<div class="more"><a href="/contact">Click here for more..</a></div>
		</div>
	</div>
	<div class="grid-25">
		<div class="info-box">
			<h3>We'll Teach You!</h3>
			<p><i class="fa fa-book fa-4x"></i></p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sodales lacus ut tellus volutpat ultricies.</p>
			<div class="more"><a href="/jobs">Click here for more..</a></div>
		</div>
	</div>
	<div class="grid-25">
		<div class="info-box">
			<h3>Trusted Developers</h3>
			<p><i class="fa fa-list fa-4x"></i></p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sodales lacus ut tellus volutpat ultricies.</p>
			<div class="more"><a href="/sales">Click here for more..</a></div>
		</div>
	</div>
</div>
@stop