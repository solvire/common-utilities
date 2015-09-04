<?php
namespace Solvire\Application;

/**
 * 
 * @author solvire <stevenjscott@gmail.com>
 * @package Application
 * @namespace Solvire\Application
 * 
 * Usage:
 *   use Solvire\Application\Environment as Ev;
 *   Ev::get($key)
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
        // this means that we aren't just going to fill it with nothing and keeps the slop down
        // basically make sure you set your vars or you get angry letters 
        if ($default === null)
            throw new \RuntimeException("The environment variable $key must be set.");
        return $default;
    }
}
