<?php
namespace Solvire\Utilities;

use Solvire\Utilities\OptionsChecker as Ch;
/**
 * 
 * @author solvire <stevenjscott@gmail.com>
 * @package Solvire
 * @namespace Solvire\Utilities
 * 
 * Usage:
 *   use Solvire\Utilities\OptionsChecker as Ch;
 *   Ch::ek($options, $requiredFields) 
 */
class OptionsCheckerTest extends \BaseTestCase
{

    
    /**
     * @expectedException \RuntimeException 
     */
    public function testCanCheckOptions()
    {
        
        $required = ['opt1','opt2'];
        $options = ['opt1' => 1, 'opt2' => 'two'];
        
        // good on this one
        Ch::ek($options, $required);
        
        // blow up 
        Ch::ek($options, array_merge($required , ['opt3']) );
        
        
    }
    
    /**
     * @expectedException \RuntimeException
     */
    public function testCannotPushBadOptions()
    {
        $errs = OptionsChecker::checkOptions('not array',['test']);
    }
    
}
