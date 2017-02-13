<?php
/**
* @version $Id: strspn.php 6 2015-07-08 07:07:06Z PragmaMx $
* @package utf8
* @subpackage strings
*/

//---------------------------------------------------------------
/**
* UTF-8 aware alternative to strspn
* Find length of initial segment matching mask
* Note: requires utf8_strlen and utf8_substr (if start, length are used)
* @param string
* @return int
* @see http://www.php.net/strspn
* @package utf8
* @subpackage strings
*/
function utf8_strspn($str, $mask, $start = NULL, $length = NULL) {
    
    $mask = preg_replace('!([\\\\\\-\\]\\[/^])!','\\\${1}',$mask);
    
    if ( $start !== NULL || $length !== NULL ) {
        $str = utf8_substr($str, $start, $length);
    }
        
    preg_match('/^['.$mask.']+/u',$str, $matches);
    
    if ( isset($matches[0]) ) {
        return utf8_strlen($matches[0]);
    }
    
    return 0;

}

