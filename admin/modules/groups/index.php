<?php
/**
 * This file is part of
 * pragmaMx - Web Content Management System.
 * Copyright by pragmaMx Developer Team - http://www.pragmamx.org
 *
 * pragmaMx is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * $Revision: 6 $
 * $Author: PragmaMx $
 * $Date: 2015-07-08 09:07:06 +0200 (Mi, 08. Jul 2015) $
 *

 *
 * some parts based on NukeGroups v2.0.0
 * created by joe (aka downsize)
 * joe@joe.nukezone.com
 */

defined('mxMainFileLoaded') or die('access denied');

/* Sprachdatei auswählen */
mxGetLangfile(__DIR__);

if (!mxGetAdminPref("radmingroups")) {
    return mxErrorScreen("Access Denied");
}

function displayGroups()
{
    global $prefix;

    $userconfig = load_class('Userconfig');
    // Gruppentabelle checken
    $result = sql_query("SELECT access_id FROM ${prefix}_groups_access WHERE access_id=1;");
    list($xaccess_id) = sql_fetch_row($result);
    if (empty($xaccess_id)) {
        sql_query("REPLACE INTO ${prefix}_groups_access VALUES (1, '" . MX_FIRSTGROUPNAME . "')");
    }
    $useroptions = getUsersSelectOptions();
    $groupoptions = getAllAccessLevelSelectOptions($userconfig->default_group);

    include('header.php');
    GraphicAdmin();
    title(_GROUPSADMIN);
    // OpenTable();
    // echo "<center><font class=\"title\"><b>"._GROUPSADMIN."</b></font></center>";
    // CloseTable();
    // possible option to allow admin not to have Move Users displayed
    // echo '<br />';
    OpenTable();
    echo "<fieldset><legend>" . _MOVEUSERS_TOGROUP . "</legend>" . _SMALL_MOVEUSERS_TOGROUP . '<br /><br />'
     . "<form method=\"post\" action=\"" . adminUrl(PMX_MODULE) . "\" name=\"move_users_togroup\">"
     . "<table style=\"margin:auto\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\"><tr><td><select multiple=\"multiple\" name=\"get_users[]\" size=\"7\" >" . $useroptions . "</select>"
     . "</td><td align=\"center\">&nbsp;<b>" . _MOVETOROUPNAME . " </b>&nbsp;\n"
     . "<select name=\"moveto_group\">" . $groupoptions . "</select><input type=\"hidden\" name=\"op\" value=\"" . PMX_MODULE . "/GroupMove\" />"
     . "&nbsp;<input type=\"submit\" value=\" " . _OK . " \" /></td></tr></table></form></fieldset>";
    CloseTable();
    echo '<br />';
    // end if admin does not want to have Move Users displayed
    // edit group
    OpenTable();
    echo "<fieldset><legend>" . _EDITGROUP . "</legend>"
     . "<form method=\"post\" action=\"" . adminUrl(PMX_MODULE) . "\" name=\"edit_group_form\">"
     . "<b>" . _NEWGROUPNAME . " </b>"
     . "<select name=\"chng_id\">" . $groupoptions . "</select>"
     . "<select name=\"op\">"
     . "<option value=\"" . PMX_MODULE . "/modifyGroup\">" . _MODIFY . "</option>\n"
     . "<option value=\"" . PMX_MODULE . "/delUserLevel\">" . _DELETE . "</option></select>\n"
     . "<input type=\"submit\" value=\"" . _OK . "\" /></form></fieldset>";
    CloseTable();
    echo '<br />';
    // add new group
    OpenTable();
    echo "<fieldset><legend>" . _ADDGROUP . "</legend>"
     . "<form action=\"" . adminUrl(PMX_MODULE) . "\" method=\"post\">"
     . "<table border='0' cellspacing='1' cellpadding='2' align='center' class='bgcolor2'>"
     . "<tr class='bgcolor1'><td width=\"100\" colspan=\"2\">" . _NEWGROUPNAME . "</td>"
     . "<td colspan=\"6\"><input type=\"text\" name=\"add_groupname\" size=\"25\" maxlength=\"20\" /> <font class=\"tiny\">" . _REQUIRED . "</font></td></tr>"
     . "<tr><td colspan=\"8\"><b>" . _MODULENAME . "</b></td></tr>";
    $result = sql_query("select mid, title, view, active from " . $prefix . "_modules order by title ASC");
    $y = 0;
    while (list($mid, $mtitle, $mview, $mactive) = sql_fetch_row($result)) {
        // print $y;
        $y++;
        if ($y == 1) echo "<tr class='bgcolor1'>";
        $mod_show = str_replace("_", " ", $mtitle);
        if ($mod_show != "") {
            $strike1 = ($mactive) ? "" : "<i>";
            $strike2 = ($mactive) ? "" : "</i>";
            if ($mview == 1) {
                echo "<th><input type=\"checkbox\" name=\"can_view_modules[]\" value=\"" . $mid . "\" /></th><td>$strike1" . $mod_show . "$strike2</td>";
            } else if ($mview == 2 || $mview == 3) {
                echo "<th>-</th><td>$strike1" . $mod_show . "$strike2</td>";
            } else {
                echo "<th>x</th><td>$strike1" . $mod_show . "$strike2</td>";
            }
        } else {
            echo "<td>&nbsp;</td>";
        }
        if ($y == 4) {
            $y = 0;
            echo "</tr>";
        }
    }
    if ($y > 0) {
        $colspan = (4 - $y) * 2;
        echo "<td colspan=\"$colspan\">&nbsp;</td></tr>";
    }
    // blocks
    echo "<tr><td colspan=\"8\"><b>" . _BLOCKNAME . "</b></td></tr>";
    $result = sql_query("select bid, title, view, active, blockfile from " . $prefix . "_blocks order by title ASC");
    $y = 0;
    while (list($bid, $btitle, $bview, $bactive, $blockfile) = sql_fetch_row($result)) {
        $y++;
        if ($y == 1) echo "<tr class='bgcolor1'>";
        $block_show = (empty($btitle)) ? str_replace(array(".php", "block-"), array("", ""), $blockfile) : $btitle;
        $block_show = (empty($block_show)) ? "untitled ($bid)" : str_replace("_", " ", $block_show);
        if ($block_show != "") {
            $strike1 = ($bactive) ? "" : "<i>";
            $strike2 = ($bactive) ? "" : "</i>";
            if ($bview == 1) {
                echo "<th><input type=\"checkbox\" name=\"can_view_blocks[]\" value=\"" . $bid . "\" /></th><td>$strike1" . $block_show . "$strike2</td>";
            } else if ($bview == 2 || $bview == 3) {
                echo "<th>-</th><td>$strike1" . $block_show . "$strike2</td>";
            } else {
                echo "<th>x</th><td>$strike1" . $block_show . "$strike2</td>";
            }
        } else {
            echo "<td>&nbsp;</td>";
        }
        if ($y == 4) {
            $y = 0;
            echo "</tr>";
        }
    }
    if ($y > 0) {
        $colspan = (4 - $y) * 2;
        echo "<td colspan=\"$colspan\">&nbsp;</td></tr>";
    }
    echo "<tr><td colspan=\"8\"><input type=\"hidden\" name=\"op\" value=\"" . PMX_MODULE . "/addGroup\" />"
     . "<input type=\"submit\" value=\"" . _ADDGROUPBUT . "\" /></td></tr></table></form>";
    groupListLegend();
    echo "</fieldset>";

    CloseTable();
    include("footer.php");
}

function editGroup($pvs)
{
    global $user_prefix, $prefix;
    extract($pvs);
    $result = sql_query("select access_id, access_title from " . $prefix . "_groups_access where access_id = '$chng_id'");
    list($access_id, $access_title) = sql_fetch_row($result);
    if (empty($access_id) || empty($access_title)) {
        mxErrorScreen(_GROUPNOEXIST);
        return;
    }
    $namefield = ($access_id == 1) ? "<b>$access_title</b><input type=\"hidden\" name=\"chng_title\" value=\"$access_title\" />" : "<input type=\"text\" name=\"chng_title\" value=\"$access_title\" size=\"25\" maxlength=\"20\" />";
    include("header.php");
    GraphicAdmin();
    title(_GROUPSADMIN);
    OpenTable();
    echo "<fieldset><legend>" . _GROUPUPDATE . ": <em>$access_title</em></legend>"
     . "<form action=\"" . adminUrl(PMX_MODULE) . "\" method=\"post\" name=\"modify_group_form\">"
     . "<table style=\"margin:auto\" border='0' cellspacing='1' cellpadding='2' class='bgcolor2'>"
     . "<tr class='bgcolor1'><td colspan='2'>" . _GROUPID . ":</td><td colspan=\"6\"><b>$access_id</b></td></tr>"
     . "<tr class='bgcolor1'><td colspan='2'>" . _GROUPTITLE . ":</td><td colspan=\"6\">$namefield</td></tr>";
    // erlaubte Module
    $qry = "SELECT m.mid, m.title, m.view, m.active
           FROM " . $prefix . "_modules AS m LEFT JOIN " . $prefix . "_groups_modules AS g ON m.mid = g.module_id
           WHERE (((m.view)=1) AND ((g.group_id)=" . $access_id . ")) OR (((m.view)=0))
           ORDER BY m.title";
    // WHERE (((m.title)<>'Your_Account') AND ((m.view)=1) AND ((g.group_id)=".$access_id.")) OR (((m.title)<>'Your_Account') AND ((m.view)<>1) AND ((g.group_id) Is Null))
    // print $qry;
    $result = sql_query($qry);
    if ($result) {
        $splitter = 0;
        echo "<tr><td colspan=\"8\"><b>" . _MODULENAME . "</b></td></tr><tr></tr>"
         . "<tr class='bgcolor1'>";
        // loop through each mod compare groups string with access_id
        while (list($mid, $mtitle, $mview, $mactive) = sql_fetch_row($result)) {
            $splitter++;
            $xmid[] = $mid;
            $mod_show = str_replace("_", " ", $mtitle);
            $strike1 = ($mactive) ? "" : "<i>";
            $strike2 = ($mactive) ? "" : "</i>";
            if ($mview != 0) {
                echo "<th><input type=\"checkbox\" name=\"group_module_cur[]\" value=\"" . $mid . "\" checked=\"checked\" /></th><td>$strike1" . $mod_show . "$strike2</td>";
            } else {
                echo "<th>x</th><td>$strike1" . $mod_show . "$strike2</td>";
            }
            if ($splitter >= 4) {
                echo "</tr><tr class='bgcolor1'>";
                $splitter = 0;
            }
        }
        if ($splitter > 0) {
            $colspan = (4 - $splitter) * 2;
            echo "<td colspan=\"$colspan\">&nbsp;</td></tr>";
        }
    }
    // versteckte Module
    $exclude = (isset($xmid)) ? "WHERE mid Not IN(" . implode(",", $xmid) . ")" : "";
    $qry = "SELECT mid, title, view, active FROM " . $prefix . "_modules $exclude order by title ASC";
    $result = sql_query($qry);
    if ($result) {
        $splitter = 0;
        echo "<tr><td colspan=\"8\"><b>" . _NOMODULEVIEW . "</b></td></tr><tr></tr>"
         . "<tr class='bgcolor1'>";
        // loop through each mod compare groups string with access_id
        while (list($mid, $mtitle, $mview, $mactive) = sql_fetch_row($result)) {
            $splitter++;
            $mod_show = str_replace("_", " ", $mtitle);
            $strike1 = ($mactive) ? "" : "<i>";
            $strike2 = ($mactive) ? "" : "</i>";
            if ($mview == 1) {
                echo "<th><input type=\"checkbox\" name=\"group_module_add[]\" value=\"" . $mid . "\" /></th><td>$strike1" . $mod_show . "$strike2</td>";
            } else if ($mview == 2 || $mview == 3) {
                echo "<th>-</th><td>$strike1" . $mod_show . "$strike2</td>";
            } else {
                echo "<th>x</th><td>$strike1" . $mod_show . "$strike2</td>";
            }
            if ($splitter >= 4) {
                echo "</tr><tr class='bgcolor1'>";
                $splitter = 0;
            }
        }
        if ($splitter > 0) {
            $colspan = (4 - $splitter) * 2;
            echo "<td colspan=\"$colspan\">&nbsp;</td></tr>";
        }
    }
    // erlaubte Bloecke
    $qry = "SELECT b.bid, b.title, b.view, b.active, b.blockfile
           FROM " . $prefix . "_blocks AS b LEFT JOIN " . $prefix . "_groups_blocks AS g ON b.bid = g.block_id
           WHERE (((g.group_id)=" . $access_id . ") AND ((b.view)=1)) OR (((b.view)=0) AND ((g.block_id) Is Null))
           ORDER BY b.title ASC";
    $result = sql_query($qry);
    if ($result) {
        $splitter = 0;
        echo "<tr><td colspan=\"8\"><b>" . _BLOCKNAME . "</b></td></tr><tr></tr>"
         . "<tr class='bgcolor1'>";
        // loop through each mod compare groups string with access_id
        while (list($bid, $btitle, $bview, $bactive, $blockfile) = sql_fetch_row($result)) {
            $splitter++;
            $xbid[] = $bid;
            $block_show = (empty($btitle)) ? str_replace(array(".php", "block-"), array("", ""), $blockfile) : $btitle;
            $block_show = (empty($block_show)) ? "untitled ($bid)" : str_replace("_", " ", $block_show);
            $strike1 = ($bactive) ? "" : "<i>";
            $strike2 = ($bactive) ? "" : "</i>";
            if ($bview != 0) {
                echo "<th><input type=\"checkbox\" name=\"group_block_cur[]\" value=\"" . $bid . "\" checked\"checked\" /></th><td>$strike1" . $block_show . "$strike2</td>";
            } else {
                echo "<th>x</th><td>$strike1" . $block_show . "$strike2</td>";
            }
            if ($splitter >= 4) {
                echo "</tr><tr class='bgcolor1'>";
                $splitter = 0;
            }
        }
        if ($splitter > 0) {
            $colspan = (4 - $splitter) * 2;
            echo "<td colspan=\"$colspan\">&nbsp;</td></tr>";
        }
    }
    // versteckte Bloecke
    $exclude = (isset($xbid)) ? "where bid Not IN(" . implode(",", $xbid) . ")" : "";
    $qry = "SELECT bid, title, view, active, blockfile FROM " . $prefix . "_blocks $exclude order by title ASC";
    $result = sql_query($qry);
    if ($result) {
        $splitter = 0;
        echo "<tr><td colspan=\"8\"><b>" . _NOBLOCKVIEW . "</b></td></tr><tr></tr>"
         . "<tr class='bgcolor1'>";
        // loop through each mod compare groups string with access_id
        while (list($bid, $btitle, $bview, $bactive, $blockfile) = sql_fetch_row($result)) {
            $splitter++;
            $block_show = (empty($btitle)) ? str_replace(array(".php", "block-"), array("", ""), $blockfile) : $btitle;
            $block_show = (empty($block_show)) ? "untitled ($bid)" : str_replace("_", " ", $block_show);
            $strike1 = ($bactive) ? "" : "<i>";
            $strike2 = ($bactive) ? "" : "</i>";
            if ($bview == 1) {
                echo "<th><input type=\"checkbox\" name=\"group_block_add[]\" value=\"" . $bid . "\" /></th><td>$strike1" . $block_show . "$strike2</td>";
            } else if ($bview == 2 || $bview == 3) {
                echo "<th>-</th><td>$strike1" . $block_show . "$strike2</td>";
            } else {
                echo "<th>x</th><td>$strike1" . $block_show . "$strike2</td>";
            }
            if ($splitter >= 4) {
                echo "</tr><tr class='bgcolor1'>";
                $splitter = 0;
            }
        }
        if ($splitter > 0) {
            $colspan = (4 - $splitter) * 2;
            echo "<td colspan=\"$colspan\">&nbsp;</td></tr>";
        }
    }
    echo "<tr><td colspan=\"8\"><input type=\"hidden\" name=\"access_title\" value=\"$access_title\" />"
     . "<input type=\"hidden\" name=\"access_id\" value=\"$access_id\" />"
     . "<input type=\"hidden\" name=\"op\" value=\"" . PMX_MODULE . "/updateGroup\" />"
     . "<input type=\"submit\" value=\"" . _SAVECHANGES . "\" /></td></tr></table></form>";
    $useroptions = getAllUsersSelectOptions2($access_id);
    $userscount = substr_count($useroptions, "<option value=");
    echo "<table class=\"form\"><tr valign=\"top\"><td width=\"20%\">"
     . "<b>" . $userscount . "</b>&nbsp;" . _GROUPUSERSIN;
    if ($userscount) {
        echo "<br /><select name=\"xx\" size=\"10\">" . $useroptions . "</select>";
    }
    echo "</td><td width=\"1%\">&nbsp;&nbsp;</td><td width=\"79%\">";
    groupListLegend();
    echo "</td></tr></table>"
     . "</fieldset>";
    CloseTable();
    include("footer.php");
}

/* updates the Group selected to be modified */
function updategroup($pvs)
{
    global $user_prefix, $prefix;
    extract($pvs);
    // compare edited title to current access_title
    if ($chng_title != $access_title && !empty($chng_title)) {
        $qry = "update " . $prefix . "_groups_access set access_title='$chng_title' where access_id='$access_id'";
        sql_query($qry);
        // neuer Titel überschreibt alten Titel
        $access_title = $chng_title;

        /* HOOK: Modulspezifische Gruppenänderungen durchfuehren */
        $hook = load_class('Hook', 'groups.edit');
        $hook->gid = $access_id;
        $hook->set('only_allowed', false);

        $hook->run();
    }
    $group_module_cur = (isset($group_module_cur)) ? $group_module_cur : array();
    $group_module_add = (isset($group_module_add)) ? $group_module_add : array();
    if (count($group_module_add)) {
        foreach($group_module_add as $index => $mid) {
            $qry = "REPLACE into ${prefix}_groups_modules (group_id, module_id) values ($access_id, $mid)";
            sql_query($qry);
        }
    }
    $excludearray = array_merge($group_module_cur, $group_module_add);
    $exclude = (count($excludearray)) ? "(module_id not in(" . implode(",", $excludearray) . ")) AND " : "";
    $qry = "delete from ${prefix}_groups_modules where $exclude (group_id=$access_id)";
    sql_query($qry);
    $group_block_cur = (isset($group_block_cur)) ? $group_block_cur : array();
    $group_block_add = (isset($group_block_add)) ? $group_block_add : array();
    if (count($group_block_add)) {
        foreach($group_block_add as $index => $bid) {
            $qry = "REPLACE into ${prefix}_groups_blocks (group_id, block_id) values ($access_id, $bid)";
            sql_query($qry);
        }
    }
    $excludearray = array_merge($group_block_cur, $group_block_add);
    $exclude = (count($excludearray)) ? "(block_id not in(" . implode(",", $excludearray) . ")) AND " : "";
    $qry = "delete from ${prefix}_groups_blocks where $exclude (group_id=$access_id)";
    sql_query($qry);
    $msg = _EDITSUCCESS . " (<b>" . $access_title . "</b>)";
    $msg .= groupsRefreshLink(3000);
    mxMessageScreen($msg, _GROUPSADMIN, 1);
}

function moveToGroup($pvs)
{
    global $user_prefix, $prefix;

    $get_users = (empty($pvs['get_users'])) ? array() : $pvs['get_users'];
    $moveto_group = (empty($pvs['moveto_group'])) ? 0 : intval($pvs['moveto_group']);

    $num = count($get_users);
    if ($num) {
        foreach($get_users as $index => $uid) {
            sql_query("update {$user_prefix}_users set user_ingroup='" . $moveto_group . "' where uid=" . $uid . "");
        }
    }
    /* HOOK: Modulspezifische Gruppenänderungen durchfuehren */
    $gid = $moveto_group;
    $hook = load_class('Hook', 'groups.moveto');
    $hook->gid = $gid;
    $hook->set('only_allowed', false);

    $hook->run();

    $moveto_group = mxGetGroupTitle($moveto_group);
    $msg = _MOVESUCCESS . ", <b>" . $num . "</b>&nbsp;" . _MOVESUCCESS2 . ": '<b>" . $moveto_group . "</b>'";
    $msg .= groupsRefreshLink(3000);
    mxMessageScreen($msg, _GROUPSADMIN, 0);
}

function addGroup($pvs)
{
    global $user_prefix, $prefix;
    extract($pvs);
    // make sure not empty
    if (empty($add_groupname)) {
        mxErrorScreen(_ERRNOGROUPNAME, _INSGROUPERROR);
        return;
    }
    // make sure not duplicate group name
    if (checkDuplicateACL($add_groupname)) {
        mxErrorScreen(_GROUPEXISTS, _INSGROUPERROR);
        return;
    }
    $total_count = getAccessLevelCount();
    $result = sql_query("insert into " . $prefix . "_groups_access (access_id, access_title) values ('$total_count', '$add_groupname')");
    if (!$result) {
        mxErrorScreen(_INSERROR2, _INSGROUPERROR);
        return;
    }
    // loop through any modules that are to have this group
    $num_mods = (!isset($can_view_modules)) ? 0 : count($can_view_modules);
    if ($num_mods > 0) {
        foreach($can_view_modules as $index => $value) {
            if (!empty($value)) {
                // print "mod: $value<br />";
                $res_update = sql_query("insert into " . $prefix . "_groups_modules (group_id, module_id) values ($total_count, " . $value . ")");
            }
        }
    }
    // loop through any blocks that are to have this group
    $num_blocks = (!isset($can_view_blocks)) ? 0 : count($can_view_blocks);
    if ($num_blocks > 0) {
        foreach($can_view_blocks as $index => $value) {
            if (!empty($value)) {
                $res_update = sql_query("INSERT INTO " . $prefix . "_groups_blocks (group_id, block_id) values ($total_count, " . $value . ")");
            }
        }
    }

    /* HOOK: Modulspezifische Gruppenänderungen durchfuehren */
    $gid = (int)sql_insert_id();
    $hook = load_class('Hook', 'groups.add');
    $hook->gid = $gid;
    $hook->set('only_allowed', false);

    $hook->run();

    $msg = _ADDSUCCESS . " (<b>" . $add_groupname . "</b>)";
    $msg .= groupsRefreshLink(2000);
    mxMessageScreen($msg, _GROUPSADMIN, 0);
    return;
}

function delUserLevel($pvs)
{
    global $user_prefix, $prefix;
    extract($pvs);
    // do not allow editing of the standard User, Moderator, Sup Mod or Admin
    $result = sql_query("SELECT access_id, access_title from " . $prefix . "_groups_access WHERE access_id = '$chng_id'");
    list($access_id, $access_title) = sql_fetch_row($result);
    // if($chng_id == 1 || $access_title == MX_FIRSTGROUPNAME){
    if ($chng_id == 1) {
        $msg = _EDITSTANDARDLEVELS;
        $msg .= groupsRefreshLink(10000);
        mxMessageScreen($msg, _GROUPSADMIN, 1);
        return;
    }
    $chng_title = urlencode($access_title);
    $msg = _SURE2DELETEGROUP . " '<b>$access_title</b>'? <br /><br />" . _ASK2DELETEGROUP . '<br /><br />';
    $msg .= "[&nbsp;<a href=\"" . adminUrl(PMX_MODULE, 'delUserLevelConf', "access_id=$access_id&amp;access_title=$chng_title") . "\">" . _YES . "</a> | <a href=\"" . adminUrl(PMX_MODULE) . "\">" . _NO . "</a>&nbsp;]";
    mxMessageScreen($msg, _GROUPSADMIN, 0);
    return;
}

function delUserLevelConf($gvs)
{
    global $user_prefix, $prefix;

    $userconfig = load_class('Userconfig');

    extract($gvs);
    $access_title = urldecode($access_title);
    // confirm group delete
    if (empty($access_id)) {
        mxErrorScreen(_DELERROR2, _DELGROUPERROR);
        return;
    }
    // if($access_id == 1 || $access_title == MX_FIRSTGROUPNAME){
    if ($access_id == 1 || $access_id == $userconfig->default_group) {
        $msg = _EDITSTANDARDLEVELS;
        $msg .= groupsRefreshLink(10000);
        mxMessageScreen($msg, _GROUPSADMIN, 1);
        return;
    }
    $qry1 = "DELETE FROM " . $prefix . "_groups_blocks WHERE group_id = $access_id";
    $qry2 = "DELETE FROM " . $prefix . "_groups_modules WHERE group_id = $access_id";
    if (!sql_query($qry1) || !sql_query($qry2)) {
        mxErrorScreen(_DELERROR2, _DELGROUPERROR);
        return;
    }
    // then delete the group/acl from the access table
    $qry3 = "DELETE FROM " . $prefix . "_groups_access WHERE access_id='$access_id'";
    if (!sql_query($qry3)) {
        mxErrorScreen(_DELERROR2, _DELERROR);
        return;
    }
    // then set users to default group
    sql_query("UPDATE {$user_prefix}_users set user_ingroup=" . intval($userconfig->default_group) . " WHERE user_ingroup='" . $access_id . "'");

    /* HOOK: Modulspezifische Gruppenänderungen durchfuehren */
    $hook = load_class('Hook', 'groups.delete');
    $hook->gid = $access_id;
    $hook->set('only_allowed', false);

    $hook->run();

    $msg = _DELSUCCESS . " (<b>" . $access_title . "</b>)";
    $msg .= groupsRefreshLink(2000);
    mxMessageScreen($msg, _GROUPSADMIN, 0);
    return;
}

function getUsersSelectOptions()
{
    global $user_prefix, $prefix;
    $useroptions = "";
    $qry = "SELECT {$user_prefix}_users.uname, {$user_prefix}_users.uid, {$user_prefix}_users.user_ingroup, ${prefix}_groups_access.access_title
					FROM {$user_prefix}_users
					LEFT JOIN ${prefix}_groups_access
					ON {$user_prefix}_users.user_ingroup = ${prefix}_groups_access.access_id
					WHERE {$user_prefix}_users.user_stat = 1
					ORDER BY {$user_prefix}_users.uname";
    $result = sql_query($qry);
    if ($result) {
        while (list($uname, $uid, $level, $grp) = sql_fetch_row($result)) {
            $view = (empty($grp) || $level == 1) ? $uname : "$uname &nbsp; &raquo; &nbsp; $grp";
            $useroptions .= "<option value=\"" . $uid . "\">" . $view . "</option>\n";
        }
    }
    $useroptions = (empty($useroptions)) ? "<option value=0>No Users available</option>" : $useroptions;
    return $useroptions;
}

/* check to be sure group name is not a duplicate
 returns true if duplicate, false if non */
function checkDuplicateACL($checking_group_name)
{
    global $user_prefix, $prefix;
    $result = sql_query("SELECT access_title from " . $prefix . "_groups_access WHERE access_title='" . $checking_group_name . "'");
    if ($result) {
        list($compare_title) = sql_fetch_row($result);
    }
    return (empty($compare_title)) ? false : true;
}

/* returns the highest number for of access levels (group levels) */
function getAccessLevelCount()
{
    global $user_prefix, $prefix;
    $result = sql_query("SELECT MAX(access_id) FROM " . $prefix . "_groups_access");
    list($total_count) = sql_fetch_row($result);
    if (empty($total_count)) {
        sql_query("INSERT INTO " . $prefix . "_groups_access (access_id, access_title) values (1, '" . MX_FIRSTGROUPNAME . "')");
        $total_count = 1;
    }
    $total_count++;
    return $total_count;
}

function groupsRefreshLink($timeout = 0)
{
    $link = adminUrl(PMX_MODULE);
    pmxHeader::add('<meta http-equiv="Refresh" content="' . $timeout . ';URL=' . $link . '">');
    $timeout = (empty($timeout)) ? 3000 : $timeout;
    $timeoutshow = $timeout / 1000;
    $out = "<br /><br /><br />\n" . _RETURNFROMALT . " $timeoutshow " . _RETURNFROMALT2 . "<br />\n";
    $out .= "" . _RETURNFROMCLICK . "&nbsp;<a href=\"" . $link . "\">" . _RETURNFROMCLICKHERE . "</a> " . _RETURNFROMCLICKHERE10 . "\n";
    $out .= "\n<script type=\"text/javascript\">\n";
    $out .= "<!--\n";
    $out .= "function gotoMenu() {\n";
    $out .= " window.location.href=\"" . $link . "\"\n";
    $out .= " }\n";
    $out .= "window.setTimeout(\"gotoMenu()\", " . $timeout . ");\n";
    $out .= "//-->\n";
    $out .= "</script>\n";
    return $out;
}

function groupListLegend()
{
    echo "<table align=\"right\" border=\"0\" cellspacing=\"0\" cellpadding=\"3\">"
     . "<tr><td colspan=\"3\"><b>" . _GRPLEGEND . ":</b></td></tr>"
     . "<tr><th><input type=\"checkbox\" /></th><td>" . _GRPLEGENDELEMENT . "</td><td>&nbsp;=&nbsp;</td><td>" . _GRPLEGEND1 . "</td></tr>"
     . "<tr><th><input type=\"checkbox\" /></th><td><i>" . _GRPLEGENDELEMENT . "</i></td><td>&nbsp;=&nbsp;</td><td>" . _GRPLEGEND2 . "</td></tr>"
     . "<tr><th>-</th><td>" . _GRPLEGENDELEMENT . "</td><td>&nbsp;=&nbsp;</td><td>" . _GRPLEGEND3 . "</td></tr>"
     . "<tr><th>-</th><td><i>" . _GRPLEGENDELEMENT . "</i></td><td>&nbsp;=&nbsp;</td><td>" . _GRPLEGEND4 . "</td></tr>"
     . "<tr><th>x</th><td>" . _GRPLEGENDELEMENT . "</td><td>&nbsp;=&nbsp;</td><td>" . _GRPLEGEND5 . "</td></tr>"
     . "<tr><th>x</th><td><i>" . _GRPLEGENDELEMENT . "</i></td><td>&nbsp;=&nbsp;</td><td>" . _GRPLEGEND6 . "</td></tr>"
     . "</table>";
}

switch ($op) {
    case PMX_MODULE . '/addGroup':
        addGroup($_POST);
        break;
    case PMX_MODULE . '/delUserLevel':
        delUserLevel($_POST);
        break;
    case PMX_MODULE . '/delUserLevelConf':
        delUserLevelConf($_GET);
        break;
    case PMX_MODULE . '/GroupMove':
        moveToGroup($_POST);
        break;
    case PMX_MODULE . '/modifyGroup':
        editGroup($_POST);
        break;
    case PMX_MODULE . '/updateGroup':
        updategroup($_POST);
        break;
    default:
        displayGroups();
        break;
}

?>