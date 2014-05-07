@extends('layouts.master')
@section('content')
<div class="header-text">
	<div class="grid-container">
		<div class="grid-100">
			<p>Contact Puzl for questions, support, or to get a quote.</p>
		</div>
	</div>
</div>
<div class="grid-container">
	<div class="grid-50">
		{{ Form::open() }}
		<div class="grid-100">
			<label class="input-label">First Name:</label>
			<input type="text" />
		</div>
		<div class="grid-100">
			<label class="input-label">Last Name:</label>
			<input type="text" />
		</div>
		<div class="grid-100">
			<label class="input-label">Email:</label>
			<input type="text" />
		</div>
		<div class="grid-100">
			<label class="input-label">Enquiry:</label>
			<textarea></textarea>
		</div>
		{{ Form::close() }}
	</div>
</div>
@stop