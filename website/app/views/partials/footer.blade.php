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
			<h5>Our Sponsors</h5>
			<p>
				<a href="http://beastnode.com/"><img src="/assets/img/beastnode.png" /></a>
			</p>
		</div>
		<div class="grid-25">
			<h5>Contact Us</h5>
			<p>Email: <a href="mailto:contact@puzlinc.com">contact@puzlinc.com</a></p>
		</div>
		<div class="grid-25">
			<h5>Recent Tweets</h5>
			<p><a href="#">@puzlinc</a> - April 27, 2014</p>
			<p>Our new website design is amazing! Thanks, <a href="http://twitter.com/lDucks">@lDucks</a></p>
			<small class="pull-right"><a href="http://twitter.com">view on twitter</a></small>
		</div>
	</div>
	<div class="grid-100 grid-parent">
		<div class="grid-50">
			<p><small>&copy; 2014 Puzl Inc - Professionally Awesome. All Rights Reserved.</small></p>
		</div>
		<!--
<div class="grid-50">
<ul class="social-media pull-right">
<li><a  title="" target="_blank" href="https://facebook.com/"><i class="fa fa-2x fa-facebook"></i></a></li>
<li><a  target="_blank" href="https://twitter.com/"><i class="fa fa-2x fa-twitter"></i></a></li>
<li><a  target="_blank" href="https://google.com"><i class="fa fa-2x fa-google-plus"></i></a></li>
</ul>
</div>
-->
	</div>
</div>