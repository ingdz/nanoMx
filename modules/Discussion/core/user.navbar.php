<?php
/**
 * mxBoard, pragmaMx Module
 * Copyright by pragmaMx Developer Team - http://www.pragmamx.org
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * $Revision: 6 $
 * $Author: PragmaMx $
 * $Date: 2015-07-08 09:07:06 +0200 (mer. 08 juil. 2015) $
 */

$hook = function($module_name, $userdata, &$items)
{
    /* $userdata enth�lt die kompletten Userdaten des betroffenen Users */
    /* $items erg�nzt die bestehende Liste */

    $items[] = array(/* Attribute */
        'link' => 'modules.php?name=' . $module_name . '&amp;file=member',
        'caption' => _MXBBOARDPROFILE,
        'image' => PMX_MODULES_PATH . $module_name . '/images/folder_user.png',
        'tabname' => 'mxb' . $module_name,
        );
}

?>