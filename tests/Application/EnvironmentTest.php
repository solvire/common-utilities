<?php
namespace Solvire\Application;

use Solvire\Application\Environment as Ev;

/**
 * 
 * @author solvire <stevenjscott@gmail.com>
 * @package Application
 * @namespace Solvire\Application
 * @group Application 
 * 
 * Usage:
 *   use Solvire\Application\Environment as Ev;
 *   Ev::get($key) 
 */
class EnvironmentTest extends \BaseTestCase
{
    
    /**
     * simple test to get an environment variable. 
     * 
     * @expecteException RuntimeException
     */
    public function testCanGetEnvironment()
    {
        
        $env1 = $_ENV['APPLICATION_NAME'];
        $env2 = Ev::get('APPLICATION_NAME');
        $this->assertEquals($env1,$env2);
        
        $this->assertEquals('test',Ev::get('no_exist','test'));
        
    }
}
