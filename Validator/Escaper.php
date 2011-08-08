<?php

/*
 * This file is part of the Orient package.
 *
 * (c) Alessandro Nadalin <alessandro.nadalin@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Class Escaper
 *
 * @package     Orient
 * @subpackage  Validator
 * @author      Alessandro Nadalin <alessandro.nadalin@gmail.com>
 */

namespace Orient\Validator;

use Orient\Validator;
use Orient\Exception\Validation as ValidationException;

class Escaper extends Validator
{
    protected function clean($value)
    {
        if ($value = addslashes($value)) {
            return $value;
        }
        
        throw new ValidationException($value, __CLASS__);
    }
}

