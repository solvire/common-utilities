<?php
namespace Solvire\Utilities;

/**
 * No this has nothing to do with the Caitlyn Jenner types..
 * kinda
 * Spread the love
 *
 *
 * Usage:
 *     use Solvire\Utilities\GenderNormalizer as G;
 *     G::spot($gender)
 *
 *
 * @author solvire <stevenjscott@gmail.com>
 * @package Solvire
 * @namespace Solvire\Utilities
 *           
 *           
 */
class GenderNormalizer
{

    /**
     * Not sure why we protect these misogynists but in this case for uniformity and gender equality.
     *
     * @var string male
     */
    protected static $male = 'male';

    /**
     *
     * @var array
     */
    protected static $maleAliases = [
        'man',
        'male',
        'men',
        'guy',
        'dude',
        'bro',
        'boy'
    ];

    /**
     * Not saying they need protection.
     * Strength!
     *
     * @var unknown
     */
    protected static $female = 'female';

    /**
     * yes if you are labeled a bitch guys you get normalized to female.
     * sorry.
     *
     * @var array
     */
    protected static $femaleAliases = [
        'woman',
        'women',
        'womyn',
        'female',
        'girl',
        'babe',
        'godess',
        'princess',
        'queen',
        'bitch'
    ];

    /**
     * @var complicated - yeah it is 
     */
    protected static $genderOtherTypes = [
        'agender',
        'androgyne',
        'androgynous',
        'bigender',
        'cis',
        'cisgender',
        'cis female',
        'cis male',
        'cis man',
        'cis woman',
        'cisgender female',
        'cisgender male',
        'cisgender man',
        'cisgender woman',
        'female to male',
        'ftm',
        'gender fluid',
        'gender nonconforming',
        'gender questioning',
        'gender variant',
        'genderqueer',
        'intersex',
        'male to female',
        'mtf',
        'neither',
        'neutrois',
        'non-binary',
        'other',
        'pangender',
        'trans',
        'trans*',
        'trans female',
        'trans* female',
        'trans male',
        'trans* male',
        'trans man',
        'trans* man',
        'trans person',
        'trans* person',
        'trans woman',
        'trans* woman',
        'transfeminine',
        'transgender',
        'transgender female',
        'transgender male',
        'transgender man',
        'transgender person',
        'transgender woman',
        'transmasculine',
        'transsexual',
        'transsexual female',
        'transsexual male',
        'transsexual man',
        'transsexual person',
        'transsexual woman',
        'two-spirit'
    ];

    /**
     * check the options
     * how many gender types are there now?
     * who is the authority?
     * Maybe we need an ISO
     *
     *
     *
     * @param string $gender
     *            - the proposed gender type
     * @param boolean $oppress
     *            - the classic representation is forced
     * @return mixed - array of missing fields. or true
     */
    public static function normalize($gender, $oppress = true)
    {
        $g = strtolower($gender);
        
        // see if we have a woman
        // yes we check ladies first
        // coders are sometimes chauvinists
        if (in_array($g, self::$femaleAliases))
            return self::$female;
            
            // see if our string exists in the list
        if (in_array($g, self::$maleAliases))
            return self::$male;
            
            // if we have found no traditional genders
            // then we decide whether or not to suppress this level of individuality
        if ($oppress)
            throw new GenderDivisibilityException("Sorry buddy. Pick a side.");
        

        // if they match ANY Of them just give them the trophy 
        if (in_array($g, self::$genderOtherTypes))
            return $g;
        
        
        // yeah you are special 
        // we have a word for you 
        return 'other';
    }

    /**
     * What? You are spotting them? Like going to venice beach.
     * Not a play on terms.
     *
     * @see normalize()
     * @param string $gender            
     * @param boolean $oppress            
     * @return string
     */
    public static function spot($gender, $oppress = true)
    {
        return self::normalize($gender, $oppress);
    }

    /**
     *
     * @return 0 oops
     */
    public static function getMaleValue()
    {
        return self::$male;
    }

    /**
     * Since the class is static you can't boot your penis into something else at load time.
     * But it can be set later.
     * By the public.
     *
     * @param string $male            
     */
    public static function setMaleValue($male)
    {
        self::$male = $male;
    }

    /**
     * Considered adding a random BS test question every 10 attempts.
     *
     * Would fail deterministic systems however.
     *
     * @return string representation of a female identifier
     */
    public static function getFemaleValue()
    {
        // return BS::pushButton(rand(1,10), $this->female);
        return self::$female;
    }

    /**
     * This consists with a lot of strong paternal input.
     * A string doesn't cut it.
     * But for brevity.
     *
     * @param string $female            
     */
    public static function setFemaleValue($female)
    {
        self::$female = $female;
    }
}
