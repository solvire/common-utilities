# Common Function Library
[![Build Status](https://travis-ci.org/solvire/common-utilities.svg)](https://travis-ci.org/solvire/common-utilities)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/solvire/common-utilities/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/solvire/common-utilities/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/solvire/common-utilities/badges/build.png?b=master)](https://scrutinizer-ci.com/g/solvire/common-utilities/build-status/master)
[![Latest Stable Version](https://poser.pugx.org/solvire/common-utilities/v/stable)](https://packagist.org/packages/solvire/common-utilities)
[![Latest Unstable Version](https://poser.pugx.org/solvire/common-utilities/v/unstable)](https://packagist.org/packages/solvire/common-utilities)
[![License](https://poser.pugx.org/solvire/common-utilities/license)](https://packagist.org/packages/solvire/common-utilities)
[![Total Downloads](https://poser.pugx.org/solvire/common-utilities/downloads)](https://packagist.org/packages/solvire/common-utilities)

## About 

This is a storage house for the more common things I have had to build. 
I use them in many projects so there is no point in killing me DRYly. 


## Installation 

[PHP](https://php.net) 5.5+ or [HHVM](http://hhvm.com) 3.6+, and [Composer](https://getcomposer.org) are required.

    composer require solvire/solvire-utilities 

## Libraries 

### Utilities

*Options Checker*

Usage:  
```php
use Solvire\Utilities\OptionsChecker as Ch;
Ch::ek($options, $requiredFields);
```
This code will just throw an exception if the variables are not present. It doesn't do anything for checking. I was tired of writing the stupid loop all the time. 

*Type Converter*


### HTTP 

*Request Utility*

Usage:
```php
use Solvire\HTTP\RequestUtil as Ru;
$ip = Ru::ip();
```

This will run through the various server variables that might be storing an IP

### Application 

*Environment Accessors*

Usage:
```php
use Solvire\Application\Environment as Ev;
Ev::get($key);
Ev::get($key,$default);
```

This will get the environment variable listed. If you don't provide a default and the variable isn't set it will blow up on you. Ie. throw and error. 

