<?php


/**
 * @author Andreas Kummer, w3concepts AG
 * @copyright Copyright &copy; 2010, w3concepts AG
 */
class Aitsu_Core_Init_GetFile implements Aitsu_Event_Listener_Interface {

	public static function notify(Aitsu_Event_Abstract $event) {
		
		if (!isset($_GET['fileurl'])) {
			return;
		}

		// TODO: Check user privileges.

		if (isset ($_GET['inline'])) {
			Aitsu_Core_File :: get($_GET['fileurl'], true);
		} else {
			Aitsu_Core_File :: get($_GET['fileurl'], false);
		}

		exit (0);
	}
}
