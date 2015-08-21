<?php
namespace SolvireCommonUtilities\Application;

/**
 * 
 * @author solvire <stevenjscott@gmail.com>
 * @package Application
 * @namesapce SolvireCommonUtilities\Application
 * 
 * Usage:
 *   use SolvireCommonUtilities\Application\Environment as Ev;
 *   Ev::get($options, $requiredFields) 
 */
class Environment
{
    
    /**
     * 
     * @param unknown $key
     * @param unknown $default
     * @throws RuntimeException
     * @return string|unknown
     */
    public static function get($key, $default = null)
    {
        // always a string or we can validate it
        $val = getenv($key);
        if ($val !== null && $val !== false)
            return $val;

        // if we asked for it without a default then blow up
        if ($default === null)
            throw new \RuntimeException("The environment variable $key must be set.");
        return $default;
    }
}
