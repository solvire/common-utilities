<?php
namespace Solvire\HTTP;

use Solvire\HTTP\RequestUtil as Ru;

/**
 *
 * @author solvire <stevenjscott@gmail.com>
 * @package Solvire
 * @namespace Solvire\HTTP
 * @group HTTP
 *      
 *       Usage:
 *       use Solvire\HTTP\RequestUtil as Ru;
 *       $ip = Ru::ip()
 */
class RequestUtilTest extends \BaseTestCase
{

    /**
     * TODO need to implement this better
     */
    public function testCanGetIP()
    {
        $local = '192.168.1.1';
        
        $ip = Ru::ip();
        $this->assertEquals('UNKNOWN',$ip);
        
        $_SERVER['HTTP_CLIENT_IP'] = $local;
        $this->assertEquals($local,Ru::ip());
        unset($_SERVER['HTTP_CLIENT_IP']);
        
        $_SERVER['HTTP_X_FORWARDED_FOR'] = $local;
        $this->assertEquals($local,Ru::ip());
        unset($_SERVER['HTTP_X_FORWARDED_FOR']);

        $_SERVER['HTTP_X_FORWARDED'] = $local;
        $this->assertEquals($local,Ru::ip());
        unset($_SERVER['HTTP_X_FORWARDED']);
        
        $_SERVER['HTTP_FORWARDED_FOR'] = $local;
        $this->assertEquals($local,Ru::ip());
        unset($_SERVER['HTTP_FORWARDED_FOR']);
        
        $_SERVER['HTTP_FORWARDED'] = $local;
        $this->assertEquals($local,Ru::ip());
        unset($_SERVER['HTTP_FORWARDED']);
        
        $_SERVER['REMOTE_ADDR'] = $local;
        $this->assertEquals($local,Ru::ip());
        
    }
}
