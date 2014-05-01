<?php

class PageController extends BaseController {

	function showHome(){
		return View::make('home', array('Title' => 'Home'));
	}

	function getAbout(){
		return View::make('about', array('Title' => 'About Us'));
	}

}