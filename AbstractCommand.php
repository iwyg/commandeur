<?php

/**
 * This File is part of the Stubs package
 *
 * (c) Thomas Appel <mail@thomas-appel.com>
 *
 * For full copyright and license information, please refer to the LICENSE file
 * that was distributed with this package.
 */

namespace Thapp\Commandeur;

use \Thapp\Commandeur\CommandInterface;

/**
 * @class CommandStub
 * @package Stubs
 * @version $Id$
 */
class AbstractCommand implements CommandInterface
{
    /**
     * attrs
     *
     * @var array
     */
    protected $attrs;

    /**
     * has
     *
     * @param string $attr
     *
     * @return boolean
     */
    public function has($attr)
    {
        return isset($this->attrs[$attr]);
    }

    /**
     * get
     *
     * @param string $attr
     *
     * @return mixed
     */
    public function get($attr)
    {
        return $this->attrs[$attr];
    }
}
