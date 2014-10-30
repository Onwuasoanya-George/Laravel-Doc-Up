<?php

class BaseController extends Controller {

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

	public function account_profile()
	{
		return View::make('Profile');
	}
	public function account_update()
	{
		return View::make('Make Update');
	}

}