<div class="grid-container grid-parent">
	<div class="grid-100">
		<div class="grid-25">
			<h5>Pages</h5>
			<ul>
				@foreach($nav['primary'] as $navItem)
				<li><a href="{{ $navItem->getUrl() }}">{{ $navItem->getTitle() }}</a></li>
				@endforeach
			</ul>
		</div>
		<div class="grid-25">
			<h5>Contact Us</h5>
			<p>Email: <a href="mailto:contact@puzlinc.com">contact@puzlinc.com</a></p>
		</div>
		<div class="grid-25">
			<h5>Recent Tweets</h5>
			<p>{{ Twitter::linkify('@puzl_inc') }} - {datetime}:</p>
			<p>{{ json_encode($tweet) }}</p>
			<small class="pull-right"><a href="http://twitter.com">view on twitter</a></small>
		</div>
		<div class="grid-25">
			<h5>Our Sponsors</h5>
			<p>
				<a href="http://beastnode.com/"><img src="/assets/img/beastnode.png" width="200px" /></a>
			</p>
		</div>
	</div>
	<div class="grid-100 grid-parent">
		<div class="grid-50">
			<p><small>&copy; 2014 Puzl Inc - Professionally Awesome. All Rights Reserved.</small></p>
		</div>
		<div class="grid-50">
			<ul class="social-media pull-right">
				<li><a  title="" target="_blank" href="https://facebook.com/"><i class="fa fa-2x fa-facebook-square"></i></a></li>
				<li><a  target="_blank" href="https://twitter.com/puzl_inc"><i class="fa fa-2x fa-twitter-square"></i></a></li>
				<li><a  target="_blank" href="https://google.com"><i class="fa fa-2x fa-google-plus-square"></i></a></li>
			</ul>
		</div>
	</div>
</div>