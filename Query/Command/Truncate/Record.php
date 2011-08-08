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
 * Class Record
 *
 * @package     Orient
 * @subpackage  Query
 * @author      Alessandro Nadalin <alessandro.nadalin@gmail.com>
 */

namespace Orient\Query\Command\Truncate;

use Orient\Query\Command;

class Record extends Command
{
    const SCHEMA = "TRUNCATE RECORD :Rid";
    
    public function __construct($rid)
    {
        parent::__construct();
        
        $this->setToken('Rid', $rid);
    }
    
    protected function getTokenFormatters()
    {
        return array_merge(parent::getTokenFormatters(), array(
          'Rid'     => "Orient\Formatter\Query\Rid",
        ));
    }
}

