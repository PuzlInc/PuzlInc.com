<?php

use Tools\UI\NavigationItem;

class BaseController extends Controller {

	private static $activeNavTitle = null;

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	public static function getNavigation(){

		$navigation['primary'] = array(
			new NavigationItem("Home", "/"),
			new NavigationItem("About", "/about"),
			new NavigationItem("Support", "#"),
			new NavigationItem("Jobs", "#"),
			new NavigationItem("FAQ", "#"),
			new NavigationItem("Sales", "#")
		);

		foreach($navigation['primary'] as $navItem){
			if(starts_with($navItem->getTitle(), self::$activeNavTitle)){
				$navItem->setActive();
			}
		}

		return $navigation;
	}

	public static function setActive($title) {
		self::$activeNavTitle = $title;
	}

}
