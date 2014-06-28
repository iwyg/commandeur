<?php

/**
 * This File is part of the Stubs package
 *
 * (c) Thomas Appel <mail@thomas-appel.com>
 *
 * For full copyright and license information, please refer to the LICENSE file
 * that was distributed with this package.
 */

namespace Thapp\Commandeur\Tests\Stubs;

use \Thapp\Commandeur\AbstractCommand;

/**
 * @class CommandStub
 * @package Stubs
 * @version $Id$
 */
class CommandStub extends AbstractCommand
{

    public function __construct($name, $age, $sex)
    {
        $this->attrs = compact('name', 'age', 'sex');
    }
}
