# Common Function Library

## About 

This is a storage house for the more common things I have had to build. 
I use them in many projects so there is no point in killing me DRYly. 


## Installation 

[PHP](https://php.net) 5.5+ or [HHVM](http://hhvm.com) 3.6+, and [Composer](https://getcomposer.org) are required.

    composer require solvire/solvire-utilities 

## Libraries 

### Utilities

Options Checker 

Usage:  
```php
use Solvire\Utilities\OptionsChecker as Ch;
Ch::ek($options, $requiredFields);
```


