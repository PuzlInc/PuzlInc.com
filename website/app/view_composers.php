<?php
View::composer('partials.nav', function ($view){
	$view->with('nav', BaseController::getNavigation());
});