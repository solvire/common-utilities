<?php
namespace Solvire\HTTP;

/**
 *
 * @author solvire <stevenjscott@gmail.com>
 * @package Solvire
 * @namespace Solvire\HTTP
 *      
 *       Usage:
 *       use Solvire\HTTP\RequestUtil as Ru;
 *       $ip = Ru::ip()
 */
class RequestUtil
{

    /**
     * TODO this needs to be secured. 
     * user can spoof headers and cause XSS issues. 
     * 
     * 
     * @return Ambigous <string, unknown>
     */
    public static function ip()
    {
        if (isset($_SERVER['HTTP_CLIENT_IP']) && $_SERVER['HTTP_CLIENT_IP'])
            return $_SERVER['HTTP_CLIENT_IP'];
        elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && $_SERVER['HTTP_X_FORWARDED_FOR'])
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        elseif (isset($_SERVER['HTTP_X_FORWARDED']) && $_SERVER['HTTP_X_FORWARDED'])
            return $_SERVER['HTTP_X_FORWARDED'];
        elseif (isset($_SERVER['HTTP_FORWARDED_FOR']) && $_SERVER['HTTP_FORWARDED_FOR'])
            return $_SERVER['HTTP_FORWARDED_FOR'];
        elseif (isset($_SERVER['HTTP_FORWARDED']) && $_SERVER['HTTP_FORWARDED'])
            return $_SERVER['HTTP_FORWARDED'];
        elseif (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'])
            return $_SERVER['REMOTE_ADDR'];
        else
            return 'UNKNOWN';
    }
}
