<?php


/**
 * @author Frank Ammari, Ammari & Ammari GbR
 * @copyright Copyright &copy; 2011, Ammari & Ammari GbR
 */

include_once (APPLICATION_PATH . '/modules/Schema/Org/AutomotiveBusiness/Class.php');

class Module_Schema_Org_MotorcycleRepair_Class extends Module_Schema_Org_AutomotiveBusiness_Class {

	protected function _init() {
	}

	protected function _main() {

		$view = $this->_getView();

		return $view->render('index.phtml');
	}

	protected function _getView() {

		$view = parent :: _getView();

		$view->index = $this->_index;

		return $view;
	}
}