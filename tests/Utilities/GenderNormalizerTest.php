<?php
namespace Solvire\Utilities;

use Solvire\Utilities\GenderNormalizer as G;

/**
 * Approprite use of the term test-tickle? 
 * Guess not. 
 *
 * @group Utilities 
 * @author solvire (cis male) <stevenjscott@gmail.com>
 * @package Solvire
 * @namespace Solvire\Utilities
 *           
 */
class GenderNormalizerTest  extends \BaseTestCase
{


    /**
     */
    public function testCanBeNormalize()
    {
        
        $g = G::spot('man');
        $this->assertEquals('male',$g);
        $this->assertEquals('male',G::getMaleValue());
        G::setMaleValue('pig');
        $this->assertNotEquals('male', G::getMaleValue());
        
        
        $g = G::spot('woman');
        $this->assertEquals('female',$g);
        G::setFemaleValue('BADASS');
        $this->assertNotEquals('female',G::getFemaleValue());
        
        try {
        	G::spot('dolphin');
        } catch (\Solvire\Utilities\GenderDivisibilityException $e) {
            $this->assertInstanceOf('\Solvire\Utilities\GenderDivisibilityException', $e);
        }
        
        
        
        // not a trans am 
        $trans = G::spot('trans man',false);
        $this->assertEquals('trans man',$trans);
        $wat = G::spot('dolphin',false);
        $this->assertEquals('other',$wat);
        
        
        
        
    }

}
