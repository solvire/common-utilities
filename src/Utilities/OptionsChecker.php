<?php
namespace SolvireCommonUtilities\Utilities;

/**
 * 
 * @author solvire <stevenjscott@gmail.com>
 * @package Solvire
 * @namesapce SolvireCommonUtilities\Utilities
 * 
 * Usage:
 *   use LF\Utility\OptionsChecker as Ch;
 *   Ch::ek($options, $requiredFields) 
 */
class OptionsChecker
{

    /**
     * check the options
     * 
     * @param array $options            
     * @param array $requiredFields            
     * @return mixed - array of missing fields. or true
     */
    public static function checkOptions($options, $requiredFields)
    {
        if (! is_array($options) || ! is_array($requiredFields))
            throw new InvalidParameterException("Your options are empty or not filled properly.");
        
        $fieldErrors = [];
        // right now we only deal with single dimension
        foreach ($requiredFields as $field) {
            if (! isset($options[$field])) {
                $fieldErrors[] = $field;
            }
        }
        
        if (count($fieldErrors) > 0) {
            return $fieldErrors;
        }
        
        return true;
    }

    public static function ek($options, $requiredFields)
    {
        $errors = self::checkOptions($options, $requiredFields);
        if (is_array($errors) && count($errors) > 0) {
            $ers = implode(',', $errors);
            throw new InvalidParameterException("The following fields are not included: [$ers] ");
        }
        return true;
    }
}
