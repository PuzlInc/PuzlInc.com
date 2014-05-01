<div class="grid-container">
	<div class="brand grid-20 pull-left"><a href="/">
			<img src="/assets/img/logo.png" width="171" height="42" alt="logo" />
		</a></div>
	<i class="fa fa-bars fa-2x" id="nav-slider"></i>
	<div class="grid-80">
		<ul class="nav-links pull-right">
			@foreach($nav['primary'] as $navItem)
			<li @if($navItem->isActive()) class="active" @endif><a href="{{ $navItem->getUrl() }}">{{ $navItem->getTitle() }}</a></li>
			@endforeach
		</ul>
	</div>
</div>