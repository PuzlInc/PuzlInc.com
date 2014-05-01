<?php

class PageController extends BaseController {

	function showHome(){
		return View::make('home', array('title' => 'Home'));
	}

	function showAbout(){
		return View::make('about', array('title' => 'About Us'));
	}

}