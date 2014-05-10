<?php

View::composer(array('partials.nav', 'partials.footer'), function ($view){
	$view->with('nav', BaseController::getNavigation());
});

View::composer(array('partials.footer'), function($view) {
	$tweet = Twitter::getHomeTimeline(array('screen_name' => 'puzl_inc', 'count' => 1, 'format' => 'array'));
	$view->with('tweet', $tweet);
});