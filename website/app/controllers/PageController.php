<?php

class PageController extends BaseController {

	function showHome(){
		parent::setActive('Home');
		return View::make('home', array('title' => 'Home'));
	}

	function showAbout(){
		parent::setActive('About');
		return View::make('about', array('title' => 'About Us'));
	}

}