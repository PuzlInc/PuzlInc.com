<?php

class ContactController extends BaseController {

	function showContact(){
		parent::setActive('Contact');
		return View::make('contact', array('title' => 'Contact'));
	}

}