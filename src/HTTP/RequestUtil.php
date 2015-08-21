<?php
namespace Solvire\HTTP;

/**
 *
 * @author solvire <stevenjscott@gmail.com>
 * @package Solvire
 * @name sapce Solvire\HTTP
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
        $ipaddress = '';
        if ($_SERVER['HTTP_CLIENT_IP'])
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        elseif ($_SERVER['HTTP_X_FORWARDED_FOR'])
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        elseif ($_SERVER['HTTP_X_FORWARDED'])
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        elseif ($_SERVER['HTTP_FORWARDED_FOR'])
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        elseif ($_SERVER['HTTP_FORWARDED'])
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        elseif ($_SERVER['REMOTE_ADDR'])
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
}
