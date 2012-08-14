<?php
/**
 * Seotoaster 2.0 plugin bootstrap.
 *
 * @todo Add more comments
 * @author Seotoaster core team <core.team@seotoaster.com>
 */

class Stpbootstrap extends Tools_Plugins_Abstract {

	/**
	 * List of action that should be allowed to specific roles
	 *
	 * By default all of actions of your plugin are available to the guest user
	 * @var array
	 */
	protected $_securedActions = array(
		Tools_Security_Acl::ROLE_SUPERADMIN => array(
            'secured'
        )
	);

	/**
	 * Init method.
	 *
	 * Use this method to init your plugin's data and variables
	 * Use this method to init specific helpers, view, etc...
	 */
	protected function _init() {
		$this->_view->setScriptPath(__DIR__ . '/system/views/');
	}

	/**
	 * Main entry point
	 *
	 * @param array $requestedParams
	 * @return mixed $dispatcherResult
	 */
	public function run($requestedParams = array()) {
		$dispatcherResult = parent::run($requestedParams);
		return ($dispatcherResult) ? $dispatcherResult : '';
	}

	/**
	 * System hook to allow your plugin do some stuff before toaster controller starts
	 *
	 */
	public function beforeController() {

	}

	/**
	 * System hook to allow your plugin do some stuff after toaster controller finish its work
	 *
	 */
	public function afterController() {

	}

	/**
	 * Secured action.
	 *
	 * Will be available to the superadmin only
	 */
	public function securedAction() {

	}
}
