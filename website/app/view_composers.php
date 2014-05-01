<?php

View::composer(array('partials.nav', 'partials.footer'), function ($view){
	$view->with('nav', BaseController::getNavigation());
});