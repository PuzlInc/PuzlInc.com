<?php

class PageController extends BaseController {

	function showHome(){
		parent::setActive('Home');
		return View::make('home', array('title' => 'Home'));
	}

	function showAbout(){
		parent::setActive('About');

		$vars = array(
			'title' => 'About Us',
			'staff' => Config::get('staff')
		);

		return View::make('about', $vars);
	}

}